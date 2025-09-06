<?php

namespace App\Enums;

enum FileType: int
{
    case PDF = 1;
    case DOCX =2;
    case SHAREPOINT = 3;
    case WWW = 4;
}
