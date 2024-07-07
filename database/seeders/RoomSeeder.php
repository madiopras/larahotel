<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $rooms = [
            ['category_id' => 1, 'room_number' => '101', 'price' => 100, 'status' => 1],
            ['category_id' => 2, 'room_number' => '102', 'price' => 150, 'status' => 1],
            ['category_id' => 3, 'room_number' => '103', 'price' => 200, 'status' => 1],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
