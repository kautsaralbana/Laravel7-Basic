<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset Cache
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permission
        Permission::create(['name' => 'manage-data']);
        Permission::create(['name' => 'manage-sample']);

        // Add Role and Assign Permission
        $role0 = Role::create(['name' => 'admin']);
        $role0->givePermissionTo('manage-data');
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('manage-sample');

        // Create User
        $user0 = Factory(App\User::class)->create([
            'name' => 'Kautsar Al Bana',
            'email' => 'admin@admin.com',
        ]);
        $user1 = Factory(App\User::class)->create([
            'name' => 'Nandanis Ikhwan',
            'email' => 'user@user.com',
        ]);

        // Assign Role to User
        $user0->assignRole($role0);
        $user1->assignRole($role1);
    }
}
