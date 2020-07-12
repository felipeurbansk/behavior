<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['address', 'number', 'complement', 'zipcode', 'city', 'state'];

    public function user() {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
