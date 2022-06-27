<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TestMailController extends Controller
{
    public function mail() {
        Mail::to('test@example.com')
        ->send(new TestMail());
    }
}
