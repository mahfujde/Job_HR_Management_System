<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class BankConversation extends Conversation
{
     public function askQue()
    {
        $question = Question::create("Here Some role in Bank sector in Bangladesh")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Loan Officer')->value('lofficer'),
                Button::create('Data Processing Officer')->value('pofficer'),
                Button::create('Branch Manager')->value('bmanager'),
                Button::create('Internal Auditor')->value('iauditor'),

            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'lofficer') {
                
                    $this->say(Inspiring::lofficer());

                } 

                else if($answer->getValue() === 'pofficer') {
                   $this->say(Inspiring::pofficer());
                }

                else if($answer->getValue() === 'bmanager') {
                   $this->say(Inspiring::bmanager());
                }

              

                else{
                    $this->say(Inspiring::iauditor());
                }
            }
        });
    }

    public function run()
    {
         $this->askQue();
    }
}
