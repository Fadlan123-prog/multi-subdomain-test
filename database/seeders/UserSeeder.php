<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Hilman';
        $user->username = 'Hilman';
        $user->email = 'hilman@test.com';
        $user->password = Hash::make('satu23empat');
        $user->save();

        $user = new User;
        $user->name = 'Dindra';
        $user->username = 'Dindra';
        $user->email = 'dindra@test.com';
        $user->password = Hash::make('satu23empat');
        $user->save();

    }
}
