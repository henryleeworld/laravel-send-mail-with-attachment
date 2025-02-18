<?php

namespace App\Http\Controllers;

use App\Mail\SampleMail;
use Mail;

class SampleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendMailableMail()
    {
        $data = [
            'email'   => 'henryleeworld@gmail.com',
			'subject' => __('Email template'),
			'title'   => __('Email subject'),
            'body'    => __('Sample content'),
            'comment' => __('Thank you.'),
            'file'    => [
                storage_path('pdf/111年災害防救演習綱要計畫.pdf'),
                storage_path('pdf/112年災害防救演習綱要計畫.pdf'),
            ],
        ];
        Mail::to($data['email'])->send(new SampleMail($data));
        dd(__('Email sent successfully!'));
    }
}
