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
            'name' => 'mister mobile Admin',
            'email' => 'admin@mrMobile.com',
            'password' => Hash::make('mrMobile@2026'),
            'is_super_admin' => true,
        ]);
    }
}
