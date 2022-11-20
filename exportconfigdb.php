<?php
    class DB {
        static function getConnect(){
            $mysql = new Mysqli('localhost', 'root', '12345678', 'capture');
            $mysql->set_charset('utf8mb4');
            if ($mysql->errno) {
                return false;
            }else{
                return $mysql;
            }
        }
    }
