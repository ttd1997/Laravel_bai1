<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();
      // for ($x = 0; $x < 5; $x++) {
      //   App\User::create([
      //     'name' => 'Danh'.str_random(3),
      //     'email' => str_random(3).'@gmail.com',
      //     'password' => bcrypt('12345678')
      //   ]);
      // } 


			App\User::create([
				'name' => 'Nguyen Van An',
				'email' => 'nguyenvanan@gmail.com',
				'password' => bcrypt('12345678')
      ]);
      App\User::create([
				'name' => 'Tran Van An',
				'email' => 'tranvanan@gmail.com',
				'password' => bcrypt('12345678')
      ]);
      App\User::create([
				'name' => 'Le Thi An',
				'email' => 'lethian@gmail.com',
				'password' => bcrypt('12345678')
      ]);
      App\User::create([
				'name' => 'Nguyen Van An 2',
				'email' => 'nguyenvanan2@gmail.com',
				'password' => bcrypt('12345678')
      ]);
      

    }
}
