<?php

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('auth_model');
        if(!$this->auth_model->current_user()){
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['articles'] = $this->article_model->get();
        $data['keyword'] = $this->input->get('keyword');

        if(!empty($this->input->get('keyword'))){
            $data['articles'] = $this->article_model->search($data['keyword']);
        }
    
        if(count($data['articles']) <= 0 && !$this->input->get('keyword')){
            $this->load->view('admin/post_empty.php', $data);
        } else {
            $this->load->view('admin/post_list.php', $data);
        }
    }

    public function new()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->library('form_validation');
        if ($this->input->method() === 'post') {
            //lakukan validasi sebelum menyimpan ke model

            $rules = $this->article_model->rules();
            $this->form_validation->set_rules($rules);

            if($this->form_validation->run() === FALSE){
                return $this->load->view('admin/post_new_form.php', $data);
            }

            // generate unique id and slug
            $id_article = uniqid('', true);
            $slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

            $article = [
                'id_article' => $id_article,
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft'),
            
            ];

            $saved = $this->article_model->insert($article);

            if ($saved) {
                $this->session->set_flashdata('message', 'Berhasil Menambah Artikel');
                return redirect('admin/post');
            }
        }

        $this->load->view('admin/post_new_form.php', $data);
    }

    public function edit($id_article = null)
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['article'] = $this->article_model->find($id_article);
        $this->load->library('form_validation');

        if (!$data['article'] || !$id_article) {
            show_404();
        }

        if ($this->input->method() === 'post') {
            //lakukan validasi data seblum simpan ke model
            $rules = $this->article_model->rules();
            $this->form_validation->set_rules($rules);

            if($this->form_validation->run() === FALSE){
                return $this->load->view('admin/post_edit_form.php', $data);
            }
            $article = [
                'id_article' => $id_article,
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft')
            ];
            $updated = $this->article_model->update($article);
            if ($updated) {
                $this->session->set_flashdata('message', 'Berhasil Mengedit Artikel');
                redirect('admin/post');
            }
        }

        $this->load->view('admin/post_edit_form.php', $data);
    }

    public function delete($id_article = null)
    {
        if (!$id_article) {
            show_404();
        }

        $deleted = $this->article_model->delete($id_article);
        if ($deleted) {
            $this->session->set_flashdata('message', 'Berhasil  Menghapus Artikel');
            redirect('admin/post');
        }
    }

public function hapuskabeh() {
    $this->article_model->reset();
    $this->session->set_flashdata('message', 'Berhasil Menghapus Semua Artikel');
    redirect('admin/post');
}

}

