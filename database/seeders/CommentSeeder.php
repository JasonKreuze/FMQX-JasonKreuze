<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment = new Comment(); // 1 op post 1

        $comment->content = "Ik ben het hier helemaal mee eens";
        $comment->user_id = 4;
        $comment->post_id = 1;

        $comment->save();

        $comment = new Comment(); // 2 op post 1

        $comment->content = "Je hebt helemaal gelijk, ze betalen ook best goed als we het vergelijken met andere supermarkten";
        $comment->user_id = 7;
        $comment->post_id = 1;

        $comment->save();

        $comment = new Comment(); // 1 op post 2

        $comment->content = "Ze zijn wel erg duur, maar ze hebben wel een groot assortiment, maar hebben ook zeer goede broodjes";
        $comment->user_id = 5;
        $comment->post_id = 2;

        $comment->save();

        $comment = new Comment(); // 1 op post 3

        $comment->content = "Ik ben het hier helemaal mee eens, Lidl is zeer slecht";
        $comment->user_id = 6;
        $comment->post_id = 3;

        $comment->save();

        $comment = new Comment(); // 2 op post 3

        $comment->content = "Lidl is inderdaad zeer slecht, maar ze hebben wel een mooi logo";
        $comment->user_id = 7;
        $comment->post_id = 3;

        $comment->save();

        $comment = new Comment(); // 3 op post 3

        $comment->content = "Ik ben het hier niet mee eens, Lidl is zeer goed en best goedkoop";
        $comment->user_id = 8;
        $comment->post_id = 3;

        $comment->save();

        $comment = new Comment(); // 1 op post 4

        $comment->content = "Ik ben het hier helemaal mee eens, Aldi is echt het slechts";
        $comment->user_id = 9;
        $comment->post_id = 4;

        $comment->save();

        $comment = new Comment(); // 2 op post 4

        $comment->content = "Ik ben het hier niet mee eens, Aldi is echt het beste";
        $comment->user_id = 10;
        $comment->post_id = 4;

        $comment->save();

        $comment = new Comment(); // 1 op post 5

        $comment->content = "Ik ben het hier helemaal mee eens, Laravel is echt makkelijk";
        $comment->user_id = 11;
        $comment->post_id = 5;

        $comment->save();

        $comment = new Comment(); // 2 op post 5

        $comment->content = "Ik ben het hier niet mee eens, Laravel is echt moeilijk";
        $comment->user_id = 5;
        $comment->post_id = 5;

        $comment->save();

        $comment = new Comment(); // 1 op post 6

        $comment->content = "Ik vind het heel erg voor je dat je hond is overleden";
        $comment->user_id = 3;
        $comment->post_id = 6;

        $comment->save();

        $comment = new Comment(); // 2 op post 6

        $comment->content = "Ik vind het heel erg voor je dat je hond is overleden";
        $comment->user_id = 4;
        $comment->post_id = 6;

        $comment->save();

        $comment = new Comment(); // 3 op post 6

        $comment->content = "Ik vind het heel erg voor je dat je hond is overleden";
        $comment->user_id = 9;
        $comment->post_id = 6;

        $comment->save();

        $comment = new Comment(); // 1 op post 7

        $comment->content = "Ik vind het heel erg voor je dat je fiets is gestolen";
        $comment->user_id = 6;
        $comment->post_id = 7;

        $comment->save();

        $comment = new Comment(); // 2 op post 7

        $comment->content = "Ik hoop dat de politie hem snel terug vindt";
        $comment->user_id = 7;
        $comment->post_id = 7;

        $comment->save();

        $comment = new Comment(); // 1 op post 8

        $comment->content = "Gefeliciteerd met je nieuwe fiets";
        $comment->user_id = 8;
        $comment->post_id = 8;

        $comment->save();

        $comment = new Comment(); // 2 op post 8

        $comment->content = "Ik hoop dat je er veel plezier mee hebt";
        $comment->user_id = 9;
        $comment->post_id = 8;

        $comment->save();

    }
}
