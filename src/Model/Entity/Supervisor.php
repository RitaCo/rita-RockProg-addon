<?php
namespace RockProg\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * RockprogSupervisor Entity.
 */
class Supervisor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'bio' => true,
        'mobile' => true,
        'email' => true,
        'avator' => true,
        'full_name' => true
    ];
    
   

    
    /**
     * Supervisor::_getFullName()
     * 
     * @return
     */
    protected function _getFullName()
    {
        return $this->_properties['first_name'] . '  ' .
            $this->_properties['last_name'];
    }

    
    /**
     * Supervisor::_getAvator()
     * 
     * @param mixed $avator
     * @return
     */
    protected function _getAvator()
    {
        
            $Hash = md5( strtolower( trim($this->_properties['email']) ) );
			return 'http://rokh.chehrak.com/'.$Hash;
        
                
    }
       
}
