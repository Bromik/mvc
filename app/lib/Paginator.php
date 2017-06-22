<?php
require_once ROOT . '/app/lib/Inquiries.php';

class Pagination
{
    private $db;

    public function setConnect()
    {
        $this->db=Db::getConnect();

        return $this->db;
    }

    public function setQuery($query)
    {
        $queryState=$this->setConnect()->prepare($query);

        $queryState->execute();
    }

    public function paging($query,$records_per_page)
    {
        $start_position=0;

        if(isset($_GET['page']))
        {
            $start_position=($_GET['page']-1)*$records_per_page;
        }
        
        $formatQuery=$query."LIMIT $start_position,$records_per_page";

        return $formatQuery;
    }

}