<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	//
	protected $fillable = [
		'mensaje',
		 'celular',
		 'copy',
		 'latitud',
		 'longitud',
		 'user_id'
	];
}
