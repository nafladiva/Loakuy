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
        \App\User::insert([
            [
                'id'  			=> 1,
                'name' 			=> 'Fatimah',
                'jk'	        => 'Perempuan',
                'no_hp'		    => '081282740748',
                'email'			=> 'test@test.com',
                'email_verified_at'	=> NULL,
                'password'		=> bcrypt('12345678'),
                'deskripsi'		=> 'Saya fatimah, salam kenal',
                'remember_token'	=> NULL,
                'created_at'     => \Carbon\Carbon::now(),
                'updated_at'     => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'name' 			=> 'Jack',
                'jk'	        => 'Laki-laki',
                'no_hp'		    => '081234567890',
                'email'			=> 'jack@test.com',
                'email_verified_at'	=> NULL,
                'password'		=> bcrypt('12345678'),
                'deskripsi'		=> 'Halo nama saya Jack',
                'remember_token'	=> NULL,
                'created_at'     => \Carbon\Carbon::now(),
                'updated_at'     => \Carbon\Carbon::now()
            ]
        ]);
    }
}
