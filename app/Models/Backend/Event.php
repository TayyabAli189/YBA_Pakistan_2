<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name','discription','image'
    ];

    /*    public function products()
        {
            return $this->hasMany(Product::class);
        }*/

    public function addEvent($data){
        Event::create([
            'event_name' => $data['event_name'],
            'discription' => $data['discription'],
            'image' => $data['image'],

        ]);

    }
    public function updateEvent($data,$id){
        $event = Event::find($id);
        $event->update([
            'event_name' => $data['event_name'],
            'discription' => $data['discription'],
            'image' => $data['image'],

        ]);

    }
    public function getAllEvents(){
        return Event::all();
    }

}
