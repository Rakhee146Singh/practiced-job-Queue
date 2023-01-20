<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\TestMail;
use App\Jobs\TestMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index($mail)
    {

        //for job & Queues
        // $emailJobs = new TestMailJob($mail);
        // $mail = $this->dispatch($emailJobs);
        // return "Mail Send Successfully";
    }

    public function mail()
    {
        //Normal Mail
        $email = "rakhi@gmail.com";
        $emailData = [
            'name' => 'Rakhee',
            'dob' => '14/06/2000'
        ];
        Mail::to($email)->send(new TestMail($emailData));
        dd('Send Mail Successfully');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function test()
    {
        $emailData = [
            'title' => 'Send mail from Nicesnippets.com',
            'url' => 'https://www.nicesnippets.com',
            'path' => '%Users%/ztlab78/Desktop/images'
        ];

        Mail::to('xyz@gmail.com')->send(new SendMail($emailData));

        dd("Email is sent successfully.");
    }
}
