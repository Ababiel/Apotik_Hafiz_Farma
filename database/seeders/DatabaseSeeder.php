<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
                'name'	=> Str::random(10),
                'email'	=> Str::random(10) . '@gmail.com',
                'password'	=> bcrypt('12345')
        ]);
    }
}