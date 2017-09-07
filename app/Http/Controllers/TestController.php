<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notyourtechguy\Sniper\Student;

class TestController extends Controller
{
    public function test()
    {
    	$student = new Student('201011229', '985464');
    	$studentInfo = $student->getUserInfo();
    	// dd($studentInfo);
    }
}
