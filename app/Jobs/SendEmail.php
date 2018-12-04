<?php

namespace App\Jobs;

use App\Mail\UserSubscribedEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var UserSubscribedEmail */
    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(UserSubscribedEmail $email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'Send email to ' . $this->email->getEmail() . PHP_EOL;

        try {
            Mail::to($this->email->getEmail())
                ->send($this->email);
            echo 'Email sends successfully' . PHP_EOL;
        } catch (\Exception $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }


    }
}
