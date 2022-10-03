<?php
class mainModel extends CrudPDO
{
    public $db;

    public function __construct()
    {
        $this->db=new CrudPDO();
    }
}