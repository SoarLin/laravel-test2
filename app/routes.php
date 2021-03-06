<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    // return View::make('hello');
    // return "Hello! Welcome to my first app!";
    return View::make('home');
});

Route::get('/about', function()
{
    // return 'This is our about page';
    return View::make('about');
});

Route::get('/contact', function()
{
    // return 'This is our contact page';
    return View::make('contact');
});

Route::post('contact', function()
{
    $data = Input::all();
    $rules = array(
        'subject' => 'required',
        'message' => 'required'
        );
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
        return Redirect::to('contact')->withErrors($validator)->withInput();
    }

    $emailcontent = array(
        'subject' => $data['subject'],
        'emailmessage' => $data['message']
        );
    Mail::send('emails.contactemail', $emailcontent, function($message)
    {
        $message->to('soar@eatme.tw', 'eatme_admin')
                ->subject('Contact via Our Contact Form');
    });

    return 'Your message has been sent';
});