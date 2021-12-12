<?php

namespace Hcode;
use Rain\Tpl;

class PageAdmin extends Page {

    public function __construct($opts = array(), $tpl_dir = "/views/admin/")
    {
        //chama a classe contrutora da classe pai
        parent::__construct($opts, $tpl_dir);
    }

}

?>