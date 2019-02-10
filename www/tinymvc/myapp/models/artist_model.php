<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 14:10
 */

class Artist_Model
{
    private $artistId, $artistName;

    /**
     * Artist_Model constructor.
     * # Optional
     * @param $artistId
     * @param $artistName
     */
    public function __construct($artistId = null, $artistName = null)
    {
        $this->artistId = $artistId;
        $this->artistName = $artistName;
    }

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
    public function getArtistName()
    {
        return $this->artistName;
    }

    /**
     * @param $artistName
     */
    public function setArtistName($artistName)
    {
        $this->artistName = $artistName;
    }

}