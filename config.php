<?php

class Config {
  private $appid;
  private $sentence;
  private $reqURL;
  private $xml;
  private $hiraganaArr = [];
  private $targetTxt;

  protected function genReqURL($query) {
    $this->appid = "**********************";
    $this->sentence = urlencode(htmlspecialchars(urldecode($query), ENT_QUOTES, 'UTF-8'));
    $this->reqURL = "https://jlp.yahooapis.jp/FuriganaService/V1/furigana?appid=".$this->appid."&sentence=".$this->sentence;
  }

  protected function convert() {
    $this->xml = simplexml_load_file($this->reqURL);

    foreach ($this->xml->Result->WordList->Word as $word) {
      if(property_exists($word, "Furigana")) {array_push($this->hiraganaArr, $word->Furigana);}
      else {array_push($this->hiraganaArr, $word->Surface);}
    }
    return implode("", $this->hiraganaArr);
  }

  public function createjson($query) {
    if(!empty($query)) {
      $this->genReqURL($query);
      $this->targetTxt = $this->convert();
    } else {
      $this->targetTxt = "failed";
    }

    echo json_encode($this->targetTxt, JSON_UNESCAPED_UNICODE);
  }
}
