<?php

/**
 * レスポンスライブラリ
 *
 * @author acorn181
 */
class Response {
    /* @var object $ci CI */
    protected $ci;

    /* @var array $vars レスポンスデータ */
    protected $vars = array();

    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct() {
        $this->ci =& get_instance();
        $this->ci->load->helper('url');
    }

    /**
     * レスポンスデータのセット
     *
     * @param string|array $key   セットするキーまたはキーと値の連想配列
     * @param mixed        $value セットする値
     */
    public function set($key, $value = null) {
        if (is_array($key)) {
            $this->vars = array_merge($this->vars, $key);
        } else {
            $this->vars[$key] = $value;
        }
    }

    /**
     * レスポンスをHTML形式で出力する
     *
     * @param string $view ビュー名
     * @param array $vars 表示データ
     * @return void
     */
    public function html($view, $vars = array()) {
        $vars = array_merge($this->vars, $vars);

        $this->ci->load->view('templates/header', $vars);
        $this->ci->load->view($view, $vars);
        $this->ci->load->view('templates/footer', $vars);
    }
}
