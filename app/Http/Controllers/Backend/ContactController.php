<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contact;
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $contacts = $this->contact->paginate(5);
        return view('backend.contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('frontend.contact.contact');  //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email'=> '',
            'subject'=>'',
            'mssage'=> ''
        ]);


        $data = $request->all();

        $this->contact->addContact($data);
        return redirect()->route('frontend.contact.contact');
    }

}
