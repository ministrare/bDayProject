<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 13:49
 */

class Song_Model extends TinyMVC_Model
{
    private $songId, $songTitle;

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

    public function getSongTitleFromDbById($titleId){

        $result = $this->db->query_one('select * from song_titles where title_id=?',array($titleId));

        $this->songId = $result['title_id'] ;
        $this->songTitle = $result['song_title'] ;

        return true;
    }

    public function getSongTitleFromDbByName($songTitle){
        return $this->songTitle =  $this->db->query_one('select * from song_titles where  song_title=?',array($songTitle));
    }
}
