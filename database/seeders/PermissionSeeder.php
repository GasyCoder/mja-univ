<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-post',
            'edit-post',
            'delete-post',
            'view-post',
            'comment-post',
            'comment-delete',
            'dashboard',
            'admin',
            'redacteur',
        ];

        $label_permissions = [
            'Créer un rôle',
            'Modifier un rôle',
            'Supprimer un rôle',
            'Créer un utilisateur',
            'Modifier un utilisateur',
            'Supprimer un utilisateur',
            'Créer un article',
            'Modifier un article',
            'Supprimer un article',
            'Voir un article',
            'Commenter un article',
            'Supprimer commentaire d\'un article',
            'Interface Dashboard',
            'Coté Admin',
            'Coté Redacteur',
        ];

        $descriptions_permissions = [
            'Permet de créer un nouveau rôle dans le système.',
            'Autorise la modification des paramètres d\'un rôle existant.',
            'Permet de supprimer un rôle du système.',
            'Permet la création d\'un nouvel utilisateur.',
            'Autorise la modification des informations d\'un utilisateur existant.',
            'Permet de supprimer un utilisateur du système.',
            'Permet de créer un nouveau article',
            'Autorise la modification des détails d\'un article existant',
            'Permet de supprimer un article du système',
            'Permet de voir la detail de article',
            'Autorise de commenter le article',
            'Autorise de supprimer la commentaire de l\'article',
            'Interface Dashboard - Admin',
            'Coté Admin, vie privé',
            'Coté Redacteur, vie privé',
        ];

        // Loop through the permissions and create them using Spatie
        foreach ($permissions as $key => $permissionName) {
            Permission::create([
                'name' => $permissionName,
                'label' => $label_permissions[$key],
                'description' => $descriptions_permissions[$key],
            ]);
        }
    }
}
