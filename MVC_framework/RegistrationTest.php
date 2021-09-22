<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;


require_once 'app/config/Config.php';
require_once 'app/libraries/Database.php';
require_once 'app/models/Registration.php';


class RegistrationTest extends TestCase {
    
   
    public function testRegister() {
        
        $class = new Registration();
        
        $array1 = [
            'name' => 'Arya Hassan',
            'admin_email_id' => 'aryahassan@gmail.com',
            'admin_password' => 'aryaa'
        ];
               
        $this->assertTrue ( $class->Register ($array1) );
        
    }
    
    
    public function testemailAlreadyExists() {
        
        $class = new Registration();
              
        $this->assertTrue ( $class->emailAlreadyExists ('sanjanasabah19@gmail.com') );
        $this->assertFalse ( $class->emailAlreadyExists ('nanapatekal@hotmail.com') );
        
    }
    
    
}