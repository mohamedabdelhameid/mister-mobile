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
            'name' => 'LUXA Store Admin',
            'email' => 'admin@LUXA.com',
            'password' => Hash::make('LUXAStore@2026'),
            'is_super_admin' => true,
        ]);
    }
}
