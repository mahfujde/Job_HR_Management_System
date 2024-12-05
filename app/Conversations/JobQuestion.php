<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\JobpostController;

class JobQuestion extends Conversation
{
    /**
     * First question
     */
    public function askQue()
    {
        $question = Question::create("Which job sector's information you need?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('IT Sector')->value('it'),
                Button::create('Banking')->value('banking'),
                Button::create('Govt. Sector')->value('govt'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'it') {
                
                    $this->say(Inspiring::itsector());
                } 

                else if($answer->getValue() === 'banking') {
                   $this->say(Inspiring::banking());
                }

                 

                else{
                    $this->say(Inspiring::govt());
                }
            }
        });
    }

    public function run()
    {
        $this->askQue();
    }



}
