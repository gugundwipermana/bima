<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	//
	protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'subject',
    	'messages',
    	'status'
    ];

    public function getJum()
    {

     	$jum = \DB::table('messages')
     				->where('status', 0)
     				->count();

        return $jum;
    }

    public function getNewMessage()
    {
    	$messages = \DB::table('messages')
                    ->where('status', 0)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return $messages;
    }

}
