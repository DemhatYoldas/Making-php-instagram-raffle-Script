<?php

use Sunra\PhpSimple\HtmlDomParser;

class defaultModel extends mainModel
{

    public function indexModel()
    {
        $sql = $this->db->read("settings");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function instagram()
    {
        $dom=HtmlDomParser::file_get_html("page/page.php");
        return $dom->find(".C4VMK");
    }
}