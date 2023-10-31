<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $complaint = new Complaint;

        $complaint->name = $request->name;
        $complaint->email = $request->email;
        $complaint->phone = $request->phone;
        $complaint->subject = $request->subject;
        $complaint->message = $request->message;
        $complaint->user_id = auth()->user()->id;
        $complaint->save();

        Alert::success('Congrats', 'Complaint has been sent !');
        return redirect('contact');
    }
}
