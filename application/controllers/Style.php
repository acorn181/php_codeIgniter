<?php
class Style extends CI_Controller {
    
    public function css($style = 'login.css') {
        // log_message('info', $style);
        if (! file_exists(APPPATH.'views/css/'.$style)) {
            // log_message('info', 'Style.php内の条件分岐に入りました');
            show_404();
        }

        $data['title'] = ucfirst($style);

        // log_message('info', 'Style.php内の条件分岐をクリアしました');
        $this->load->view('css/'.$style, $data);
    }
}
?>
