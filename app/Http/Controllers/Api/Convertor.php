<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth;

class Convertor extends Controller
{
    //
    public function convertor()
    {
        return collect(Auth\Citizen::get())->map(function ($item) {
                return ['value' => $item['id'], 'text' => $item['name']];
            })->toArray();
    }
}
