<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreignKey = 'village_id';
    protected $table = 'citizen';
    protected $fillable = ['name','village_id'];

}
