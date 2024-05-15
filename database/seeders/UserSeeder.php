<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(public_path("data/users-data.json"));
        $users = json_decode($json);

        foreach ($users->users as $key => $value) {
            User::create([
                'name' => $value->name,
                'username' => $value->username,
                'email' => $value->email,
                'password' => bcrypt($value->password),
                'is_admin' => $value->is_admin,
            ]);
        }
    }
}
