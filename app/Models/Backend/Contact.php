<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name','email','subject','message'
    ];

    public function addContact($data){
        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message'],

        ]);

    }

    public function getAllContacts(){
        return Contact::all();
    }

}
