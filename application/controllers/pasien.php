<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
		}


	public function d_pasien()
	{
		$this->load->model('m_data');
		$data['pasien'] = $this->m_data->tampil_data('pasien')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}
	public function d_pasien_front()
	{
		$this->load->model('m_data');
		$data['pasien'] = $this->m_data->tampil_data('pasien')->result();
		$this->load->view('template/front_office');
		$this->load->view('template/header');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}
	public function d_pasien_dokter()
	{
		$this->load->model('m_data');
		$data['pasien'] = $this->m_data->tampil_data('pasien')->result();
		$this->load->view('template/dokter');
		$this->load->view('template/header');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}

	public function edit_pasien($id)
	{
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['pasien'] = $this->m_data->tampil_data()->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/edit_pasien',$data);
		$this->load->view('template/footer');
	}
	public function edit_pasien_front($id)
	{
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['pasien'] = $this->m_data->tampil_data('pasien')->result();
		$this->load->view('template/front_office');
		$this->load->view('template/header');
		$this->load->view('admin/edit_pasien',$data);
		$this->load->view('template/footer');
	}

	function tambah_pasien()
	{
		$rekmed 		= $this->input->post('rekmed');
		$tgl_masuk 		= $this->input->post('tgl_masuk');
		$jam_masuk 		= $this->input->post('jam_masuk');
		$nm_depan 		= $this->input->post('nm_depan');
		$nm_belakang 	= $this->input->post('nm_belakang');
		$alamat			= $this->input->post('alamat');
		$prov			= $this->input->post('prov');
		$kab			= $this->input->post('kab');
		$kec			= $this->input->post('kec');
		$kel			= $this->input->post('kel');
		$umur			= $this->input->post('umur');
		$jk				= $this->input->post('jk');
		$telp			= $this->input->post('telp');
		$pendidikan		= $this->input->post('pendidikan');
		$pekerjaan		= $this->input->post('pekerjaan');
		$agama			= $this->input->post('agama');
		$wn				= $this->input->post('wn');
		$status			= $this->input->post('status');
		$gol_darah		= $this->input->post('gol_darah');
		$p_jawab		= $this->input->post('p_jawab');
		date_default_timezone_set('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data = array(

				'rekmed' 		=> $rekmed,	
				'tgl_masuk' 	=> $tgl_masuk,	
				'jam_masuk' 	=> $jam_masuk,	
				'nm_depan'	 	=> $nm_depan,	
				'nm_belakang'	=> $nm_belakang,	
				'alamat'		=> $alamat,	
				'prov'			=> $prov,	
				'kab'			=> $kab,	
				'kec'			=> $kec,	
				'kel'			=> $kel,	
				'umur'			=> $umur,	
				'jk'			=> $jk,	
				'telp'			=> $telp,	
				'pendidikan'	=> $pendidikan,	
				'pekerjaan'		=> $pekerjaan,	
				'agama'			=> $agama,	
				'wn'			=> $wn,	
				'status'		=> $status,	
				'gol_darah'		=> $gol_darah,	
				'p_jawab'		=> $p_jawab,	
				'date_created'	=> $date_created,	
		);


		$this->m_data->input_data($data,'pasien');
		redirect('pasien/d_pasien');
	}

	function update_pasien()
	{
		$id 		= $this->input->post('id');
		$rekmed 		= $this->input->post('rekmed');
		$tgl_masuk 		= $this->input->post('tgl_masuk');
		$jam_masuk 		= $this->input->post('jam_masuk');
		$nm_depan 		= $this->input->post('nm_depan');
		$nm_belakang 	= $this->input->post('nm_belakang');
		$alamat			= $this->input->post('alamat');
		$prov			= $this->input->post('prov');
		$kab			= $this->input->post('kab');
		$kec			= $this->input->post('kec');
		$kel			= $this->input->post('kel');
		$umur			= $this->input->post('umur');
		$jk				= $this->input->post('jk');
		$telp			= $this->input->post('telp');
		$pendidikan		= $this->input->post('pendidikan');
		$pekerjaan		= $this->input->post('pekerjaan');
		$agama			= $this->input->post('agama');
		$wn				= $this->input->post('wn');
		$status			= $this->input->post('status');
		$gol_darah		= $this->input->post('gol_darah');
		$p_jawab		= $this->input->post('p_jawab');
		date_default_timezone_set('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data = array(

				'rekmed' 		=> $rekmed,	
				'tgl_masuk' 	=> $tgl_masuk,	
				'jam_masuk' 	=> $jam_masuk,	
				'nm_depan'	 	=> $nm_depan,	
				'nm_belakang'	=> $nm_belakang,	
				'alamat'		=> $alamat,	
				'prov'			=> $prov,	
				'kab'			=> $kab,	
				'kec'			=> $kec,	
				'kel'			=> $kel,	
				'umur'			=> $umur,	
				'jk'			=> $jk,	
				'telp'			=> $telp,	
				'pendidikan'	=> $pendidikan,	
				'pekerjaan'		=> $pekerjaan,	
				'agama'			=> $agama,	
				'wn'			=> $wn,	
				'status'		=> $status,	
				'gol_darah'		=> $gol_darah,	
				'p_jawab'		=> $p_jawab,	
				'date_created'	=> $date_created,	
		);

		$where = array('id' => $id);


		$this->m_data->update_data($where,'pasien',$data);
		redirect('pasien/d_pasien');
	}

	function detail()
	{

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pasien/detail_pasien');
		$this->load->view('template/footer');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'pasien');
		redirect('pasien/d_pasien');
	}
}
