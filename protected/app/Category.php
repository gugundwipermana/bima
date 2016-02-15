<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
	protected $fillable = ['firstname', 'lastname', 'image'];

    public function products()
    {
      return $this->hasMany('App\Product');
    }

}
