<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'title', 'photo',
    ];

 	public function students() {
        return $this->hasMany('App\Student','classroom_id', 'id');
    }

    /*

	public function students()

    {

        return $this->hasMany('MODELE/CHORBA', 'clé étrangère', 'id');

    }
   

     */
}
