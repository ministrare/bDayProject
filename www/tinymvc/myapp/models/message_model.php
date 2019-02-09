<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 13:34
 */

class Message_Model extends TinyMVC_Model
{
    private $message;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param $userid
     * @return mixed
     */
    public function getMessageFromDB($userId)
    {
        return $this->message = $this->db->query_one('select * from messages where user_id=?',array($userId));
    }
}