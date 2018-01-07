<?php

/**
 * ユーザー認証コントローラー
 *
 * @author acorn181
 */
class Login extends CI_Controller {
    /**
     * 認証ページを表示
     */
    public function index() {
        $this->response->html('login/index');
    }
}
