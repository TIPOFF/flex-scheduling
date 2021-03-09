<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddFlexSchedulingPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions =[
            'view flex days' => ['Owner', 'Staff'],
            'update flex days' => ['Owner']
        ];

        $this->createPermissions($permissions);
    }
}
