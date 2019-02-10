<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 13:00
 */

class User_Model extends TinyMVC_Model
{
    private $userId;
    private $userEmail, $userPass, $userAdmin;
    private $userFirstName, $userLastName;
    private $userMessages, $userPlaylist;
    private $created, $updated;


    /**
     * @param $email
     * @return bool
     */
    public function checkUserExists($email)
    {
        try{
            $result = $this->db->query_one('select * from users where email=?',array($email));
        }catch (Exception $e){
            return false;
        }

        return true;
    }

    /**
     * @param $email
     * @return bool
     */
    public function getUser($email)
    {
        $result = false;

        try{
            if($this->checkUserExists($email)){
                $result = $this->db->query_one('select * from users where email=?',array($email));

                $this->userId = $result['user_id'];
                $this->userEmail = $result['email'];
                $this->userPass = $result['password'];
                $this->userAdmin = $result['admin'];
                $this->userFirstName = $result['firstname'];
                $this->userLastName = $result['lastname'];
                $this->created = $result['created'];

                if($this->checkUserMessages()){
                    $this->userMessages = $this->getUserMessages();
                }

                if($this->checkUserPlaylist()){
                    $this->userPlaylist = $this->getUserPlaylist();
                }
            }

            return $result;

        }catch (Exception $e){
            return false;
        }
    }

    /**
     * @param $userEmail
     * @param null $admin
     * @param null $adminPass
     * @return bool
     */
    public function storeNewUser($userEmail, $admin = null, $adminPass = null)
    {
        $array = $admin ? array('email'=> $userEmail, 'password'=> $adminPass, 'admin' => 1) : array('email'=> $userEmail) ;

        try{
            $this->db->insert('users', $array);

            if($this->checkUserExists($userEmail)){
                $this->getUser($userEmail);
            }

        }catch (Exception $e){
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @return mixed
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * @return mixed
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    public function checkUserMessages()
    {
        $results = false;

        try{
            $row = $this->db->query('SELECT * FROM messages WHERE user_id=?',array($this->getUserId()));
            if($row > 0){
                $results = true;
            }
        }catch (Exception $e){
            return false;
        }

        return $results;
    }

    /**
     * @return mixed
     */
    public function getUserMessages()
    {
        $this->userMessages = false;

        try{
            $row = $this->db->query('SELECT * FROM messages WHERE user_id=?',array($this->getUserId()));

            if($row > 0){
                while($row = $this->db->next()){
                    $this->userMessages = new Message_Model($row['message_id'], $row['message'], $row['created'], $row['updated']);
                }
            }
        }catch (Exception $e){
            return false;
        }

        return $this->userMessages;
    }

    public function checkUserPlaylist()
    {
        $results = false;

        try{
            $row = $this->db->query('SELECT * FROM playlist WHERE user_id=?',array($this->getUserId()));
            if($row > 0){
                $results = true;
            }
        }catch (Exception $e){
            return false;
        }

        return $results;
    }

    /**
     * @return mixed
     */
    public function getUserPlaylist()
    {
        $this->userPlaylist = false;

        try{
            $row = $this->db->query('
                SELECT playlist.song_id, playlist.updated, playlist.artist_id, artists.name, playlist.song_title_id, song_titles.song_title, playlist.url_id, urls.url 
                FROM playlist
                LEFT JOIN song_titles
                ON playlist.song_title_id = song_titles.title_id
                LEFT JOIN artists
                ON playlist.artist_id = artists.artist_id
                LEFT JOIN urls
                ON playlist.url_id = urls.url_id
                WHERE user_id=?
                ORDER BY playlist.updated',array($this->getUserId()));

            if($row > 0){
                while($row = $this->db->next()){
                    $artist = new Artist_Model($row['artist_id'], $row['name']);
                    $songTitle = new SongTitle_Model($row['song_title_id'], $row['song_title']);
                    $song = new Song_Model($artist, $songTitle);
                    $url = new Url_Model($row['url_id'], $row['url']);

                    $results = new Playlist_Model($row['song_id'], $song, $url);
                    $this->userPlaylist[] = $results;
                    $this->updated = $row['updated'];
                }
            }
        }catch (Exception $e){
            return false;
        }
        return $this->userPlaylist;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}