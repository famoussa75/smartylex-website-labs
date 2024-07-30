<?php

namespace App\Http\Controllers;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

use App\Mail\ContactMail;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

class mailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        $email = $request->input('user-email');
       


            try {

                $contenu = [

                    'title' =>'Demande de souscription depuis smartylex.com',
                    'cabinet' => $request->input('cabinet'),
                    'user-name' => $request->input('user-name'),
                    'user-email' => $request->input('user-email'),
                    'telephone' =>$request->input('user-phone'),
                    'plan' => $request->input('plan'),
                    'message' => $request->input('user-message'),
                    'image' => public_path('images/signature.png')
            
                ];   

                $contactMail = new ContactMail($contenu);
                $feedbackMail = new FeedbackMail($contenu);
        

                Mail::to('contact@smartylex.com')->send($contactMail);
                Mail::to($email)->send($feedbackMail);
               
                return redirect()->back()->with('success', 'Merci de nous avoir contacté, nous vous ferons un retour dans les meilleurs délais.');

            } catch (Exception $e) {

                return redirect()->back()->with('error', 'Message non envoyé ! Réessayez à nouveau.');
            }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}