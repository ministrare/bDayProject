<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 14:10
 */

class Artist_Model
{
    private $artistId, $name;

    /**
     * @return mixed
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * @param mixed $artistId
     */
    public function setArtistId($artistId)
    {
        $this->artistId = $artistId;
    }

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

}