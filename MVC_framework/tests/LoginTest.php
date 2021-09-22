<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;


require_once 'app/config/Config.php';
require_once 'app/libraries/Database.php';
require_once 'app/models/Login.php';


class LoginTest extends TestCase {
    
   
    public function testgetLogins() {
        
        $LoginClass = new Login();
        
        $array = [
            'admin_id' => '2',
            'name' => 'John Doe',
            'admin_email_id' => 'johndoe@gmail.com',
            'admin_password' => 'johndoe',
        ];
        
        $result = json_decode (json_encode ( $LoginClass->getLogins ('johndoe@gmail.com', 'johndoe') ), true);
        
        $this->assertFalse ( $LoginClass->getLogins ('hyufuyfuy.com', 'johndoe') );
        $this->assertFalse ( $LoginClass->getLogins ('johndoe@gmail.com', 'huihu') );
        $this->assertEquals ( $array, $result );
        
    }
    
    
}
