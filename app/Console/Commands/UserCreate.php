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

		if (!filter_var($user->email, FILTER_VALIDATE_EMAIL))
		{
			$this->error('please enter valid email');
		}
		else
		{
			$user->save();
			$this->info('registration successed');
		}

		return 0;
	}
}