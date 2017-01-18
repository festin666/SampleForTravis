<?php
/**
 * Created by PhpStorm.
 * User: mrfes
 * Date: 15.01.2017
 * Time: 23:43
 */

namespace Festin666\TravisCiTest;

class Super
{
    private $pictureId;
    private $html;
    private $keywords = [];

    public function __construct($id = '')
    {
        if ($id !== '') {
            $this->setPictureId($id);
        }
    }

    public function getPictureId()
    {
        return $this->pictureId;
    }

    public function setPictureId(string $url){
        if (preg_match("/.*([0-9]{9}).*/", $url, $m)){
            $this->pictureId = $m[1];
        } else {
            throw new \Exception("ID for picture not found in received url!");
        }
    }
    public function getPicturePage() {
        $url_template = "https://www.shutterstock.com/en/image-vector/%s";
        $url = sprintf($url_template, $this->getPictureId());
        $this->html = file_get_contents($url);
    }
    public function processKeywords() {
        $keyword_template = "/<a href=\"\/search\/([^\"]+)\" data-track=\"click.assetDetails.keywordSelected-([^\"]+)\" class=\"pull-left btn btn-search-pill js_key keyword\">([^\"]+)<\/a>/";
        if ($this->html != '') {
            if (preg_match_all("$keyword_template", $this->html, $m, PREG_PATTERN_ORDER )) {
                foreach ($m[3] as $s) {
                    $this->keywords[] = $s;
                }
            }
        }
    }
    public function getKeywords() {
        return $this->keywords;
    }
}