<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    //Table Name
    protected $table='posts';
    //Primary Key
    public $primaryKey='id';
    //TimeStamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    use HasFactory;
}
