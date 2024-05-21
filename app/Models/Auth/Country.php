<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'country';
    protected $fillable = ['name','code','cc2', 'cc3'];

}
