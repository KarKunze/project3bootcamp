<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlashcardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('flashcards')->insert([
    		'term' => 'Anni, annu, enni',
    		'description' => 'year (anniversary, annually, centennial)',
        'user_id' => '1',
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

      DB::table('flashcards')->insert([
    		'term' => 'bio',
    		'description' => 'life (biology, biometrics, biome, biosphere)',
        'user_id' => '1',
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

      DB::table('flashcards')->insert([
    		'term' => 'chron',
    		'description' => 'time (chronology, chronometer, synchronize)',
        'user_id' => '1',
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

      DB::table('flashcards')->insert([
    		'term' => 'fid, fide, feder',
    		'description' => 'faith, trust (confidante, fidelity, confident, infidelity, infidel, federal, confederacy, semper fi)',
        'user_id' => '1',
        'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

      DB::table('flashcards')->insert([
    		'term' => 'geo',
    		'description' => 'earth (geometry, geography, geocentric, geology)',
        'user_id' => '1',
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

    }
}
