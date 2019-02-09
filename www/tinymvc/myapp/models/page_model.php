<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 11:42
 */

class Page_Model extends TinyMVC_Model
{
    // Variabele voor de karakterset van de webpagina
    protected $sKarakterset = 'UTF-8';
    // Variabele voor de taal van de webpagina
    protected $sTaal = 'nl-NL';
    // Variabele voor de titel van de webpagina
    private $sPaginatitel = 'Example.com';


    public function __construct($titel = NULL)
    {
        // Paginatitel eventueel aanpassen
        if (isset($titel)) {
            $this->sPaginatitel = trim($titel);
        }

        // HTTP-compressie inschakelen
        ob_start('ob_gzhandler');
        // HTTP-header voor de taal van de content
        header('Content-Language: ' . $this->sTaal);
        // HTTP-header voor HTML plus de karakterset
        header('Content-Type: text/html; charset=' . $this->sKarakterset);

        // Begin van de HTML-code
        echo '<!DOCTYPE html>';
        echo '<html lang="' . $this->sTaal . '">';
        // Container <head>...</head>
        echo '<head>';
        echo '<meta http-equiv="Content-Language" content="' . $this->sTaal . '">';
        echo '<meta http-equiv="Content-Type" content="text/html; charset=' . $this->sKarakterset . '">';
        echo '<meta charset="' . $this->sKarakterset . '">';
        echo '<title>' . $this->sPaginatitel . '</title>';
        echo '<meta name="robots" content="index,follow">';
        echo '<link href="sans.css" rel="stylesheet" type="text/css">';
        echo '</head>';
        // Begin van de container <body>...</body>
        echo '<body lang="' . $this->sTaal . '">';
        // Responsbuffers flushen
        //ob_flush();
        flush();
    }


    public function __destruct()
    {
        // JavaScript voor Google Analytics hoort voor de eindtag </body>
        echo '<script type="text/javascript">';
        echo 'var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");';
        echo 'document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));';
        echo '</script>';
        echo '<script type="text/javascript">';
        echo 'var pageTracker = _gat._getTracker("UA-3828906-1");';
        echo 'pageTracker._trackPageview();';
        echo '</script>';
        // Einde van de HTML-code
        echo '</body>';
        echo '</html>';
        // Responsbuffers flushen
        //ob_flush();
        flush();
    }

    /**
     * @param string $sPaginatitel
     */
    public function setSPaginatitel($sPaginatitel)
    {
        $this->sPaginatitel = $sPaginatitel;
    }
}