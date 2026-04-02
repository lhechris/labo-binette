<?php

return [
    'group' => 'Settings',
    'resource' => [
        'id' => 'ID',
        'single' => 'Utilisateur',
        'email_verified_at' => 'Email Vérifié',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
        'verified' => 'Verified',
        'unverified' => 'Unverified',
        'name' => 'Nom',
        'email' => 'Email',
        'password' => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'roles' => 'Roles',
        'teams' => 'Equipe',
        'label' => 'Utilisateurs',
        'title' => [
            'show' => 'Show User',
            'delete' => 'Delete User',
            'impersonate' => 'Impersonate User',
            'create' => 'Create User',
            'edit' => 'Edit User',
            'list' => 'Users',
            'home' => 'Users',
        ],
        'notificaitons' => [
            'last' => [
                'title' => 'Erreur',
                'body' => 'Vous ne pouvez pas supprimer le dernier utilisateur.',
            ],
            'self' => [
                'title' => 'Erreur',
                'body' => 'Vous ne pouvez pas vous supprimer vous-même',
            ],
        ],
        'avatar' => 'Avatar',
        'change_password' => 'Change Password',
        'change_password_auto' => 'Password changed automatically',
        'change_password_success' => 'Password changed successfully',
        'change_password_auto_body' => 'Password changed automatically',
        'change_password_success_body' => 'Password changed successfully',
        'change_password_auto_body_placeholder' => 'Leave blank to auto-generate',
        'change_password_success_body_placeholder' => 'Leave blank to auto-generate',
    ],
    'bulk' => [
        'teams' => 'Update Teams',
        'roles' => 'Update Roles',
    ],
    'team' => [
        'title' => 'Teams',
        'single' => 'Team',
        'columns' => [
            'avatar' => 'Avatar',
            'name' => 'Name',
            'owner' => 'Owner',
            'personal_team' => 'Personal Team',
        ],
    ],
    'banner' => [
        'impersonating' => 'Impersonating',
        'leave' => 'Leave Impersonation',
    ],
];
