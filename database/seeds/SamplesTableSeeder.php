<?php

use App\Models\Sample;
use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = Sample::create([
          'name' => 'Data Try One',
          'detail' => 'This data is created in seeder',
        ]);
    }
}
