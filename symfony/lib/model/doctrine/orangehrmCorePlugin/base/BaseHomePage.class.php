<?php

/**
 * BaseHomePage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int       $id                         Type: integer, primary key
 * @property int       $user_role_id               Type: integer
 * @property string    $action                     Type: string(255)
 * @property string    $enable_class               Type: string(100)
 * @property int       $priority                   Type: integer, default "0"
 * @property UserRole  $UserRole                   
 *  
 * @method int         getId()                     Type: integer, primary key
 * @method int         getUserRoleId()             Type: integer
 * @method string      getAction()                 Type: string(255)
 * @method string      getEnableClass()            Type: string(100)
 * @method int         getPriority()               Type: integer, default "0"
 * @method UserRole    getUserRole()               
 *  
 * @method HomePage    setId(int $val)             Type: integer, primary key
 * @method HomePage    setUserRoleId(int $val)     Type: integer
 * @method HomePage    setAction(string $val)      Type: string(255)
 * @method HomePage    setEnableClass(string $val) Type: string(100)
 * @method HomePage    setPriority(int $val)       Type: integer, default "0"
 * @method HomePage    setUserRole(UserRole $val)  
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHomePage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_home_page');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('user_role_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('action', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('enable_class', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('priority', 'integer', null, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserRole', array(
             'local' => 'user_role_id',
             'foreign' => 'id'));
    }
}