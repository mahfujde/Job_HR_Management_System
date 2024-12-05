<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;	

class InterviewConversation extends Conversation
{
    public function askReason()
    {
        $question = Question::create("What type of tips do you need?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Interview')->value('interview'),
                Button::create('Govt Job Preparation')->value('govjob'),
                Button::create('Entreprenuerial Tips')->value('entreprenuerial'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'interview') {
                
                    $this->say(Inspiring::interview());

                } else if($answer->getValue() === 'govjob') {
                    $this->say(Inspiring::govjob());
                }
                else{
                    $this->say(Inspiring::entreprenuerial());
                }
            }
        });
    }

    
    public function run()
    {
        $this->askReason();
    }
}
