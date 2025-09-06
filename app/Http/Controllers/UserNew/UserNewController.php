<?php

namespace App\Http\Controllers\UserNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserNew\StoreUserNewRequest;
use App\Http\Requests\UserNew\UpdateUserNewRequest;
use App\Models\Comment;
use App\Models\CommentAttachment;
use App\Models\CommentsLike;
use App\Models\CommentsTag;
use App\Models\Group;
use App\Models\UserNew;
use App\Models\UserNewAttachment;
use App\Models\UserNewBookmark;
use App\Models\UserNewGroup;
use App\Models\UserNewLike;
use App\Models\UserNewRead;
use App\Models\UserNewTag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user_news=UserNew::where('company_id',$user->company_id)
            ->orderBy('publish_date','desc')
            ->get();
        //$news_ar['news']=array();
        $i=0;
        $news_ar=array();
        foreach ($user_news as $new) {
            $news_ar[$i]['id'] = $new->id_code;
            $news_ar[$i]['publish_date'] = $new->publish_date.' '.$new->publish_time;
            $news_ar[$i]['title'] = $new->title;
            $news_ar[$i]['description'] = $new->message;
            if ($new->userNewBookmarks->count()>0) {
                $news_ar[$i]['isBookmarked'] = true;
            } else {
                $news_ar[$i]['isBookmarked'] = false;
            }
            //$news_ar[$i]['user'] = $new->users->firstname.' '.$new->users->lastname;
            $news_ar[$i]['author']['id']=$new->users->id_code;
            $news_ar[$i]['author']['name'] = $new->users->firstname.' '.$new->users->lastname;
            $groups='';
            foreach ($new->users->groups as $group) {
                if ($groups === '') {
                    $groups=$group->name;
                } else {
                    $groups = $groups . ', ' . $group->name;
                }
            };
            $news_ar[$i]['author']['groups'] = $groups;

            $news_ar[$i]['read_count'] = $new->userNewReads->count();
            $news_ar[$i]['reactions_count'] = $new->userNewLikes->count();
            $news_ar[$i]['comments_count'] = $new->comments->count();
            $news_ar[$i]['image'] = $new->picture_url;
            $i++;
        }
        $array['news']=$news_ar;
        return $this->successResponse($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserNewRequest $request)
    {
        $user = Auth::user();
        if ($user !== null) {
            if ($request->image !== null) {
                $mytime = Carbon::now()->timestamp;
                $file_name = 'image_' . $mytime . '.jpg';
                Storage::disk('images')->put($file_name, base64_decode($request['image']));
            }
            $user_new = UserNew::create([
                'title' => $request['title'],
                'message' => $request['message'],
                'picture' => $file_name,
                'user_id' => $user->id,
                'company_id' => $user->company_id,
            ]);
            if ($request['tags'] !== null) {
                foreach ($request['tags'] as $tag) {
                    if ($tag !== null) {
                        UserNewTag::create([
                            'user_new_id' => $user_new->id,
                            'company_id' => $user->company_id,
                            'tag' => $tag,
                        ]);
                    }
                }
            }
            if ($request['user_groups'] !== null) {
                foreach ($request['user_groups'] as $user_group) {
                    $group_id=json_decode(base64_decode($user_group))->id;
                    if($user_group !== null) {
                        UserNewGroup::create([
                            'user_new_id' => $user_new->id,
                            'company_id' => $user->company_id,
                            'group_id' => $group_id,
                       ]);
                    }
                }
            }
            if ($request['attachments'] != null) {
                foreach ($request['attachments'] as $attachment){
                    $file_name='';
                    $mytime = Carbon::now()->timestamp;
                    if ($attachment['type']==1 || $attachment['type']==2 ) {
                        if ($attachment['type']==1 ) {
                            $file_name = 'attachment_' . $mytime . '.pdf';
                        }
                        if ($attachment['type']==2 ) {
                            $file_name = 'attachment_' . $mytime . '.docx';
                        }
                        Storage::disk('images')->put($file_name, base64_decode($attachment['content']));
                    }
                    UserNewAttachment::create([
                        'user_new_id' => $user_new->id,
                        'company_id' => $user->company_id,
                        'title' => $attachment['title'],
                        'file_type'=> $attachment['type'],
                        'link' => $attachment['url'],
                        'picture' => $file_name,
                    ]);

                }
            };
        }
        return $this->emptyResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show($user_new_id_code)
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $user_new=UserNew::where('id',$user_new_id)->first();
        if ($user_new == null) {
            return $this->errorResponse([__($user_new_id_code.' not found')]);
        }
        $news_ar['id'] = $user_new->id_code;
        $news_ar['publish_date'] = $user_new->publish_date.' '.$user_new->publish_time;
        $news_ar['title'] = $user_new->title;
        $news_ar['description'] = $user_new->message;
        $news_ar['image'] = $user_new->picture_url;
        $news_ar['highlight_entry'] = $user_new->highlight_entry;
        $news_ar['block_comments'] = $user_new->block_comments;
        $news_ar['block_reactions'] = $user_new ->block_reactions;
        $news_ar['author']['id']=$user_new->users->id_code;
        $news_ar['author']['name'] = $user_new->users->firstname.' '.$user_new->users->lastname;
        $groups='';
        foreach ($user_new->users->groups as $group) {
            if ($groups === '') {
                $groups=$group->name;
            } else {
                $groups = $groups . ', ' . $group->name;
            }
        };
        $news_ar['author']['groups'] = $groups;
        $tags=$user_new->userNewTags;
        $tags_ar=array();
        $i=0;
        foreach ( $tags as $tag) {
            $tags_ar[$i]= $tag ->tag;
            $i++;
        }
        $news_ar['tags']=$tags_ar;
        $groups=$user_new->userNewGroups;
        $groups_ar=array();
        $i=0;
        foreach ($groups as $group) {
            $group_list=Group::where('id',$group->group_id)->first();
            $groups_ar[$i]['id']=$group_list->id_code;
            $groups_ar[$i]['name']=$group_list->name;
            $i++;
        }
        $news_ar['groups']=$groups_ar;
        if ($user_new->userNewBookmarks->count()>0) {
            $news_ar['isBookmarked'] = true;
        } else {
            $news_ar['isBookmarked'] = false;
        }
        $news_ar['read_count'] = $user_new->userNewReads->count();
        $news_ar['reactions_count'] = $user_new->userNewLikes->count();
        $news_ar['comments_count'] = $user_new->comments->count();
        //$news_ar['reactions'] = $user_new->userNewLikes;
        $comments=$user_new->comments;
        $comments_ar=array();
        $i=0;
        foreach ($comments as $comment) {
           $comments_ar[$i]['id']= $comment->id_code;
           $comments_ar[$i]['message']=$comment->message;
           $comments_ar[$i]['created_at']=$comment->created_at->format('Y-m-d H:i:s');
           $comments_ar[$i]['author']['id']=$comment->users->id_code;
           $comments_ar[$i]['author']['name'] = $comment->users->firstname.' '.$comment->users->lastname;
            $groups='';
            foreach ($comment->users->groups as $group) {
                if ($groups === '') {
                    $groups=$group->name;
                } else {
                    $groups = $groups . ', ' . $group->name;
                }
            };
            $comments_ar[$i]['author']['groups'] = $groups;

           $i++;
        }
        $news_ar['comments'] =$comments_ar;
        $reactions = $user_new->userNewLikes;
        $reactions_ar=array();
        $i=0;
        foreach ( $reactions as $reaction) {
            $reactions_ar[$i]['reaction']=$reaction->like_type;
            $reactions_ar[$i]['author']['id']=$reaction->users->id_code;
            $reactions_ar[$i]['author']['name'] = $reaction->users->firstname.' '.$reaction->users->lastname;
            $groups='';
            foreach ($reaction->users->groups as $group) {
                if ($groups === '') {
                    $groups=$group->name;
                } else {
                    $groups = $groups . ', ' . $group->name;
                }
            };
            $reactions_ar[$i]['author']['groups'] = $groups;
            $i++;
        }
        $news_ar['reactions'] =$reactions_ar;


        $read=UserNewRead::where('user_id',$user->id)->where('user_new_id',$user_new_id)->first();
        if ($read === null) {
            UserNewRead::create([
                'user_id' => $user->id,
                'user_new_id' => $user_new_id,
                'company_id' => $user->company_id,
            ]);
        }
        $reads = $user_new->userNewReads;
        $reads_ar=array();
        $i=0;
        foreach ( $reads as $read) {
            $reads_ar[$i]['author']['id']=$read->users->id_code;
            $reads_ar[$i]['author']['name'] = $read->users->firstname.' '.$read->users->lastname;
            $groups='';
            foreach ($read->users->groups as $group) {
                if ($groups === '') {
                    $groups=$group->name;
                } else {
                    $groups = $groups . ', ' . $group->name;
                }
            };
            $reads_ar[$i]['author']['groups'] = $groups;
            $i++;
        }
        $news_ar['read'] =$reads_ar;
        $attachments=$user_new->userNewAttachments;
        $attachments_ar=array();
        $i=0;
        foreach ($attachments as $attachment) {
            $attachments_ar[$i]['id'] = $attachment->id_code;
            $attachments_ar[$i]['title'] = $attachment->title;
            if ($attachment->link != null && $attachment->link != '') {
                $attachments_ar[$i]['link'] = $attachment->link;
            }
            if ($attachment->picture_url != null && $attachment->picture != '') {
                $attachments_ar[$i]['link'] = $attachment->picture_url;
            }
            $attachments_ar[$i]['file_type']= $attachment->file_type;
            $i++;
        }
        $news_ar['attachments']=$attachments_ar;

        return $this->successResponse($news_ar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_new)
    {
        $user = Auth::user();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserNewRequest $request, $user_new_id_code)
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $user_new=UserNew::where('id',$user_new_id)->first();
        if ($user->id !== $user_new->user_id) {
            return $this->errorResponse([__('Permissions denied.')]);
        }
        if (null !== $user_new->picture && Storage::disk('images')->exists($user_new->picture)) {
            Storage::disk('images')->delete($user_new->picture);
        }
        if ($request->image !== null) {
            $mytime = Carbon::now()->timestamp;
            $file_name = 'image_' . $mytime . '.jpg';
            Storage::disk('images')->put($file_name, base64_decode($request['image']));
        }
        $user_new->title=$request['title'];
        $user_new->message = $request['message'];
        $user_new->picture = $file_name;
        $user_new->save();
        UserNewTag::where('user_new_id',$user_new_id)->delete();
            if ($request['tags'] !== null) {
                foreach ($request['tags'] as $tag) {
                    if ($tag !== null) {
                        UserNewTag::create([
                            'user_new_id' => $user_new->id,
                            'company_id' => $user->company_id,
                            'tag' => $tag,
                        ]);
                    }
                }
            }
        UserNewGroup::where('user_new_id',$user_new_id)->delete();
            if ($request['user_groups'] !== null) {
                foreach ($request['user_groups'] as $user_group) {
                    $group_id=json_decode(base64_decode($user_group))->id;
                    if($user_group !== null) {
                        UserNewGroup::create([
                            'user_new_id' => $user_new->id,
                            'company_id' => $user->company_id,
                            'group_id' => $group_id,
                        ]);
                    }
                }
            }
            $attachments=UserNewAttachment::where('user_new_id',$user_new_id)->get();
            foreach ($attachments as $attachment) {
                if (null !== $attachment->picture && Storage::disk('images')->exists($attachment->picture)) {
                    Storage::disk('images')->delete($attachment->picture);
                }
            }
            UserNewAttachment::where('user_new_id',$user_new_id)->delete();
            if ($request['attachments'] != null) {
                foreach ($request['attachments'] as $attachment){
                    $file_name='';
                    $mytime = Carbon::now()->timestamp;
                    if ($attachment['type']==1 || $attachment['type']==2 ) {
                        if ($attachment['type']==1 ) {
                            $file_name = 'attachment_' . $mytime . '.pdf';
                        }
                        if ($attachment['type']==2 ) {
                            $file_name = 'attachment_' . $mytime . '.docx';
                        }
                        Storage::disk('images')->put($file_name, base64_decode($attachment['content']));
                    }
                    UserNewAttachment::create([
                        'user_new_id' => $user_new->id,
                        'company_id' => $user->company_id,
                        'title' => $attachment['title'],
                        'file_type'=> $attachment['type'],
                        'link' => $attachment['url'],
                        'picture' => $file_name,
                    ]);

                }
            };

        return $this->emptyResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_new_id_code)
    {
        $user = Auth::user();
        $user_new_id=json_decode(base64_decode($user_new_id_code))->id;
        $user_new=UserNew::where('id',$user_new_id)->first();
        if ($user->id !== $user_new->user_id) {
            return $this->errorResponse([__('Permissions denied.')]);
        }
        if (null !== $user_new->picture && Storage::disk('images')->exists($user_new->picture)) {
            Storage::disk('images')->delete($user_new->picture);
        }
        UserNewTag::where('user_new_id',$user_new_id)->delete();
        UserNewGroup::where('user_new_id',$user_new_id)->delete();
        $attachments=UserNewAttachment::where('user_new_id',$user_new_id)->get();
        foreach ($attachments as $attachment) {
            if (null !== $attachment->picture && Storage::disk('images')->exists($attachment->picture)) {
                Storage::disk('images')->delete($attachment->picture);
            }
        }
        UserNewAttachment::where('user_new_id',$user_new_id)->delete();
        UserNewBookmark::where('user_new_id',$user_new_id)->delete();
        UserNewLike::where('user_new_id',$user_new_id)->delete();
        UserNewRead::where('user_new_id',$user_new_id)->delete();
        $comments=Comment::where('user_new_id',$user_new_id)->get();
        foreach ($comments as $comment) {
            CommentAttachment::where('comment_id',$comment->id)->delete();
            CommentsLike::where('comment_id',$comment->id)->delete();
            CommentsTag::where('comment_id',$comment->id)->delete();
        }
        Comment::where('user_new_id',$user_new_id)->delete();
        UserNew::where('id',$user_new_id)->delete();
    }
}
