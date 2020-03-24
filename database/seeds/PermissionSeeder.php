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
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        // Add Role and Assign Permission
        $role0 = Role::create(['name' => 'admin']);
        $role0->givePermissionTo(['create', 'edit', 'delete']);
        $role1 = Role::create(['name' => 'staff']);
        $role1->givePermissionTo(['create', 'edit', 'delete']);
        $role2 = Role::create(['name' => 'user']);
        $role2->givePermissionTo('create');

        // Create User
        $user0 = Factory(App\User::class)->create([
            'name' => 'Kautsar Al Bana',
            'username' => 'kautsaralbana',
            'email' => 'admin@admin.com',
        ]);

        $user1 = Factory(App\User::class)->create([
            'name' => 'Hilwa Salma Syahdan',
            'username' => 'hilwa',
            'email' => 'staff@staff.com',
        ]);

        $user2 = Factory(App\User::class)->create([
            'name' => 'Nandanis Ikhwan',
            'username' => 'nandanis',
            'email' => 'user@user.com',
        ]);

        // Assign Role to User
        $user0->assignRole($role0);
        $user1->assignRole($role1);
        $user2->assignRole($role2);
    }
}
