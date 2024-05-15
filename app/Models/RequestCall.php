<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCall extends Model
{
    use HasFactory;

    /*
     * The attribute that are mass assignable.
     * @var array
     * */
    protected $fillable = ['phone_number', 'name', 'text'];

    /**
     * @return Attribute
     */

    protected function phoneNumber(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => '+353-' . $value[0] . $value[1] . '-' . $value[2] . $value[3] . $value[4] . '-' . $value[5] . $value[6] . $value[7] . $value[8],

        );
    }

    /**
     * @return Attribute
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => ucwords($value, " \t\r\n\f\v`"),
        );
    }
}
