<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Notyourtechguy\Sniper\Student;

class BotController extends Controller
{
    public function help($bot)
    {
    	$bot->reply('Login(Credentials will not be saved) : login <student_number> <SAIS PIN>');
    }

    public function login($bot, $username, $password)
    {
    	$bot->reply('Logging you in');

    	$student = new Student($username, $password);
    	$info = $student->getUserInfo();
    	$bot->reply('Welcome ' . $info['STUDENT_NAME3'] . '!');
    	$bot->reply('Student ID : ' . $info['STUDENT_ID']);
    }
}
