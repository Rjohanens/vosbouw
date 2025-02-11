<?php

namespace App\Enum;

enum ProjectStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'gepubliceerd';
    case ARCHIVED = 'gearchiveerd';
}
