<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_news($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
}
		
		public function set_news()
		{
			$this->load->helper('url');

			$slug = url_title($this->input->post('title'), 'dash', TRUE);

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'text' => $this->input->post('text')
			);

			return $this->db->insert('news', $data);
		}
		
		public function get_image_by_id($sql_str = FALSE)
		{
			if ($sql_str === FALSE)
			{
				return "http://localhost/Practica/Noticiero/img/failed2load.png";
			}
			else
			{
				$sql = $this->db->get_where('imgPath', array('ID' => $sql_str));
				$row = $sql->row_array();
				return $row['path'];
			}
		}
		
		public function mult_query_result()
		{
			$query = $this->db->get('imgPath');
			return $query->result_array();
		}
}