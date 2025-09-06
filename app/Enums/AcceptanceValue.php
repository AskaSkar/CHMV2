<?php

namespace App\Enums;

enum AcceptanceValue: int
{
    case  ACCEPTANCE_OF_THE_RULES = 1;
    case ACCEPTANCE_OF_THE_PRIVACY_POLICY = 2;
    case ACCEPTANCE_OF_RECEIVE_MARKETING_INFORMATION = 3;
}
