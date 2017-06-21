<?php
require_once ROOT.'/app/lib/Inquiries.php';


class Blog
{
    public static function getArticleById($id)
    {
        $result=Inquiries::selectOne('news','id',$id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $blogItem = $result->fetch();

        return $blogItem;

    }

    public static function getArticleList()
    {
        $articlesList = array();

        $result = Inquiries::selectAll('id, title, date, short_content','news','ORDER BY date DESC LIMIT 10');

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