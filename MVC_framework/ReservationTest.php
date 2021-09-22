<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;


require_once 'app/config/Config.php';
require_once 'app/libraries/Database.php';
require_once 'app/models/Reservation.php';


class ReservationTest extends TestCase {
    
   
    public function testreserveSingleBedRoom() {
        
        $class = new Reservation();
        
        $array1 = [
            'room_num' => 3,
            'room_category' => 'Luxury',
            'first_name' => 'Emma',
            'last_name' => 'Hassan',
            'email_address' => 'emma@gmail.com',
            'gender' => 'Female',
            'contact_num' => '01171551642',
            'guest_num' => 2,
            'check_in' => '2021-09-22 13:19:00.000000',
            'check_out' => '2021-09-23 13:19:00.000000'
        ];
               
        $this->assertTrue ( $class->reserveSingleBedRoom ($array1) );
        
    }
    
    
    public function testreserveFamilyRoom() {
        
        $class = new Reservation();
        
        $array = [
            'room_num' => 104,
            'room_category' => 'Luxury',
            'first_name' => 'Rummin',
            'last_name' => 'Adora',
            'email_address' => 'rarara@gmail.com',
            'gender' => 'Female',
            'contact_num' => '01171589642',
            'guest_num' => 5,
            'check_in' => '2021-09-23 20:19:00.000000',
            'check_out' => '2021-09-26 20:19:00.000000'
        ];
             
        $this->assertTrue ( $class->reserveFamilyRoom ($array) );
        
    }
    
    
    public function testreserveRestaurant() {
        
        $class = new Reservation();
        
        $array = [
            'res_name' => 'Asian Fusion',
            'first_name' => 'Rummiaa',
            'last_name' => 'Ali',
            'email_address' => 'rara@gmail.com',
            'gender' => 'Female',
            'contact_num' => '01171589642',
            'guest_num' => 5,
            'check_in' => '2021-09-23 20:19:00.000000',
            'check_out' => '2021-09-26 20:19:00.000000'
        ];
             
        $this->assertTrue ( $class->reserveRestaurant ($array) );
        
    }
    
    
}