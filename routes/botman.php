<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Middleware\Dialogflow;
use App\Http\Controllers\JobquestionController;
$botman = resolve('botman');


$botman->hears('hi', function ($bot) {
    $bot->reply('hi,How can i help you');
});

$botman->hears('hello', function ($bot) {
    $bot->reply('hello,How can i help you');
});

$botman->hears('my name is {name}', function ($bot,$name) {
    $bot->reply('How can i help you '.$name);
});

$botman->hears('i am {name}', function ($bot, $name) {
    $bot->reply('How can i help you '.$name);
});



$botman->hears('give me {interview} tips', function ($bot, $interview) {
    $bot->reply('1. Practice your answers to common '.$interview.' questions. 
				 2. Reread the job description. 
	             3. Recruit a friend to practice answering questions.
				 4. Prepare a list of references. 
				 5. Prepare smart questions for your '.$interview.'
                                                                ');
});

$botman->hears('how to {tell} about myself?', function ($bot, $tell) {
    $bot->reply('About yourself ' .$tell. ' techniques. Start with your name, than you can ' .$tell. '  about your last academic information after that you can ' .$tell. '  about your skill like you are laravel developer or php developer with ' .$tell. ' some project than you can about your extra curriculum activities.Finally, you can ' .$tell. '  about your hobby.');
});


$botman->hears('How to take {bcs} preparation', function ($bot, $name) {
    $bot->reply('Solve previous year question,  Read Newspaper, Practise Math');
});


$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands.');
});


$botman->hears('i need job information', BotManController::class.'@newConversation');

$botman->hears('jobs in it', BotManController::class.'@itConversation');

$botman->hears('jobs in bank', BotManController::class.'@bankConversation');

$botman->hears('need reference', BotManController::class.'@startConversation');

$botman->hears('need tips', BotManController::class.'@interviewConversation');

//$botman->hears('jobs in it', BotManController::class.'@itConversation');



//$botman->hears('all ok', function($bot) {
   // $bot->startConversation(new JobQuestion);
//});


//$botman->hears('need referrence', function($bot) {
   // $bot->startConversation(new ExampleConversation);
//});


/*$dialogFlow = DialogFlow::create('3cfb670db6494c268a27e37bc421c002')->listenForAction();
 
    $botman->middleware->received($dialogFlow);
 
    $botman->hears('smalltalk.greetings.*', function ($bot) {

        $extras = $bot->getMessage()->getExtras();
        $apiReply = $extras['apiReply'];
        $apiAction = $extras['apiAction'];
        $apiIntent = $extras['apiIntent'];
 
        $bot->reply($apiReply);
    })->middleware($dialogFlow);*/