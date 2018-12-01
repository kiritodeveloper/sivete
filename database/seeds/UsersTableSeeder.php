<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**

     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'kirito',
            'email'     => 'admin@admin.com',
            'password'     => bcrypt('secret'),

        ]);

        factory(App\User::class, 7)->create();
    }
}
Pro