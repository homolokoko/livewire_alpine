<?php
    namespace App\Lib;

    class ConvertModel{

        public function convertIdName($model)
        {
            return collect($model)->map(function ($obj) {
                return ['value' => $obj['id'], 'text' => $obj['name']];
            })->toArray();
        }
    }
