<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model {

	//
	protected $fillable = [
    	'latitude',
    	'longitude',
    	'factory_stores',
    	'open_hour',
    	'contact',
    	'title_signup',
    	'description'
    ];

}
