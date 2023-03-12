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
        $data = HasilPenerimaan::where("status_lamaran", "Lamaran Disetujui")->get();
        return view('admin.formemail',compact('data'));
        
    }


    public function kirimemail(Request $request)
    {
        $email = $request->input('emails');
        $mailData = $request->validate([
            'emails' => 'required'

        ]);
        
        $mailData = $request->pesan;
        Mail::to($email)->send(new EmailUndangan($mailData));
        return back()->with('success', 'Email Terkirim');
    }
}
