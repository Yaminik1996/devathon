<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managers_model extends CI_Model
{
	function get_pages($conference_id)
	{
		$pages = $this->db->query("SELECT * FROM pages");
		return $pages->result_array();
	}

	function get_all_pages()
	{
		$all_pages = $this->db->query("SELECT * FROM pages");
		return $all_pages->result_array();
	}

	function get_all_contents()
	{
		$all_contents = $this->db->query("SELECT * FROM contents");
		return $all_contents->result_array();
	}

	function get_approved_papers()
	{
		$approved_papers= $this->db->query("SELECT * FROM papers WHERE approved=1");
		return $approved_papers->result_array();
	}
	function get_unapproved_papers()
	{
		$unapproved_papers = $this->db->query("SELECT * FROM papers WHERE approved!=1");
		return $unapproved_papers->result_array();
	}

	function add_page($page)
	{
		$this->db->insert('pages', $page);
		return true;
	}
}
?>