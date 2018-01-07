<?php
class Pages extends CI_Controller {

    protected $device = 'pc';

    public function index($page = 'home') {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            //Page not Found
            show_404();
        }

        if (!empty($_SERVER['HTTP_USER_AGENT'])) {
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($user_agent, 'iPhone') !== false || strpos($user_agent, 'iPod') !== false || strpos($user_agent, 'Android')) {
                $device = 'sm';
            }
        } else {
            echo 'HTTP_USER_AGENTの取得に失敗しました';
        }

        $data['device'] = $device;
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
