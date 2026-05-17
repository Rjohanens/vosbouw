<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMonthlyTestMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:test-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test mail to check if the mail configuration is correct.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('rickjohannes@hotmail.nl')
            ->send(new TestMail());

        Mail::to('vos.bouw@outlook.com')
            ->send(new TestMail());
    }
}
