<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;


require_once 'app/config/Config.php';
require_once 'app/libraries/Database.php';
require_once 'app/models/Handle_room.php';


class Handle_roomTest extends TestCase {
    
   
    public function testunbookRoom () {
        
        $class = new Handle_room();
               
        $this->assertTrue ( $class->unbookRoom (3, 'SingleBedRoom') );
        $this->assertTrue ( $class->unbookRoom (104, 'FamilyRoom') );
        $this->assertTrue ( $class->unbookRoom (6, '') );
        
    }
    
    
}