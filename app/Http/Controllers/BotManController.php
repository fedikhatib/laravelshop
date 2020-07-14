<?php
  
namespace App\Http\Controllers;

use App\Coupon;  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $this->askName($botman);
            }
            elseif ($message == 'coupon') {
            $cp =Coupon::select('code')
            ->inRandomOrder()
            ->limit(1)
            ->get();
            $cp=$cp->pluck('code');
           // $cp =$cp->stripslashes(preg_match('/"((?:[^"]|\\\\.)*)"/'));
            $botman->reply('the coupon code is ' .$cp);
            }
            else {
                $botman->reply("write 'hi' for testing... i don't understand");
            }
  
        });
        /* $botman->hears('coupon', function ($bot) {
            $cp =Coupon::select('code')
            ->inRandomOrder()
            ->limit(1)
            ->get();
            $cp=$cp->pluck('code');
           // $cp =$cp->stripslashes(preg_match('/"((?:[^"]|\\\\.)*)"/'));
            


            $bot->reply('the coupon code is ' .$cp);
        });
 */
        
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $botman->say('Nice to meet you '.$name);
        });
    }
}