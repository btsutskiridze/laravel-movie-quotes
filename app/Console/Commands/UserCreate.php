<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserCreate extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Register user';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$user = new User();
		$user->username = $this->ask('Enter username');
		$user->email = $this->ask('Enter email');
		$user->password = bcrypt($this->secret('Enter password'));

		if (!$this->validation('email', $user->email)
		|| $this->validation('username', $user->username))
		{
			$user->save();
			$this->info('registration successed');
		}

		return 0;
	}

	protected function validation($key, $value) //check if value exists in database
	{
		if (User::all()->pluck($key)->contains($value))
		{
			$this->error($key . ' is taken! registration failed');
			return false;
		}
		return true;
	}
}