<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = "123456789";
        resolve(CreateNewUser::class)->create([
            'name' => "Daniel Esteves",
            'email' => "doefz123@gmail.com",
            'password' =>$password,
            "password_confirmation" => $password,
            'terms' => false
        ]);
        $this->call([
            CountrySeeder::class,
        ]);
    }
}
