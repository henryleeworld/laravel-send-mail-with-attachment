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
			'subject' => '電子郵件範本',
			'title'   => '電子郵件主題',
            'body'    => '範例內容',
            'comment' => '謝謝您。',
            'file'    => [
                storage_path('pdf/111年災害防救演習綱要計畫.pdf'),
                storage_path('pdf/112年災害防救演習綱要計畫.pdf'),
            ],
        ];
        Mail::to($data['email'])->send(new SampleMail($data));
        dd('電子郵件發送成功！');
    }
}
