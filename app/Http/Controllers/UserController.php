<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\xpmuser;
use App\Models\event;

class UserController extends Controller
{

  public function getdata(Request $req)
    {
        $Xpmuser = new xpmuser();
        // $Xpmuser->id=$req->id;
        $Xpmuser->Fname=$req->firstname;
        $Xpmuser->Lname=$req->lastname;
        $Xpmuser->Email=$req->email;
        $Xpmuser->Mobileno=$req->mobileno;
        $Xpmuser->InvoicePurpose=$req->invoicepurpose;
        $Xpmuser->Textable=$req->textable;
        $Xpmuser->InvoiceDescription=$req->invoicedescription;
        $Xpmuser->UploadInvoices=$req->uploadinvoice;
        $Xpmuser->save();
        $validated=$req->validate([
            'email'=> 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'mobileno' => 'required|numeric|digits:10'
        ]);
        
    }
    function index()
    {
        $events = event::all();
        return view('multiform/master',['events' => $events]);
    }
        
}
