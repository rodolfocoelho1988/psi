<?php

class UsuariosModel extends CI_Model
{

	function add($dados)
	{
		$this->db->insert('usuario',$dados);
	}

	function duplicate_user($name)
	{
		$this->db->where('username',$name);
		$query = $this->db->get('usuario')->result();
		return $query;
	}

	function verify_email($email)
	{
		$this->db->where('email',$email);
		$query = $this->db->get('usuario')->result();
		
		return $query;
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('usuario');
	}

	function view_user($id_usuario)
	{
		$this->db->where('id',$id_usuario);
		$query = $this->db->get('usuario')->result();

		return $query;
	}
	
	function update($dados)
	{
		$this->db->where('id', $this->id);
		$this->db->set($dados);
		$this->db->update('usuario');
	}

	function update_pass($new_pass, $id_usuario)
	{
		$this->db->set('senha',$new_pass);
		$this->db->where('id', $id_usuario);
		$this->db->update('usuario');
	}
}
