<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserve;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'date' => new Date(),
            'time' => new Time(),
            'number' => '1',
            'users_id' => '1',
            'restaurants_id' => '1'
        ]; 
        Reserve::create($param);
        $param =[
            'date' => new Date(),
            'time' => new Time(),
            'number' => '3',
            'users_id' => '1',
            'restaurants_id' => '5'
        ]; 
        Reserve::create($param);                
    }
}
