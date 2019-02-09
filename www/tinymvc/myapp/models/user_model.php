<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 13:00
 */

class User_Model extends TinyMVC_Model
{
    private $userId;
    private $userEmail, $userPass, $userAdmin;
    private $userFirstName, $userLastName;
    private $userMessage, $userPlaylist;
    private $created, $updated;


    /**
     * @param $email
     * @return bool
     */
    public function checkUserExists($email)
    {
        try{
            $result = $this->db->query_one('select * from users where email=?',array($email));
        }catch (Exception $e){
            return false;
        }

        return true;
    }

    /**
     * @param $email
     * @return bool
     */
    public function getUser($email)
    {
        $result = false;

        try{
            if($this->checkUserExists($email)){
                $result = $this->db->query_one('select * from users where email=?',array($email));

                $this->userId = $result['user_id'];
                $this->userEmail = $result['email'];
                $this->userPass = $result['password'];
                $this->userAdmin = $result['admin'];
                $this->created = $result['created'];

                if($this->checkUserPlaylist($this->userId)){
                    $this->userPlaylist = $this->getUserPlaylist($this->userId);
                }
            }

            return $result;

        }catch (Exception $e){
            return false;
        }
    }

    /**
     * @param $userEmail
     * @param null $admin
     * @param null $adminPass
     * @return bool
     */
    public function storeNewUser($userEmail, $admin = null, $adminPass = null)
    {
        $array = $admin ? array('email'=> $userEmail, 'password'=> $adminPass, 'admin' => 1) : array('email'=> $userEmail) ;

        try{
            $this->db->insert('users', $array);

            if($this->checkUserExists($userEmail)){
                $this->getUser($userEmail);
            }

        }catch (Exception $e){
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @return mixed
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * @return mixed
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @return mixed
     */
    public function getUserMessage()
    {
        return $this->userMessage;
    }

    public function checkUserPlaylist($userId)
    {
        $results = false;

        try{
            $row = $this->db->query('SELECT * FROM playlist WHERE user_id=?',array($userId));
            if($row > 0){
                $results = true;
            }
        }catch (Exception $e){
            return false;
        }

        return $results;
    }

    /**
     * @param $userId
     * @return mixed
     */
    public function getUserPlaylist($userId)
    {
        $this->userPlaylist = false;

        try{
            $row = $this->db->query('SELECT * FROM playlist WHERE user_id=?',array($userId));

            if($row > 0){
                while($row = $this->db->next()){
                    $results[] = $row;
                }
               $this->userPlaylist = $results;

            }
        }catch (Exception $e){
            return false;
        }

        return $this->userPlaylist;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}