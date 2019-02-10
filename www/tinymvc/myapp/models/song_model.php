<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 10/02/2019
 * Time: 17:28
 */

class Song_Model
{
    private $artist, $songTitle;

    public function __construct($artist = null, $songTitle = null)
    {
        $this->artist = $artist;
        $this->songTitle = $songTitle;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
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