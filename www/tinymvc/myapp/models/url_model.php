<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 15:43
 */

class Url_Model extends TinyMVC_Model
{
private $urlId, $url;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrlFromDb($urlId)
    {
        $result = $this->db->query_one('select * from urls where url_id=?',array($urlId));

        $this->urlId = $result['url_id'];
        $this->url = $result['url'];

        return true;

    }


}