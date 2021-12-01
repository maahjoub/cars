<?php
class User {
    private $db, $data, $session_name, $cookie_name, $isLoggedin = false;
    public function __construct($user = null) {
        $this->db = DB::getInstance();
        $this->session_name = Config::get('session/session_name');
        $this->cookie_name = Config::get('remember/cookie_name');
        if (!$user) {
            if (Session::exists($this->session_name)) {
                $user = Session::get($this->session_name);
                if ($this->find($user)) {
                    $this->isLoggedin = true;
                } else {
                    // labla
                }
            }else {
                $this->find($user);
            }
        }
    }// End  function
    public function create($fields = array()) {
        if (!$this->db->insert('users', $fields)) {
            throw new Exception ('sorry registreation fail !! ' . print_r($fields));
            
        }
    } // End create function
    public function find($user = null) {
        if ($user) {
           $field = (is_numeric($user)) ? 'id' : 'name';
           $data = $this->db->get('users', array($field, '=', $user));
           if ($data->count()) {
               $this->data = $data->first();
                return true;
            }
        }
        return false;
    }
    public function login($username = null, $password = null, $remember = false) {
        
        if (!$username && !$password && $this->exists()) {
            Session::put($this->session_name, $this->data()->id);
        } else {

        $user = $this->find($username);
        if ($user) {
            if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                Session::put($this->session_name, $this->data()->id);
                if ($remember) {
                    $hash = Hash::unique();
                    $hashcheck = $this->db->get('session', array('user_id', '=', $this->data()->id));
                    if (!$hashcheck->count()) {
                        $this->db->insert('session', array(
                            'user_id' => $this->data()->id,
                            'cookie'  => $hash 
                        ));
                    } else {
                        $hash = $hashcheck->first()->hash;
                    }
                    Cookie::put($this->cookie_name, $hash, Config::get('remember/cookie_expiry'));
                }
                return true;
            }
        }
    }
        return false;
    } // End log in function
    
    public function logout() {
        Session::delete($this->session_name);
    }
    public function exists() {
        return (!empty($this->data)) ? true : false;
    }
    public function data() {
        return $this->data;
    }
    public function isLoggedin() {
        return $this->isLoggedin;
    }
    
} // End Class
