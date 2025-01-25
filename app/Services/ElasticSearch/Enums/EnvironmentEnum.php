<?php

namespace App\Services\ElasticSearch\Enums;

enum EnvironmentEnum: string
{
    case UAT = 'uat';
    case TEST = 'test';
    case PROD = 'prod';
}
