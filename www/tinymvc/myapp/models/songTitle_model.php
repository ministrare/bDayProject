<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 13:49
 */

class SongTitle_Model
{
    private $songId, $songTitle;

    public function __construct($songId = null, $songTitle = null)
    {
        $this->songId = $songId;
        $this->songTitle = $songTitle;
    }

    /**
     * @return mixed
     */
    public function getSongId()
    {
        return $this->songId;
    }

    /**
     * @param mixed $songId
     */
    public function setSongId($songId)
    {
        $this->songId = $songId;
    }

    /**
     * @return mixed
     */
    public function getSongTitle()
    {
        return $this->songTitle;
    }

    /**
     * @param mixed $songTitle
     */
    public function setSongTitle($songTitle)
    {
        $this->songTitle = $songTitle;
    }


}

