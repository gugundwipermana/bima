<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model {

	//
	protected $fillable = [
    	'term',
    	'sitemap',
    	'privacy',
    	'facebook',
    	'twitter'
    ];

}
