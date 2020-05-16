<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//年月日時分秒でバージョン管理してるのでそれぞれ別の時刻にしないといけない
class Migration_create_tweet_pictures extends CI_Migration {

    public function __construct()
    {   
        parent::__construct();
    }

    public function up()
    {
        //add_fieldされた後にcreate_table()をするとそのフィールドでテーブルが作られる
            $this->dbforge->add_field(array(
                'url' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'tweet_id' => array(
                    'type' => 'INT'
                )
            ));
            $this->dbforge->create_table('tweet_pictures');
    }

    public function down()
    {
            $this->dbforge->drop_table('tweet_pictures');
    }
}