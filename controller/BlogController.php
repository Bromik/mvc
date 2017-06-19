<?php

include_once ROOT . '/model/Blog.php';

class BlogController
{

    public function actionList()
    {
        $blog = array();
        $blog = Blog::getArticleList();
        require_once ROOT . '/view/blog/index.php';
        return true;

    }

    public function actionArticle($id)
    {
        if ($id) {
            $singleBlog = Blog::getArticleById($id);
            require_once ROOT . '/view/blog/singleArticle.php';
        }
        return true;
    }
}