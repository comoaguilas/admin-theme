<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();



        User::create(['name' => 'migue', 'password' => Hash::make( 'migue.2520' ) , 'email' => 'miguel4ngel@gmail.com']);
	}


}
