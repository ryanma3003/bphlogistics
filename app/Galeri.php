<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Filter_galeri;

class Galeri extends Model {

	protected $table = 'galeri';
	public $timestamps = true;
	protected $fillable = array('gambar', 'filter_id');

	public function galeri()
	{
		return $this->belongsTo('App\Filter_galeri', 'filter_id');
	}

}