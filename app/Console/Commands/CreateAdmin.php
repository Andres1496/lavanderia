<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lavanderia:admin {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = $this->argument('email', null);
        $password = $this->argument('password', null);

        $user = User::create(['name' => $user, 'email' => $user, 'password' => $password]);

        if (!empty($user))
            $this->info('Success!');
        else
            $this->error('Fak :(');
    }
}
