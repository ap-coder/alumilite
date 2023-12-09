<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);

        // \App\Models\Product::factory()->count(10)->create();
        // \App\Models\ProductType::factory()->count(10)->create();
        // \App\Models\Build::factory()->count(10)->create();
        // \App\Models\Post::factory()->count(10)->create();

    }
}
