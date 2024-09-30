<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ([
            $user = new User,
            $user -> name = "SU Admin",
            $user -> email = "suadmin@projekkp.com",
            $user -> level = 1,
            $user -> password = bcrypt('1'),
            $user -> foto = "",
            // $user -> no_hp = '0895923847629',
            $user -> save()
            ]);
        ([
            $user = new User,
            $user -> name = "Fadil",
            $user -> email = "fadil@projekkp.com",
            $user -> level = 2,
            $user -> password = bcrypt('2'),
            $user -> foto = "",
            // $user -> no_hp = '089611029347',
            $user -> save(),
            ]);
            
            ([
            $user = new User,
            $user -> name = "Ahmad",
            $user -> email = "ahmad@projekkp.com",
            $user -> level = 2,
            $user -> password = bcrypt('2'),
            $user -> foto = "",
            // $user -> no_hp = '089611029347',
            $user -> save(),
            ]);
        ([
            $user = new User,
            $user -> name = "Lutfi",
            $user -> email = "lutfi@projekkp.com",
            $user -> level = 3,
            $user -> password = bcrypt('3'),
            $user -> foto = "",
            // $user -> no_hp = '089623493211',
            $user -> save(),
            ]);
        ([
            $user = new User,
            $user -> name = "Sarhan",
            $user -> email = "sarhan@projekkp.com",
            $user -> level = 3,
            $user -> password = bcrypt('3'),
            $user -> foto = "",
            // $user -> no_hp = '089623493211',
            $user -> save(),
            ]);
        ([
            $user = new User,
            $user -> name = "Defia",
            $user -> email = "defia@projekkp.com",
            $user -> level = 3,
            $user -> password = bcrypt('3'),
            $user -> foto = "",
            // $user -> no_hp = '089623493211',
            $user -> save(),
            ]);
        ([
            $user = new User,
            $user -> name = "Septi",
            $user -> email = "Septi@projekkp.com",
            $user -> level = 3,
            $user -> password = bcrypt('3'),
            $user -> foto = "",
            // $user -> no_hp = '089623493211',
            $user -> save(),
            ]);
    }
}
