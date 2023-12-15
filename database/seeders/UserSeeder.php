<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User(); // 1

        $user->name = 'admin';
        $user->email = 'admin@here.nl';
        $user->password = hash::make("admin");

        $user->save();

        $user = new User(); // 2

        $user->name = 'Sjaak';
        $user->email = 'Sjaak@hotmail.nl';
        $user->password = hash::make("Sjaak123");

        $user->save();

        $user = new User(); // 3

        $user->name = 'Hendrik';
        $user->email = 'Hendrik@gmail.com';
        $user->password = hash::make("Hendrikkie123");

        $user->save();

        $user = new User(); // 4

        $user->name = 'Piet';
        $user->email = 'Piet@yourownmail.now';
        $user->password = hash::make("Pietje123");

        $user->save();

        $user = new User(); // 5

        $user->name = 'Klaas';
        $user->email = 'klaas@outlook.com';
        $user->password = hash::make("Klaasje123");

        $user->save();

        $user = new User(); // 6
 
        $user->name = 'Jan';
        $user->email = 'Jan@hotmail.com';
        $user->password = hash::make("Jan123");

        $user->save();

        $user = new User(); // 7

        $user->name = 'Henk';
        $user->email = 'HenkDePotvis@Potvis.com';
        $user->password = hash::make("Henk123");
        
        $user->save();

        $user = new User(); // 8

        $user->name = 'Willem';
        $user->email = 'Willem@WillemHost.nl';
        $user->password = hash::make("Willem123");

        $user->save();

        $user = new User(); // 9

        $user->name = 'Kees';
        $user->email = 'Kees@gmail.com';
        $user->password = hash::make("Kees123");

        $user->save();

        $user = new User(); // 10

        $user->name = 'Bert';
        $user->email = 'bert@JongeJonge.com';
        $user->password = hash::make("Bert123");

        $user->save();

        $user = new User(); // 11

        $user->name = 'Jeroen';
        $user->email = 'jeroen@joroen.nl';
        $user->password = hash::make("Jeroen123");

        $user->save();
    }
}
