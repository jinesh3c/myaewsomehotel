<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Lekhnathhotel',
        	'username' => 'Lekhnathhotel',
        	'password' => bcrypt('9856052139'),
        ]);
    }
}
