<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $role1 = Role::create(['name' => 'president']);
        // $role2 = Role::create(['name' => 'hr']);
        // $role3 = Role::create(['name' => 'admin']);
        // $permission = Permission::create(['name' => 'create articles', 'name' => 'edit articles']);
        // $role1->givePermissionTo($permission);
        // $role2->givePermissionTo($permission);
        // $role3->givePermissionTo($permission);
        $this->call(UserSeeder::class);
    }
}
