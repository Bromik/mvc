<?php

include_once ROOT . '/model/Blog.php';

class BlogController extends Controller
{

    public function actionList()
    {
        $blog = array();

        $blog = Blog::getArticleList();

        $this->view->generationView('blog.php', 'template.php',$blog);



    }

    public function actionArticle($id)
    {
        if ($id) {

            $singleBlog = Blog::getArticleById($id);

            $this->view->generationView('singleArticle.php','template.php',$singleBlog);

            return $singleBlog;

        }

    }
}