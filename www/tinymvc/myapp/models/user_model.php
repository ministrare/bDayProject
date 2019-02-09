<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 13:00
 */

class User_Model extends TinyMVC_Model
{
    private $userEmail, $userPass, $userMessage, $userPlaylist;

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    public function checkIfUserExists($email)
    {
        try{
            $result = $this->db->query_one('select * from users where email=?',array($email));
        }catch (Exception $e){
            return false;
        }

        return true;
    }

    public function storeNewUser($userEmail, $admin = null, $adminPass = null)
    {
        $array = $admin ? array('email'=> $userEmail, 'password'=> $adminPass, 'admin' => 1) : array('email'=> $userEmail) ;

        try{
            $result = $this->db->insert('users', $array);
        }catch (Exception $e){
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @param mixed $userPass
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
    }

    /**
     * @return mixed
     */
    public function getUserMessage()
    {
        return $this->userMessage;
    }

    /**
     * @param mixed $userMessage
     */
    public function setUserMessage($userMessage)
    {
        $this->userMessage = $userMessage;
    }

    /**
     * @return mixed
     */
    public function getUserPlaylist()
    {
        return $this->userPlaylist;
    }

    /**
     * @param mixed $userPlaylist
     */
    public function setUserPlaylist($userPlaylist)
    {
        $this->userPlaylist = $userPlaylist;
    }


}