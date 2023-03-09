<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $permission1 =  Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'create articles']);
        $role1 = Role::create(['name' => 'president']);
       
        $role1->givePermissionTo($permission1);
        $role1->givePermissionTo('create articles');

        $role2 = Role::create(['name' => 'hr']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('create articles');

        $role3 = Role::create(['name' => 'admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user1 = \App\Models\User::factory()->create([
            'name' => 'habtish',
            'email' => 'habtish@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        $user1->assignRole($role1);

        $user2 = \App\Models\User::factory()->create([
            'name' => 'Emebet',
            'email' => 'emuaniley@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        $user2->assignRole($role2);

        $user3 = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmailcom',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        $user3->assignRole($role3);
    }
}
