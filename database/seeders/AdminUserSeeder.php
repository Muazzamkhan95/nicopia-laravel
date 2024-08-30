<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passwd = Hash::make('Google@1431');

        $user = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'phone' => '03330507546',
            'password' => $passwd,
        ]);

        $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $role->revokePermissionTo('administer module');
        $role->revokePermissionTo('manage module');
        $role->revokePermissionTo('access module');

        $user->assignRole([$role->id]);
    }
}
