<?php

class _ConsumeApi {
    private array $_datas = array();
    private string $_key = 'key';

    public function _get($_key) {
        return $this->_datas[$_key];
    }

    public function _set($_title) {
        $this->_datas = json_decode(file_get_contents("http://www.omdbapi.com/?apikey={$this->_key}&t=$_title&plot=full"), TRUE);
    }
}

$_movie = new _ConsumeApi;
$_movie->_set(htmlspecialchars($_POST['film']));