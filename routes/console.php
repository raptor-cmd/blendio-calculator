<?php

use App\Repositories\Implementations\BasicOperationImplementation;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('operations {operations*}', function ($operations) {

    $data = [
        'number1' => $operations[0],
        'number2' => $operations[1],
    ];

    $basicOperationImplementation = new BasicOperationImplementation();

    switch($operations[2]){
        case 'add':
            $this->info('Result: '. $basicOperationImplementation->add($data));
            break;
        case 'substraction':
            $this->info('Result: '. $basicOperationImplementation->substraction($data));
            break;
        case 'multiplication':
            $this->info('Result: '. $basicOperationImplementation->multiplication($data));
            break;
        case 'divide':
            $this->info('Result: '. $basicOperationImplementation->divide($data));
            break;
        default:
         $this->error('This operations does not exist');
         break;

    }
});
