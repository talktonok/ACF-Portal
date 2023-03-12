<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'write articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'draft articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $writerRole = Role::create(['name' => 'writer']);
        $writerRole->givePermissionTo('edit articles', 'write articles','draft articles');

        $exco = Role::create(['name' => 'exco']);
        $exco->givePermissionTo('edit articles', 'write articles','draft articles');

        // or may be done by chaining
        $moderatorRole = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);
            
            $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);
            $member = Role::create(['name' => 'member'])
            ->givePermissionTo(['edit articles', 'write articles','draft articles']);

        $super = Role::create(['name' => 'super-admin']);
        $super->givePermissionTo(Permission::all());

        $user = User::create([
            'title'  => 'Mr',
            'firstName' => 'Mansur',
            'lastName' => 'Ibrahim',
            'otherName' => 'Nok',
            'membershipID' => '',
            'email' => 'admin@mail.com',
            'phone' => '08161939418',
            'dob' => '',
            'chapter' => 'Kaduna',
            'gender' => 'Male',
            'religion' => 'Islam',
            'chapter' => '1',
            'address' => 'Barnawa Kaduna',
            'imageURL' => '',
            'password' => Hash::make('123456789'),
        ]);
        $user->assignRole('writer', 'admin', 'member', 'exco');
    }
}
