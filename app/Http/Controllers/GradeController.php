<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController  extends AuthApiController
{
    public function __construct()
    {
        parent::__construct(Grade::class);
    }
}
