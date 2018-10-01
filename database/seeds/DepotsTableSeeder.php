<?php

use Illuminate\Database\Seeder;

class DepotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('depots')->insert([
          'depot_name' => 'EKM',
      ]);
      DB::table('depots')->insert([
          'depot_name' => 'TVM',
      ]);
      DB::table('depots')->insert([
          'depot_name' => 'TCR',
      ]);
      DB::table('depots')->insert([
          'depot_name' => 'KYM',
      ]);
      DB::table('depots')->insert([
          'depot_name' => 'KLM',
      ]);
      DB::table('depots')->insert([
          'depot_name' => 'ALP',
      ]);
    }
}
