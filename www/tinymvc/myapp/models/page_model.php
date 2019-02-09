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
        echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
        echo '<meta http-equiv="Content-Language" content="' . $this->sTaal . '">';
        echo '<meta http-equiv="Content-Type" content="text/html; charset=' . $this->sKarakterset . '">';
        echo '<meta charset="' . $this->sKarakterset . '">';
        echo '<title>' . $this->sPaginatitel . '</title>';
        echo '<meta name="robots" content="index,follow">';
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">';
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
        echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>';
        echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>';
        // Einde van de HTML-code
        echo '</body>';
        echo '</html>';
        // Responsbuffers flushen
        //ob_flush();
        flush();
    }
}