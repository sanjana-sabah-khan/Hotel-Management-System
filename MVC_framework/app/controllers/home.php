<?php
    
    class Home extends Controller {
        
    
        public function __construct () {
            echo "home Loaded";
        }
        
        public function index ($name = '') {
            $user = $this->model('model1');
            $user->name = 'Model1';
            
            $this->view('view1', ['name' => $user->name]);
        }
        
        
    }
