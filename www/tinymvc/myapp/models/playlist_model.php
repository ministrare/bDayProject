<?php

class Playlist_Model extends TinyMVC_Model
{
private $songId, $userId, $artistId, $songTitleId, $urlId, $songList;

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
    public function getSongTitleId()
    {
        return $this->songTitleId;
    }

    /**
     * @param mixed $songTitleId
     */
    public function setSongTitleId($songTitleId)
    {
        $this->songTitleId = $songTitleId;
    }

    /**
     * @return mixed
     */
    public function getUrlId()
    {
        return $this->urlId;
    }

    /**
     * @param mixed $urlId
     */
    public function setUrlId($urlId)
    {
        $this->urlId = $urlId;
    }

    /**
     * @return mixed
     */
    public function getSongList()
    {
        return $this->songList;
    }

    /**
     * @param mixed $songList
     */
    public function setSongList($songList)
    {
        $this->songList = $songList;
    }


}