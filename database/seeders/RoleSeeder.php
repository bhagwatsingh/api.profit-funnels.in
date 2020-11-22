<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            config('custom.user.role_super_admin'),
            config('custom.user.role_admin'),
            config('custom.user.role_customer')
        ];

        foreach ($roles as $roleName) {
            if (Role::where('name', '=', $roleName)->first() === null) {
                $roleNew = Role::create(['name' => $roleName]);
            }
        }
    }
}
