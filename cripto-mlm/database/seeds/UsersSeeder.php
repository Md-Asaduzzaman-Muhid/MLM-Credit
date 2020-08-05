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
            'password' => Hash::make('coach1234'),
        ]);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        Role::create(['name' => 'new']);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'fname' => 'Galib',
            'email' => 'galib@mlm.com',
            'password' => Hash::make('galib1234'),
        ]);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'fname' => 'admin',
            'email' => 'admin@iosoup.com',
            'password' => Hash::make('admin1234'),
        ]);
        $admin->assignRole($adminRole);
    }
}
