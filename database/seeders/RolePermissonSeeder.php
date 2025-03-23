<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage categories',
            'manage company',
            'manage jobs',
            'manage candidates',
            'apply job',
        ];

        foreach($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }

        $employerRole = Role::firstOrCreate([
            'name' => 'employer',
        ]);

        $employerPermissions = [   
            'manage company',
            'manage jobs',
            'manage candidates',
        ];

        $employerRole->syncPermissions($employerPermissions);

        // karyawan role
        $employeeRole = Role::firstOrCreate([
            'name' => 'employee',
        ]);

        $employeePermissions = [   
            'apply job',
        ];

        $employeeRole->syncPermissions($employeePermissions);

        // super admin role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
        ]);

        $employeePermissions = [   
            'apply job',
        ];

        $employeeRole->syncPermissions($employeePermissions);

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'occupation' => 'SuperAdmin',
            'experience' => 10,
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('123qwe123'),
        ]);

        $user->assignRole($superAdminRole);
    }
}
