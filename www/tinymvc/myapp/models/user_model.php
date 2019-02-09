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
    private $created;


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

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @param mixed $userFirstName
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param mixed $userLastName
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
    }

    public function getUser($email)
    {
        try{
            if($this->checkIfUserExists($email)){
                $result = $this->db->query_one('select * from users where email=?',array($email));
            }

        }catch (Exception $e){
            return false;
        }

        $this->userId = $result['user_id'];
        $this->userEmail = $result['email'];
        $this->userPass = $result['password'];
        $this->userAdmin = $result['admin'];
        $this->created = $result['created'];

        return $result;
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
            $this->db->insert('users', $array);

            if($this->checkIfUserExists($userEmail)){
                $this->getUser($userEmail);
            }

        }catch (Exception $e){
            return false;
        }

        return true;
    }




}