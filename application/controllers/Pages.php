<?php
class Pages extends CI_Controller {
    
    public function view($page = 'home') {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            //Page not Found
            show_404();
        }

        $data['device'] = 'pc';
        if (!empty($_SERVER['HTTP_USER_AGENT'])) {
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($user_agent, 'iPhone') !== false || strpos($user_agent, 'iPod') !== false || strpos($user_agent, 'Android')) {
                $data['device'] = 'sm';
            }
        } else {
            echo 'HTTP_USER_AGENTの取得に失敗しました';
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
