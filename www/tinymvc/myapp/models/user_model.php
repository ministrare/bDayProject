<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 13:00
 */

class User_model extends TinyMVC_Model
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