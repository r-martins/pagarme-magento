<?php
/*
 * @copyright   Copyright (C) 2015 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author     Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

class Inovarti_Pagarme_Model_Mysql4_Plans
extends Mage_Core_Model_Mysql4_Abstract
{

protected function _construct()
{
    $this->_init("pagarme/plans", "id");
}

}

