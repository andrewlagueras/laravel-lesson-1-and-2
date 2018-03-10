<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
class Product extends Model
{

	public  $mystatc = 'sim conrrrrstvvvv';
    public function scopeGetAllPriceGreater($query, $value = 100)
    {
    	return $query->where('price','>',$value)->get();
    }

    public function getName()
    {
    	 // return self::$mystatc;
    }

    public static function getProduct() {
    	return self::get();
    	// erroe
    	return $this->blavla;
    }


    public function getPriceFormatAttribute()
    {
    	return number_format($this->price,2);	
    }


public function clients()
{
    return $this->hasMany(Client::class);
}

}