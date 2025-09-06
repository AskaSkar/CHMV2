<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index() {
        //echo 'Hej';
        //echo asset('images/th-4109958356.jpeg');
        $plik=base64_encode(file_get_contents('images/OIP-2845708344.jpeg'));
      //  Storage::disk('images')->put('aa.jpg', base64_decode($plik));
        echo $plik;
       // $mytime = Carbon::now()->timestamp;
       // echo $mytime;
    }
}
