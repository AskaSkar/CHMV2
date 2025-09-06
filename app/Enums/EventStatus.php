<?php

namespace App\Enums;

enum EventStatus: int
{
    case ACTIVE = 1;
    case IN_PROGRESS = 2;
    case FINISHED = 3;
}
