<?php
namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => 'Mister Mobile Admin',
            'email' => 'admin@mr-mobile.com',
            'password' => Hash::make('mrmobile@2025'),
            'is_super_admin' => true,
        ]);
    }
}
