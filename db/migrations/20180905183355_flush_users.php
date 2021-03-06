<?php

use Phinx\Migration\AbstractMigration;
use Cake\Utility\Text;
use Cake\Core\Configure;

class FlushUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        //insert user
        $table = $this->table('users');
        $user_id_1 = Text::uuid();
        $user_id_2 = Text::uuid();
        $user_id_3 = Text::uuid();
        $now = new \DateTime();
        $now_formatted = $now->format('Y-m-d H:i:s');

        $users = [
            ["id" => $user_id_1,
            "user_fullname" => "Emmanuel RIEHL",
            "user_sexe" => "H",
            "user_contact" => "87853436",
            "user_email" => "eriehl@dataprotect.ma",
            "user_photo" => "riehl.jpg",
            "user_job" => "Consultant Sécurité SI",
            "created" => $now_formatted,
            "modified" => $now_formatted],
            ["id" => $user_id_2,
            "user_fullname" => "Hafsa Zguioui",
            "user_sexe" => "H",
            "user_contact" => "87853437",
            "user_email" => "h.zguioui@dataprotect.ma",
            "user_photo" => "hafsa.jpeg",
            "user_job" => "Consultante Sécurité SI",
            "created" => $now_formatted,
            "modified" => $now_formatted],
            ["id" => $user_id_3,
            "user_fullname" => "Boris NCHO",
            "user_sexe" => "H",
            "user_contact" => "87853438",
            "user_email" => "b.ncho@dataprotect.ma",
            "user_photo" => "boris.jpg",
            "user_job" => "Consultant Sécurité SI",
            "created" => $now_formatted,
            "modified" => $now_formatted],
        ];


        $table->insert($users);
        $table->saveData();

        //insert role
        $table = $this->table('roles');
        $system_role = Text::uuid();
        $roles = [
            [
                "id" => $system_role,
                "role_denomination" => "System",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],
            [
                "id" => Text::uuid(),
                "role_denomination" => "Caisse",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],
            [
                "id" => Text::uuid(),
                "role_denomination" => "Gestionnaire",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],
            [
                "id" => Text::uuid(),
                "role_denomination" => "Assistant",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],
            [
                "id" => Text::uuid(),
                "role_denomination" => "Gérant",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],
            [
                "id" => Text::uuid(),
                "role_denomination" => "Viewer",
                "created" => $now_formatted,
                "modified" => $now_formatted,
                "created_by" => $user_id_1,
            ],

        ];

        $table->insert($roles);
        $table->saveData();

        //insert useraccount
        $table = $this->table('user_accounts');

        $user_accounts = [
            ["id" => Text::uuid(),
            "username" => "remmanuel225",
            "password" => '$2y$10$fvMsIN8Y9kbPa1MpqT1ogO7NNw6W/eL6nCJBV8WRmKUgEiROs3uXu',
            "user_avatar" => "avatar.jpg",
            "user_is_active" => true,
            "created_by" => $user_id_1,
            "created" => $now_formatted,
            "modified" => $now_formatted,
            "user_id" => $user_id_1,
            "role_id" => $system_role],
            ["id" => Text::uuid(),
            "username" => "hafsa2019",
            "password" => '$2y$10$ooE0eeyDVWeBBcHrC1s/I..Xuz2LwLux3SVLhtfLjXS30bjq15FM6',
            "user_avatar" => "hafsa.jpg",
            "user_is_active" => true,
            "created_by" => $user_id_1,
            "created" => $now_formatted,
            "modified" => $now_formatted,
            "user_id" => $user_id_2,
            "role_id" => $system_role],
            ["id" => Text::uuid(),
            "username" => "boris2019",
            "password" => '$2y$10$w.ij2enSyrsQeVP0B4PHY./qLui4W6LqzJY8wwn3aM9EpLXRjV732',
            "user_avatar" => "boris.png",
            "user_is_active" => true,
            "created_by" => $user_id_1,
            "created" => $now_formatted,
            "modified" => $now_formatted,
            "user_id" => $user_id_3,
            "role_id" => $system_role]
        ];

        $table->insert($user_accounts);
        $table->saveData();

        // insert role_contents
        // $table = $this->table('role_contents');
        // $role_contents = [
        //     [
        //         'id'=> 
        //         'content_alias'=>
        //         'content_action'=>
        //         'content_controller'=>
        //         'created'=> $now_formatted
        //         'modified'=> $now_formatted
        //     ]
        // ]
    }

    public function down(){
         $this->execute('DELETE FROM users');
         $this->execute('DELETE FROM user_accounts');
         $this->execute('DELETE FROM roles');
    }
}
