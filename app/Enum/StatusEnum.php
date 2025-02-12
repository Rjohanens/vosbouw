<?php

namespace App\Enum;

enum StatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'gepubliceerd';
    case ARCHIVED = 'gearchiveerd';
}
