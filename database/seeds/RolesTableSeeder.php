<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
          'name' => 'Administrator',
          'slug' => 'administrator',
          'description' => 'System administrator role',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);
      DB::table('roles')->insert([
          'name' => 'Editor',
          'slug' => 'editor',
          'description' => 'Post editor role',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);
    }
}
