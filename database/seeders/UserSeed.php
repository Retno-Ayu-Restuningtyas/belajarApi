<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\support\Str;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');

        for($i=0;$i<=10;$i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt('secret'),
            ]);
        }
    }
}
