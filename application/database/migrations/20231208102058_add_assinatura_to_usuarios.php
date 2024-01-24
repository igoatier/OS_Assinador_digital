<?php

class Migration_add_assinatura_to_usuarios extends CI_Migration
{
    public function up()
    {
        $fields = [
            'assinaturaImg' => [
                'type' => 'LONGTEXT',
                'null' => true
            ]
        ];

        $this->dbforge->add_column('usuarios', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('usuarios', 'assinaturaImg');
    }
}
