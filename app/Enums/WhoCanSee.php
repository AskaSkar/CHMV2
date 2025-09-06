<?php

namespace App\Enums;

enum WhoCanSee:string
{
    case ALL = 'Wszyscy';
    case SELECTED_GROUPS = 'Wybrane grupy';
}
