<?php
class Article extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('ArticleModel');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['article'] = $this->ArticleModel->getArticle();
        $data['title'] = '記事一覧';

        $this->load->view('templates/header', $data);
        $this->load->view('article/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL) {
        $data['articleItem'] = $this->ArticleModel->getArticle($id);

        if (empty($data['articleItem'])) {
            show_404();
        }

        $data['title'] = $data['articleItem']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('article/view', $data);
        $this->load->view('templates/footer');
    }

    /*
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }
        else {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
    */
}
