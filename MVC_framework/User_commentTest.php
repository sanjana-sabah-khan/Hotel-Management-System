<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;


require_once 'app/config/Config.php';
require_once 'app/libraries/Database.php';
require_once 'app/models/User_comment.php';


class User_commentTest extends TestCase {
    
   
    public function testreply() {
        
        $class = new User_comment();
        
        $array = [
            'forum_admin_reply' => "Hi. Thank you for keeping in touch. We'll see what we can do",
        ];
               
        $this->assertTrue ( $class->reply ($array, 4) );
        
    }
    
    
    public function testdeleteReply() {
        
        $class = new User_comment();
               
        $this->assertTrue ( $class->deleteReply (4) );
        
    }
    
    
    public function testdelete() {
        
        $class = new User_comment();
               
        $this->assertTrue ( $class->delete (3) );
        
    }
    
    
    public function testcontactDelete() {
        
        $class = new User_comment();
               
        $this->assertTrue ( $class->contactDelete (1) );
        
    }
    
    
}