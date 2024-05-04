<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCall extends Model
{
    use HasFactory;
    /*
     * The attribute that are mass assignable.
     * @var array
     * */
    protected $fillable = ['phone_number','name','text'];
}
