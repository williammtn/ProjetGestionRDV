<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\SectionSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::factory([
            'username'=>"Patrick",
            'nom' => "Patrick",
            'prenom'=>"LeCoiffeur",
            'numerotel'=>"0612345678",
            'datenaissance'=>$faker->date(),
            'email' => "patrick.lecoiffeur@salon.fr",
            'email_verified_at' => now(),
            'password' => Hash::make('Patrick22'),
            'isadmin' => true,
            'remember_token' => Str::random(10),
        ])->create();
        $this->call([
            UserSeeder::class,
            SectionSeeder::class,
            ForfaitSeeder::class,
            RendezVousSeeder::class,
            CommentaireSeeder::class,
            PrestationSeeder::class,
        ]);
    }
}
