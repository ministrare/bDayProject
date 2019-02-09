<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 15:50
 */

class Playlist_Model extends TinyMVC_Model
{
    private $songId, $userId, $artistId, $songTitleId, $urlId;

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
    public function getSongIdFromDB()
    {

    }

}