<?php
class ArticleModel extends CI_Model {
    
    Public function __construct() {
        $this->load->database();
    }

    public function getArticle($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('article');
            return $query->result_array();
        }

        $query = $this->db->get_where('article', array('id' => $id));
        return $query->row_array();
    }

    public function setArticle() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('article', $data);
    }
}
