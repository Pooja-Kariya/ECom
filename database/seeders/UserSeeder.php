<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $user = User::create([
                'name' => 'pooja',
                'email' => 'pooja@gmail.com',
                'password' => bcrypt('12345'),
                'mobile' => '1234567890',
                'address' => 'abcd',
                'country' => 'india',
                'state' => 'maharashtra',
                'city' => 'bhandara',
                'pincode' => '441904'
            ]);
        }
    }
}
