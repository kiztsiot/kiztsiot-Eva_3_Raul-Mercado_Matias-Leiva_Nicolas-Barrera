<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Laravel está listo.');
})->purpose('Display an inspiring quote');