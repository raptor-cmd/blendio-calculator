<?php

namespace App\Console\Commands;

use App\Repositories\Contracts\BasicOperation;
use Illuminate\Console\Command;

class Calculator extends Command
{
    private $basicOperation;


    public function __construct(BasicOperation $basicOperationImplementation) {
        parent::__construct();
        $this->basicOperation = $basicOperationImplementation;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations {operators*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command emulates a calculator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [
            'number1' => $this->argument('operators')[0],
            'number2' => $this->argument('operators')[1],
        ];

        switch($this->argument('operators')[2]){
            case 'add':
                $this->info('Result: '. $this->basicOperation->add($data));
                break;
            case 'substraction':
                $this->info('Result: '. $this->basicOperation->substraction($data));
                break;
            case 'multiplication':
                $this->info('Result: '. $this->basicOperation->multiplication($data));
                break;
            case 'divide':
                $this->info('Result: '. $this->basicOperation->divide($data));
                break;
            default:
             $this->error('This operation does not exist');
             break;

        }

    }
}
