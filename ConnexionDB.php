<?php
/**
 * Created by PhpStorm.
 * User: Firas
 * Date: 06/04/2019
 * Time: 18:03
 */

class ConnexionDB
{
    private static $_dbname = "projet_CSI";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdds = null;
    private function __construct()
    {
        try {
            self::$_bdds = new PDO("mysql:host=" . self::$_host . ";dbname="
                .self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public static function getInstance()
    {
        if (!self::$_bdds){
            new ConnexionDB();
            return (self::$_bdds);
        }return (self::$_bdds);
    }
}