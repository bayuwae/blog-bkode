<?php

class Article_model extends CI_Model
{

	private $_table = 'article';

	public function rules(){
		return [
			[
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'required|max_length[128]'
			],[
				'field' => 'draft',
				'label' => 'Draft',
				'rules' => 'required|in_list[true,false]'
			],[
				'field' => 'content',
				'label' => 'Content',
				'rules' => '' 
			]
		];
	}
    public function count(){
        return $this->db->count_all($this->_table);
    }
		
	public function get(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function get_published($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db->get_where($this->_table, ['draft' => 'false']);
		} else {
			$query =  $this->db
				->get_where($this->_table, ['draft' => 'false'], $limit, $offset);
		}
		return $query->result();
	}

	public function find_by_slug($slug){
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id_article){
		if (!$id_article) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id_article' => $id_article));
		return $query->row();
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function update($article){
		if (!isset($article['id_article'])) {
			return;
		}

		return $this->db->update($this->_table, $article, ['id_article' => $article['id_article']]);
	}


	public function delete($id_article){
		if (!$id_article) {
			return;
		}

		return $this->db->delete($this->_table, ['id_article' => $id_article]);
	}

	public function search($keyboard){
		if(!$keyboard){
			return null;
		}
		$this->db->like('title', $keyboard);
		$this->db->or_like('content', $keyboard);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function get_published_count(){
		$query = $this->db->get_where($this->_table, ['draft' => 'false']);
		return $query->num_rows();
	}

	public function reset(){
		$this->db->empty_table($this->_table);
		return true;
	}

}