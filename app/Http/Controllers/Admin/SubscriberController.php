<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
   public function index(){
       $subscribers = Subscriber::whereDate('created_at',Carbon::today())->get();
       return view('admin.subscriber.subscriber',[
        'subscribers' => $subscribers
       ]);
   }


   public function allSubscriber(){
       $subscribers = Subscriber::get();
       return view('admin.subscriber.all-subscriber',[
        'subscribers' => $subscribers
       ]);
   }
}
