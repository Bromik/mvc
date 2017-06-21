<?php

class Inquiries
{
    public static function selectOne($table, $row, $value)
    {
        $db = Db::getConnect();

        $PDOQuery = $db->prepare("SELECT * FROM {$table} WHERE {$row}= {$value}");

        $PDOQuery->execute();

        return $PDOQuery;
    }

    public static function selectAll($row,$table,$conditions)
    {
        $db = Db::getConnect();

        $PDOQuery1=$db->prepare("SELECT $row FROM $table $conditions");

        $PDOQuery1->execute();

        return $PDOQuery1;

    }

}