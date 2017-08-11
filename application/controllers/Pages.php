<?php
class Pages extends CI_Controller {
    
    public function view($page = 'home') {
        if ( !file_exists(APPPATH,'views/pages/'.$page.'.php')) {
            //Page not Found
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $data->load->view('templates/footer', $data);
    }
}
