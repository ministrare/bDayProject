<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 13:49
 */

class Song_Model extends TinyMVC_Model
{
    private $songTitle;

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

    public function getSongTitleFromDB($titleId){
        return $this->songTitle =  $this->db->query_one('select * from song_titles where title_id=?',array($titleId));
    }
}
