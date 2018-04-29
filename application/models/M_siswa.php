<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function select($id){
		$this->db->select('*');
		$this->db->where('no_induk',$id);
		return $this->db->get('tb_siswa');

		/* $this->db->select('*');
		$this->db->from('tb_aset');
		$this->db->join('tb_fakultas', 'tb_fakultas.id = tb_aset.fakultas_id');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_aset.jurusan_id');
		$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_aset.lokasi_id', 'left');
		$this->db->where('tb_aset.id',$id);
		return $this->db->get();*/
	}

	

	public function create($data){


		$this->db->insert('tb_siswa', $data);
		//print_r($this->input->post());	
	}

	public function update($id,$data){


		$this->db->where('id_siswa',$id);
		$this->db->update('tb_siswa', $data);
		//print_r($this->input->post());	
	}

	public function updateLokasi($id,$nama_aset,$curr_kampus,$curr_fakultas,$curr_jurusan,$curr_lokasi,$kampus_id,$fakultas_id, $jurusan_id, $lokasi_id,$tanggal_pindah){

		$data = array(
			'kampus_id' => $kampus_id,
			'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id
		);
		$this->db->where('id_aset',$id);
		$this->db->update('tb_aset', $data);


		$data_history = array(
			'aset_id' => $id,
			'nama_aset' => $nama_aset,
			'awal_kampus_id' => $curr_kampus,
			'awal_fakultas_id' => $curr_fakultas,
			'awal_jurusan_id' => $curr_jurusan,
			'awal_lokasi_id'=> $curr_lokasi,
			'sekarang_kampus_id' => $kampus_id,
			'sekarang_fakultas_id' => $fakultas_id,
			'sekarang_jurusan_id' => $jurusan_id,
			'sekarang_lokasi_id'=> $lokasi_id,
			'tanggal_pindah'=> $tanggal_pindah);
		$this->db->insert('tb_history', $data_history);
		//print_r($this->input->post());	
	}


	public function select_all(){
		$this->db->select('*');
		$this->db->order_by('id_siswa', 'DESC');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_siswa');
	}
		
}
