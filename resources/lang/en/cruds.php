<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Employees',
        'title_singular' => 'Employee',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'user'                         => 'Line Manager',
            'user_helper'                  => ' ',
            'department'                   => 'Department',
            'department_helper'            => ' ',
            'joining_date'                 => 'Joining Date',
            'date_of_birth'                 => 'Date Of Birth',
            'joining_date_helper'          => ' ',
            'date_of_birth_helper'          => ' ',
            'total_leaves'                 => 'Total Leaves',
            'total_leaves_helper'          => ' ',
            'leaves_taken'                 => 'Leaves Taken',
            'leaves_taken_helper'          => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
        ],
    ],
    'department' => [
        'title'          => 'Departments',
        'title_singular' => 'Department',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'department_head'        => 'Department Head',
            'department_head_helper' => ' ',
        ],
    ],
    'employeeLeaf' => [
        'title'          => 'Employee Leaves',
        'title_singular' => 'Employee Leave',
        'leave_title' => 'For Leave',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'employee'                     => 'Employee',
            'leave'                        => 'Type of Leave',
            'leave_reason'                 => 'Reason',
            'employee_helper'              => ' ',
            'start_date'                   => 'Start Date',
            'start_date_helper'            => ' ',
            'end_date'                     => 'End Date',
            'end_date_helper'              => ' ',
            'line_manager_approval'        => 'Line Manager Approval',
            'line_manager_approval_helper' => ' ',
            'hr_approval'                  => 'HR Approval',
            'approval'                     => 'Approval',
            'hr_approval_helper'           => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
        ],
    ],

];
