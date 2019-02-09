<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 14:10
 */

class Artist_Model extends TinyMVC_Model
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getArtistFromDbById($artistsId)
    {
        return $this->name = $this->db->query_one('select * from artists where artists_id=?',array($artistsId));
    }

}