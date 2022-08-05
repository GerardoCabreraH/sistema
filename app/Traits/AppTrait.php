<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

trait AppTrait {
    public function generateCode($reference, $number) {
        return Str::substr(Str::upper($reference), 0, 2).Str::padLeft(++$number, 3, 0).date('y');
    }

    public function generateSlug($slug) {
        return Str::slug($slug, '-');
    }

    public function generatePassword($password) {
        return !empty($password) ? Hash::make($password) : Arr::except($password ,array('password'));
    }

    public function messageNotification($header, $button, $url, $body, $thanks)
    {
        return [
            'header' => $header,
            'button' => $button,
            'url' => $url,
            'body' => $body,
            'thanks' => $thanks
        ];
    }
}
