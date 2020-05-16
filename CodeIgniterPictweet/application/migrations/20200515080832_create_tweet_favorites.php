<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//年月日時分秒でバージョン管理してるのでそれぞれ別の時刻にしないといけない
class Migration_create_tweet_favorites extends CI_Migration {

    public function __construct()
    {   
        parent::__construct();
    }
    
    public function up()
    {
        //add_fieldされた後にcreate_table()をするとそのフィールドでテーブルが作られる
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT'
            ),
            'tweet_id' => array(
                'type' => 'INT'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP'
            ),
        ));
        $this->dbforge->create_table('tweet_favorites');
    }

    public function down()
    {
            $this->dbforge->drop_table('tweet_favorites');
    }
}