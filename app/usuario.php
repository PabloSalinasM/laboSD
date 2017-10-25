<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
   protected $table='user';

    protected $primarykey='userid';

    public $timestamps = false;

    protected $fillable = [
    	'usertitle',
    	'email',
    	'username',
    	'passworddate';
    	  //
}
