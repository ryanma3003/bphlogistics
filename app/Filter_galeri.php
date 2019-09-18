<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Galeri;

class Filter_galeri extends Model {

	protected $table = 'filter_galeri';
	public $timestamps = false;
	protected $fillable = array('name');

	public function filter()
	{
		return $this->hasMany('App\Galeri', 'filter_id');
	}

}