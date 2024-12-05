<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ItJobConversation extends Conversation
{
     public function askQue()
    {
        $question = Question::create("Here Some role in IT sector in Bangladesh")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Project Manager')->value('pmanager'),
                Button::create('Developer')->value('developer'),
                Button::create('Programmer')->value('programmer'),
                Button::create('Machine Learning Engineer')->value('machine'),
                Button::create('Data Scientist')->value('data'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'pmanager') {
                
                    $this->say(Inspiring::pmanager());

                } 

                else if($answer->getValue() === 'developer') {
                   $this->say(Inspiring::developer());
                }

                else if($answer->getValue() === 'programmer') {
                   $this->say(Inspiring::programmer());
                }

                else if($answer->getValue() === 'machine') {
                   $this->say(Inspiring::machine());
                }

                else{
                    $this->say(Inspiring::data());
                }
            }
        });
    }

    public function run()
    {
         $this->askQue();
    }
}
