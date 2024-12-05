<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\JobQuestion;
use App\Conversations\InterviewConversation;
use App\Conversations\ItJobConversation;
use App\Conversations\BankConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->listen();
    }
   
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }

    public function newConversation(BotMan $bot)
    {
        $bot->startConversation(new JobQuestion());
    }

    public function interviewConversation(BotMan $bot)
    {
        $bot->startConversation(new InterviewConversation());
    }

    public function itConversation(BotMan $bot)
    {
        $bot->startConversation(new ItJobConversation());
    }

   public function bankConversation(BotMan $bot)
    {
        $bot->startConversation(new BankConversation());
    }



    
}
