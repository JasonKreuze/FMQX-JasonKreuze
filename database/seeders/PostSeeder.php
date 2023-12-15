<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post(); // 1

        $post->subject = 'Jumbo is de beste supermarkt';
        $post->content = 'De jumbo is de beste supermarkt van Nederland. Ze hebben een groot assortiment en de prijzen zijn goed. Ook hebben ze een goede service.';
        $post->user_id = 2;

        $post->save();

        $post = new Post(); // 2 

        $post->subject = 'Albert Heijn is de een na beste supermarkt';
        $post->content = 'De Albert Heijn is de een na beste supermarkt van Nederland. Ze hebben een groot assortiment en de prijzen zijn goed. Ook hebben ze een goede service.';
        $post->user_id = 2;

        $post->save();

        $post = new Post(); // 3
 
        $post->subject = 'Lidl is de een na slechtste supermarkt';
        $post->content = 'De Lidl is de een na slechtste supermarkt van Nederland. Ze hebben een klein assortiment en de prijzen zijn goed. Ook hebben ze een slechte service.';
        $post->user_id = 3;

        $post->save();

        $post = new Post(); // 4

        $post->subject = 'Aldi is de slechtste supermarkt';
        $post->content = 'De Aldi is de slechtste supermarkt van Nederland. Ze hebben een klein assortiment en de prijzen zijn goed. Ook hebben ze een slechte service.';
        $post->user_id = 3;

        $post->save();

        $post = new Post(); // 5

        $post->subject = "Laravel is eigenlijk best wel makkelijk";
        $post->content = "Laravel is eigenlijk best wel makkelijk. Het is zodra je begrijpt hoe het werkt best wel makkelijk om een website te maken. Het is ook best wel makkelijk om een database te maken.";
        $post->user_id = 4;

        $post->save();

        $post = new Post(); // 6

        $post->subject = "Mijn hond is overleden";
        $post->content = "Mijn hond is overleden. Hij was 12 jaar oud. Hij was een hele lieve hond. Hij was een labrador. Hij heette Max.";
        $post->user_id = 5;

        $post->save();

        $post = new Post(); // 7
        
        $post->subject = "Mijn fiets is gestolen!";
        $post->content = "Mijn fiets is gestolen! Ik had hem op slot gezet maar toch is hij gestolen. Ik heb aangifte gedaan bij de politie. Hopelijk vinden ze mijn fiets terug, eerst mijn hond overleden en nu mijn fiets gestolen. Wat een week!";
        $post->user_id = 5;

        $post->save();

        $post = new Post(); // 8

        $post->subject = "Ik heb een nieuwe fiets gekocht";
        $post->content = "Ik heb een nieuwe fiets gekocht. Ik heb een hele mooie fiets gekocht. Hij is zwart en heeft 7 versnellingen. Ik heb hem gekocht bij de fietsenwinkel in de stad. Ik ben er heel blij mee.";
        $post->user_id = 6;

        $post->save();

        $post = new Post(); // 9

        $post->subject = "De nieuwe Among us Potion is uit!";
        $post->content = "De nieuwe update in among us is uitgekomen, ze hebben hierin de among us potion toegevoegd na een suggestie van ene Thijs die op de discord zat. De potion zorgt ervoor dat je een kleine boost krijgt die je kan gebruiken om sneller te lopen. De potion is te koop in de among us store voor 5 euro.";
        $post->user_id = 8;

        $post->save();

        $post = new Post(); // 10

        $post->subject = "Ik heb een nieuwe game gekocht";
        $post->content = "Ik heb de nieuwe assasins creed game gekocht. Ik heb hem gekocht op steam. Ik heb hem gekocht omdat ik de vorige delen ook al had gespeeld en ik vond ze heel leuk. Ik heb hem nu al 10 uur gespeeld en ik vind hem heel leuk.";
        $post->user_id = 5;

        $post->save();
    }
}
