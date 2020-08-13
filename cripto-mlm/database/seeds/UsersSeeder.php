<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'fname' => 'coach',
            'email' => 'coach@mlm.com',
            'username' => 'coach_1',
            'parent' => '0',
            'refer_url' => 'http://localhost:8000/register/ref=coach_1',
            'password' => Hash::make('coach1234'),
        ]);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        Role::create(['name' => 'new']);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'fname' => 'Galib',
            'email' => 'galib@mlm.com',
            'username' => 'galib_2',
            'parent' => '1',
            'refer_url' => 'http://localhost:8000/register/ref=galib_2',
            'password' => Hash::make('galib1234'),
        ]);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'fname' => 'admin',
            'email' => 'admin@iosoup.com',
            'username' => 'admin_3',
            'parent' => '1',
            'refer_url' => 'http://localhost:8000/register/ref=admin_3',
            'password' => Hash::make('admin1234'),
        ]);
        $admin->assignRole($adminRole);
    }
}
