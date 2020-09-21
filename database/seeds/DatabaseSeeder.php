<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('admin_users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('admin'),
            'admin_role_id' => 1,
            'avatar'=>'avatar.png',
            'remember_token'=>'jajajajajajf34235',
            'email_verified_at'=>'2020-07-28',
        ]);
    }
}
