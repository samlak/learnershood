<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\User', 10)->create();
        factory('App\School', 10)->create();
        factory('App\Department', 20)->create();
        factory('App\Course', 40)->create();
        factory('App\CourseContent', 40)->create();
        factory('App\CourseMaterial', 120)->create();
        factory('App\Library', 200)->create();
        factory('App\Download', 200)->create();
        factory('App\Preview', 200)->create();
        factory('App\Image', 5)->create();
        factory('App\Role', 2)->create();
    }
}
