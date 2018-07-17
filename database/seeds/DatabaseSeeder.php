<?php

use Illuminate\Database\Seeder;

use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sharn Test',
            'email' => 'sharn@test.com',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dave Test',
            'email' => 'dave@test.com',
            'password' => bcrypt('test1234'),
        ]);

        Contact::create([
            'first_name' => 'Test',
            'last_name' => 'Contact',
            'email' => 'contact@test.com',
        ]);
    }
}
