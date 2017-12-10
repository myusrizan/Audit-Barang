<?php
	class rpl_model extends CI_Model{
		function getData($uname, $pass){
			return $this->db->get_where('profil', array('uname'=>$uname, 'pass'=>$pass))->row();
		}
		function tampil_data(){
			return $this->db->get('barang');
		}
		function tampil_report(){
			return $this->db->get('report');
		}
		function getById($id){
			return $this->db->get_where('barang', array('id'=>$id))->row();
		}
		function getByIdReport($id){
			return $this->db->get_where('report', array('id'=>$id))->row();
		}
		function getStok($id){
			$this->db->select('stok,namaBarang');
			$this->db->where(array('id'=>$id));
			$q=$this->db->get('barang');
			$data=$q->result_array();
			return $data[0]['stok'];
		}
		function getNamaBarang($id){
			$this->db->select('namaBarang');
			$this->db->where(array('id'=>$id));
			$q=$this->db->get('barang');
			$data=$q->result_array();
			return $data[0]['namaBarang'];
		}
		function input_data($data, $table){
			$this->db->insert($table, $data);
		}
		function hapus_data($id){
			$this->db->delete('barang');
		}
		function hapus_data_report($id){
			$this->db->delete('report');
		}
		function edit_data($data, $table){
			$this->db->update($table, $data);
		}
		function getKasta($uname, $pass){
			$this->db->select('kasta');
			$this->db->where(array('uname'=>$uname, 'pass'=>$pass));
			$q=$this->db->get('profil');
			$data=$q->result_array();
			return $data[0]['kasta'];
		}
	}
?>