<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $names = ['John', 'Ringo', 'Paul', 'George'];
        foreach ($names as $name) {
          DB::table('users')->insert([
            'name' => $name,
            'email' => strtolower($name) . '@example.com',
            'password' => bcrypt(strtolower($name)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
        }
    }
}
