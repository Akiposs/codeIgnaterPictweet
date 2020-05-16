<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//年月日時分秒でバージョン管理してるのでそれぞれ別の時刻にしないといけない
class Migration_create_tweets extends CI_Migration {

    public function __construct()
    {   
        parent::__construct();
    }

    public function up()
    {
        //add_fieldされた後にcreate_table()をするとそのフィールドでテーブルが作られる
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field(array(
                'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ),
                'content' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'TIMESTAMP'
            ),
        ));
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table('tweets');
    }

    public function down()
    {
            $this->dbforge->drop_table('tweets');
    }
}