<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['name' => 'report release'],
            ['name' => 'activation'],
            ['name' => 'ground breaking'],
        ];

        DB::table('event_categories')->insert($categories);

    }
}
