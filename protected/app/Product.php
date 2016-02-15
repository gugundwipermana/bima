<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	//
	protected $fillable = [
    	'category_id',
    	'title',
    	'description',
    	'image',
    	'catalogue'
    ];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

}
