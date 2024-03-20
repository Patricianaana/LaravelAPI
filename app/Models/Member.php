<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillables =
    [
        'name',
        'email',
        'address'
    ];
    public function getCompany()
    {
        return $this->hasOne('App\Models\Company');
    }
}
