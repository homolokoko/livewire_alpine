<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $foriegnKey = 'country_id';
    protected $table = 'state';
    protected $fillable = ['name','country_id'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
