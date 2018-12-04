<?php

namespace App\Http\Controllers\Mail;

use App\Jobs\SendEmail;
use App\Mail\UserSubscribedEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $email = $request->post('email');
        $mail = new UserSubscribedEmail($email);

        SendEmail::dispatch($mail)->onQueue('emails');

    }
}
