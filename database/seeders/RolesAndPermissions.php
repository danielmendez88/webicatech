<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'editar banner']);
        Permission::create(['name' => 'borrar banner']);
        Permission::create(['name' => 'publicar banner']);
        Permission::create(['name' => 'anular banner']);
        Permission::create(['name' => 'ver banner']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'editor-banner']);
        $role->givePermissionTo(['ver banner', 'publicar banner', 'editar banner']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
        // obtener el usuario
        $usuario = User::where('id', 2)->first();
        // asignamos rol
        $usuario->assignRole('editor-banner');
    }
}
