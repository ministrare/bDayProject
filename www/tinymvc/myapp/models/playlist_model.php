<?php

class Playlist_Model
{
    private $songId, $song, $url;

    public function __construct($songId = null, $song = null, $url = null)
    {
        $this->songId = $songId;
        $this->song = $song;
        $this->url = $url;
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
     * @return null
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * @param null $song
     */
    public function setSong($song)
    {
        $this->song = $song;
    }

    /**
     * @return null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}