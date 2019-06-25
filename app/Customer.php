<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{


    protected $guarded = [];

    
    protected $attributes = [
        'registered' => 0
    ];


    public function scopeRegistered($query)
    {
        return $query->where('registered', 1);
    }


    public function scopeUnregistered($query)
    {
        return $query->where('registered', 0);
    }


    public function getRegisteredAttribute($attribute)
    {
        return [
            0 => 'Unregistered',
            1 => 'Registered'
        ][$attribute];
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }


























    
}
