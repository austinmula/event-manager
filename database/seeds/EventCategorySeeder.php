<?php

use App\EventCategory;
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
            ['id' => 1, 'name' => 'report release'],
            ['id' => 2, 'name' => 'activation'],
            ['id' => 3, 'name' => 'ground breaking'],
            ['id' => 4, 'name' => 'celebration'],
        ];
        foreach ($categories as $category) {
            $role = EventCategory::find($category['id']);
            if ($role) {
                $role->update($category);
            } else {
                EventCategory::create($category);
            }
        }

//        DB::table('event_categories')->insert($categories);
//        foreach ($categories as $category) {
//            EventCategory::updateOrCreate(['id' => $category['id']], $category);
//        }
    }
}
