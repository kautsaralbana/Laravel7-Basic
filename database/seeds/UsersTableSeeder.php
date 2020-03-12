<?php

use App\User;
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
        $user = User::create([
          'name' => 'Kautsra Al Bana',
          'email' => 'admin@admin.com',
          'email_verified_at' => now(),
          'password' => bcrypt('admin'),
          'created_at' => now(),
        ]);
    }
}
