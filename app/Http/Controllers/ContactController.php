<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
      \Mail::to('vincent.chilot@gmail.com')
          ->send(new Contact($request->except('_token')));

      return view('confirm');
    }
// Form request is used here http/controllers/Requests - but it could be checked in the controller instead
/*
    public function store(Request $request)
      {
          $this->validate($request, [
              'nom' => 'bail|required|between:5,20|alpha',
              'email' => 'bail|required|email',
              'message' => 'bail|required|max:250'
          ]);

          return view('confirm');
      }
    }
*/
}
