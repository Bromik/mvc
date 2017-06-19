<?php

class Blog
{
    public static function getArticleById($id)
    {
        $db = Db::getConnect();
        $result = $db->query('SELECT * FROM news WHERE id=' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $blogItem = $result->fetch();
        return $blogItem;


    }

    public static function getArticleList()
    {
        $db = Db::getConnect();
        $articlesList = array();
        $result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');
        $i = 0;
        while ($row = $result->fetch()) {
            $articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['title'] = $row['title'];
            $articlesList[$i]['date'] = $row['date'];
            $articlesList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $articlesList;
    }


}