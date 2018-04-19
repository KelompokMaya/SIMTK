<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_siswa');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}


	public function index(){
		$data['aset']=$this->M_siswa->select_all();
		$data['currUser']=$this->session->userdata('fullname');
		$this->load->view('admin/v_pembayaran',$data);
	}

	public function select($id){
		$siswa=$this->M_siswa->select($id)->row();
		echo json_encode($siswa);

	}

	public function create(){
		
		$this->M_siswa->create($this->input->post());
		$this->index();
	}
	
	public function update(){
		$id=$this->input->post('id_siswa');
		$data=$this->input->post();
		unset($data['id_siswa']);

		$this->M_siswa->update($id,$data);
		$this->index();
	}
	public function updateLokasi(){
		$id = $this->input->post('id');
		$nama_aset = $this->input->post('nama');
		$curr_kampus = $this->input->post('curr_kampus');
		$curr_fakultas = $this->input->post('curr_fakultas');
		$curr_jurusan = $this->input->post('curr_jurusan');
		$curr_lokasi= $this->input->post('curr_lokasi');
		$kampus_id = $this->input->post('kampus_id');
		$fakultas_id = $this->input->post('fakultas_id');
		$jurusan_id = $this->input->post('jurusan_id');
		$lokasi_id = $this->input->post('lokasi_id');
		$tanggal_pindah = $this->input->post('tanggal_pindah');
		
		
		
		$this->M_aset->updateLokasi($id,$nama_aset,$curr_kampus,$curr_fakultas,$curr_jurusan,$curr_lokasi,$kampus_id,$fakultas_id, $jurusan_id, $lokasi_id,$tanggal_pindah);
		$this->index();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_siswa');
		$this->index();
	}

	
}
	