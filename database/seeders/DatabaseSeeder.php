<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Companies::factory(10)->create();
        // \App\Models\Options::factory(10)->create();
        DB::table('options') -> insert([
            [
                'id' => 1,
                'name' => 'Vidéo projecteur 3D DLP',
                'brand_option' => 'Epson',
                'ref_option' => 'EP3100',
                'cost' => 59,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 2,
                'name' => 'TV LED 55”',
                'brand_option' => 'Samsung',
                'ref_option' => '55QF2100',
                'cost' => 79,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 3,
                'name' => 'Module Wifi pour accès privé 5G',
                'brand_option' => 'Huawei',
                'ref_option' => 'M5GILL',
                'cost' => 99,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 4,
                'name' => 'Tablette Ipad Pro 32Go',
                'brand_option' => 'Apple',
                'ref_option' => 'MCRN1032',
                'cost' => 159,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
        ]);
        \App\Models\Contacts::factory(10)->create();
        // \App\Models\Rooms::factory(10)->create();
        DB::table('rooms') -> insert([
            [
                'id' => 1,
                'name' => 'Grace Hopper',
                'ref_room' => 'A40',
                'max_persons' => 40,
                'price' => 339,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 2,
                'name' => 'Alan Sugar',
                'ref_room' => 'B40',
                'max_persons' => 40,
                'price' => 309,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 3,
                'name' => 'Dennis Ritchie',
                'ref_room' => 'C40',
                'max_persons' => 40,
                'price' => 289,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 4,
                'name' => 'James Gosling',
                'ref_room' => 'D40',
                'max_persons' => 40,
                'price' => 249,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 5,
                'name' => 'Jon Postel',
                'ref_room' => 'A20',
                'max_persons' => 20,
                'price' => 279,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 6,
                'name' => 'Matsumoto',
                'ref_room' => 'B20',
                'max_persons' => 20,
                'price' => 249,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 7,
                'name' => 'Rasmus Lerdorf',
                'ref_room' => 'C20',
                'max_persons' => 20,
                'price' => 245,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 8,
                'name' => 'Kenneth Thompson',
                'ref_room' => 'D20',
                'max_persons' => 20,
                'price' => 199,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 9,
                'name' => 'Konrad Zuse',
                'ref_room' => 'A10',
                'max_persons' => 10,
                'price' => 299,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 10,
                'name' => 'Aaron Swartz',
                'ref_room' => 'B10',
                'max_persons' => 10,
                'price' => 219,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 11,
                'name' => 'Brendan Eich',
                'ref_room' => 'C10',
                'max_persons' => 10,
                'price' => 219,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 12,
                'name' => 'Guido van Rossum',
                'ref_room' => 'D10',
                'max_persons' => 10,
                'price' => 209,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 13,
                'name' => 'Bjarne Stroustrup',
                'ref_room' => 'E10',
                'max_persons' => 10,
                'price' => 199,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 14,
                'name' => 'Ada Lovelace',
                'ref_room' => 'F10',
                'max_persons' => 10,
                'price' => 189,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 15,
                'name' => 'Agner Krarup Erlang',
                'ref_room' => 'G10',
                'max_persons' => 10,
                'price' => 179,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 16,
                'name' => 'Elon Musk',
                'ref_room' => 'A03',
                'max_persons' => 3,
                'price' => 119,
                'is_active' => false,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 17,
                'name' => 'Mark Zuckerberg',
                'ref_room' => 'B03',
                'max_persons' => 3,
                'price' => 99,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ],
            [
                'id' => 18,
                'name' => 'Bill Gates',
                'ref_room' => 'A01',
                'max_persons' => 2,
                'price' => 89,
                'is_active' => true,
                'created_at' => date('Y-m-d h:i:s',time()),
                'updated_at' => date('Y-m-d h:i:s',time())
            ]
        ]);
        \App\Models\Reservations::factory(10)->create();
        \App\Models\OptionsReservations::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
