<?php

class User {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $_isLoggedIn;




    public function __construct($user= null ) {
       $this->_db =DB::getInstance() ;
       
       //Retrieving user session
       $this->_sessionName = Config::get('session/session_name');
       //setting cookie
       $this->_cookieName = Config::get('remember/cookie_name');
       
       //checking if user exists
       if(!$user){
           if(Session::exists($this->_sessionName)){
               $user = Session::get($this->_sessionName);
               
               if($this->find($user)){
                   $this->_isLoggedIn = true;
               }else{
                   //Process Logout
                   
               }
           }
       }else{
           $this->find($user);
       }
    }
    
    //This method is to update user's personal detail and not an admin updating other users
    public function update($fields = array(), $id= null){
        //getiing the user id
        if(!$id && $this->isLoogedIn()){
            $id = $this->data()->id;
        }
        //performing the update
        if(!$this->_db->update('users', $id, $fields)){
            throw new Exception('There was a problem updating the user');
        }
        
    }
    
    public function create($fields =array()){
        if(!$this->_db->insert('users', $fields)){
           throw new Exception('There was a problem creating an account');
        }
        
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Create new User'
        ));
    }
    
    public function createBiz($fields =array()){
        if(!$this->_db->insert('business', $fields)){
           throw new Exception('There was a problem creating the business');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new business'
        ));
    }
    
    public function createPrice($fields =array()){
        if(!$this->_db->insert('price', $fields)){
           throw new Exception('There was a problem creating the price for the product');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new product price'
        ));
    }
    
    public function updateBiz($fields = array(), $id= null){
        //getiing the user id
        if(!$id && $this->isLoogedIn()){
            $id = $this->data()->id;
        }
        //performing the update
        if(!$this->_db->update('business', $id, $fields)){
            throw new Exception('There was a problem updating the business');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Updating business with id: '.$id
        ));
        
    }
    
    public function createPay($fields =array()){
        if(!$this->_db->insert('payment', $fields)){
           throw new Exception('There was a problem processing the payment');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Payment processing'
        ));
    }
    
    public function createSubs($fields =array()){
        if(!$this->_db->insert('sorder', $fields)){
           throw new Exception('There was a problem creating the subscription');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new subscription.'
        ));
    }
    
    /*
    public function updateSubs($fields =array(), $id, $field = 'order_no'){
        if(!$this->_db->updates('sorder', $field, $id, $fields)){
           throw new Exception('There was a problem updating the subscription');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Update payment for the subscription.'
        ));
    }
    */
    public function createInspection($fields =array()){
        if(!$this->_db->insert('inspection', $fields)){
           throw new Exception('There was a problem creating the inspection');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new Inspection'
        ));
    }
    
    
    
    public function createFile($fields =array()){
        if(!$this->_db->insert('task_file', $fields)){
           throw new Exception('There was a problem processing the file');
        }
    }
    
    public function createMsg($fields =array()){
        if(!$this->_db->insert('message', $fields)){
           throw new Exception('There was a problem processing the message');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new message.'
        ));
    }
    
    public function createTask($fields =array()){
        if(!$this->_db->insert('task', $fields)){
           throw new Exception('There was a problem creating the task');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new task.'
        ));
    }
    
    public function updTask($fields = array(), $id= null){
        //getiing the user id
        if(!$id && $this->isLoogedIn()){
            $id = $this->data()->id;
        }
        //performing the update
        if(!$this->_db->update('task', $id, $fields)){
            throw new Exception('There was a problem updating the task');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Updating task with id: '.$id
        ));
        
    }
    
    
    public function updInspection($fields = array(), $id= null){
        //getiing the user id
        if(!$id && $this->isLoogedIn()){
            $id = $this->data()->id;
        }
        //performing the update
        if(!$this->_db->update('inspection', $id, $fields)){
            throw new Exception('There was a problem updating the inspection');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Updating Inspection with id: '.$id
        ));
        
    }
    
    
    
    
    
    public function createProduct($fields =array()){
        if(!$this->_db->insert('product', $fields)){
           throw new Exception('There was a problem creating the product');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new Product'
        ));
    }
    
    public function createCust($fields =array()){
        if(!$this->_db->insert('customer', $fields)){
           throw new Exception('There was a problem creating the customer');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Created new customer'
        ));
    }
    
    
      //This method is to update user's personal detail and not an admin updating other users
    public function updateProd($fields = array(), $id= null){
        //getiing the user id
        if(!$id && $this->isLoogedIn()){
            $id = $this->data()->id;
        }
        //performing the update
        if(!$this->_db->update('product', $id, $fields)){
            throw new Exception('There was a problem updating the product');
        }
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'Updating product with id: '.$id
        ));
        
    }
    
    
    //Checking if the user actually exists
    public function find($user = null){
        if($user){
            
            $field = (is_numeric($user)) ? 'id' : 'email' ;
            $data = $this->_db->get('users', array($field, '=', $user));
            
            if($data->count()){
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }
    
    //function to log user in
    public function login($email = null, $password = null, $remember = false){
        
        //print_r($this->_data); this returns all user's information
        
        if(!$email && !$password && $this->exists()){
         //log the user in 
            Session::put($this->_sessionName, $this->data()->id);
        }else{
            $user = $this->find($email);
        
        
        if($user){
            //checking if username and password matches information supplied by user
            if($this->data()->password === Hash::make($password, $this->data()->salt)){
                //Storing user id in the session variable
                Session::put($this->_sessionName, $this->data()->id);
                //checking if remember me box is clicked
                if($remember){
                    //generating unique hash
                  $hash = Hash::unique();
                  //check if hash is in the database
                  $hashCheck = $this->_db->get('users_session', array('user_id', '=', $this->data()->id)); 
                  if(!$hashCheck->count()){
                      $this->_db->insert('users_session', array(
                          //Put this record in the session database
                          'user_id' => $this->data()->id,
                          'hash'    => $hash
                      ));
                  }else{
                      $hash = $hashCheck->first()->hash;
                  }
                  
                  Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                }
                //recording user login activity
                $this->_db->insert('activity', array(
                    //Put this record in the session database
                    'user' => $this->data()->email,
                    'activity'    => 'User login'
                ));
                
                return true;
            }
            
        }
        
     }
     return false;
     
    }
    
    public function hasPermission($key){
        //grab user group data from group table 
        $group = $this->_db->get('groups', array('id', '=', $this->data()->group));
        
        if($group->count()){
            //get the permission from the group table
            $permissions = json_decode($group->first()->permission, true);
            
            if($permissions[$key] == true){
                return true;
            }
            
        }
        return false;
    }
    
    
    
    
    public function exists(){
        return (!empty($this->_data)) ? true : false;
    }
    
    //logout method
    public function logout(){
        $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));
        
        Session::delete($this->_sessionName);
        //removing the hash from browser
        Cookie::delete($this->_cookieName);
        
        //recording user login activity
        $this->_db->insert('activity', array(
            //Put this record in the session database
            'user' => $this->data()->email,
            'activity'    => 'User logout'
        ));
    }
    
    //function to return user data
    public function data(){
        return $this->_data;
    }
    
    public function isLoogedIn(){
        return $this->_isLoggedIn;
    }
    
    
    
}

