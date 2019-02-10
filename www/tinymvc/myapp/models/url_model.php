<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 15:43
 */

class Url_Model
{
    private $urlId, $url;

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
}