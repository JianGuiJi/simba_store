<?php

namespace App\Console\Commands;

use App\User;
use Validator;
use RuntimeException;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user
                            {user? : The ID of the user}
                            {--delete : Whether the user should be deleted}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user or delete a user for the system.';

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
        //

        $userId = $this->argument('user');
        $option = $this->option('delete');
        if ($userId && !$option) {
            $user = User::findOrFail($userId);

            $this->info('username: ' . $user->name . ', email: ' . $user->email . ', is_admin: ' . $user->is_admin);

            return;
        } else if ($userId && $option) {
            if (User::find($userId)->delete()) {
                $this->info('Deleted the user success!');
            } else {
                $this->error('Sorry, the system had made a mistake! Please check the system.');
            }
            return;
        }

        $name = $this->ask('What is your name?');
        $email = $this->ask('What is your email?');
        $password = $this->secret('What is the password?(min: 6 character)');

        $data = [
            'name'     => $name,
            'email'    => $email,
            'password' => $password,
        ];

        if ( $this->register($data) ) {
            $this->info('Register a new admin success! You can login in the dashboard by the account.');
        } else {
            $this->error('Something went wrong!');
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register($data)
    {

        $validator = Validator::make($data, [
            'name' => 'required|min:2|max:50|unique:users',
            'email' => 'required|email|min:3|max:50|unique:users',
            'password' => 'required|min:6',
        ]);

        if (!$validator->passes()) {
            throw new RuntimeException($validator->errors()->first());
        }

        return $this->create($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create($data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(),
            'api_token' => str_random(60),   // api_token认证
//            'avatar'   => (new Identicon())->getImageDataUri($data['name'], 256),
        ]);
    }
}
