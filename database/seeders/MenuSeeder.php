<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            "type" => "drink",
            "food_name" => "Mirinda",
            "priority" => 7
        ]);
        Menu::create([
            "type" => "drink",
            "food_name" => "Pepsi",
            "priority" => 4
        ]);
        Menu::create([
            "type" => "drink",
            "food_name" => "7-up",
            "priority" => 6
        ]);
        Menu::create([
            "type" => "drink",
            "food_name" => "Cola",
            "priority" => 1
        ]);
        Menu::create([
            "type" => "drink",
            "food_name" => "Fanta",
            "priority" => 3
        ]);
        Menu::create([
            "type" => "burger",
            "food_name" => "Cheeseburger",
            "priority" => 7
        ]);
        Menu::create([
            "type" => "burger",
            "food_name" => "MC Fresh",
            "priority" => 4
        ]);
        Menu::create([
            "type" => "burger",
            "food_name" => "MC Toast",
            "priority" => 6
        ]);
        Menu::create([
            "type" => "burger",
            "food_name" => "Big Mac",
            "priority" => 1
        ]);
        Menu::create([
            "type" => "burger",
            "food_name" => "Big Tasty",
            "priority" => 3
        ]);
    }
}
