<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{
    protected $guarded = [''];


    public function addresses()
    {
        return $this->hasMany(Address::class);
    }


}
