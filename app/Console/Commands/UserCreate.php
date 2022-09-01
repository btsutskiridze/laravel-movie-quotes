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
		User::create([
			'username' => $this->ask('Enter username'),
			'email'    => $this->ask('Enter email'),
			'password' => bcrypt($this->secret('Enter password')),
		]);
		return 0;
	}
}