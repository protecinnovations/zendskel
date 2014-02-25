<?php

namespace Album\Model;

use Zend\ServiceManager\FactoryInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlbumTableFactory
 *
 * @author richard
 */
class AlbumTableFactory implements FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator) {
        $tableGateway = $serviceLocator->get('AlbumTableGateway');
        $table = new AlbumTable($tableGateway);
        return $table;
    }

//put your code here
}
