<?php

namespace App\Http\Controllers;

use App\Mail\EmailUndangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use App\Models\HasilPenerimaan;
use App\Notifications\Undangan;
use Notification;

class EmailUndanganController extends Controller
{
    public function index()
    {
        return view('admin.formemail');
    }


    public function kirimemail(Request $request)
    {
        $mailData = $request->validate([
            'email' => 'required'

        ]);
        $email = $request->get('email');
        $mailData = $request->pesan;
        Mail::to($email)->send(new EmailUndangan($mailData));
        return back()->with('success', 'Email Terkirim');
    }
}
