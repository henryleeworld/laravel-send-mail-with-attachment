<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

Route::get('send/mail', [SampleController::class, 'sendMailableMail']);
