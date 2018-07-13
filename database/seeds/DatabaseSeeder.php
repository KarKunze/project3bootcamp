<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
  public function run(){
    $this->call('UsersSeeder');
    $this->call('FlashcardsSeeder');
    $this->command->info('tables seeded!');
  }

}


// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
//       $names = ['John', 'Ringo', 'Paul', 'George'];
//
//         foreach ($names as $name) {
//
//           DB::table('users')->insert([
//             'name' => $name,
//             'email' => strtolower($name) . '@example.com',
//             'password' => bcrypt(strtolower($name)),
//             'created_at' => Carbon::now(),
//             'updated_at' => Carbon::now()
//           ]);
//
//         }
//     }
//
// }
