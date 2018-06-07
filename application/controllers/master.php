<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

	function m_dokter()
	{
		$this->load->model('m_data');
		$data['dokter'] = $this->m_data->tampil_data('dokter')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter',$data);
		$this->load->view('template/footer');
	}

	function tambah_dokter()
	{
		$this->load->model('m_data');
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter_tambah',$data);
		$this->load->view('template/footer');
	}

	function aksi_tambah_dokter()
	{
		$nama 		= $this->input->post('nama');
		$spesialis	= $this->input->post('spesialis');
		$telp		= $this->input->post('telp');
		$status		= $this->input->post('status');

		$data = array(
				'nama' 			=> $nama,
				'spesialis'	 	=> $spesialis,
				'telp'		 	=> $telp,
				'status'	 	=> $status,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'dokter');
		redirect('master/m_dokter');
	}

	function edit_dokter($id)
	{
		$this->load->model('m_data');
		$where = array('id_dokter' => $id);
		$data['dokter'] = $this->m_data->edit_data($where,'dokter')->result();
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter_edit',$data);
		$this->load->view('template/footer');
	}

	function update_dokter()
	{

		$id 		= $this->input->post('id_dokter');
		$nama 		= $this->input->post('nama');
		$spesialis	= $this->input->post('spesialis');
		$telp		= $this->input->post('telp');
		$status		= $this->input->post('status');

		$data = array(
				'nama' 			=> $nama,
				'spesialis'	 	=> $spesialis,
				'telp'		 	=> $telp,
				'status'	 	=> $status,
			);

		$where = array('id_dokter' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'dokter',$data);
		redirect('master/m_dokter');
	}

	function hapus($id)
	{
		$this->load->model('m_data');
		$where = array('id_dokter' => $id);
		$this->m_data->hapus_data($where,'dokter');
		redirect('master/m_dokter');
	}
}
