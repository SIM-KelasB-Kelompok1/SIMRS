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

		function m_paramedis()
	{
		$this->load->model('m_data');
		$data['paramedis'] = $this->m_data->tampil_data('paramedis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/paramedis',$data);
		$this->load->view('template/footer');
	}
		function m_jabatan()
	{
		$this->load->model('m_data');
		$data['jabatan'] = $this->m_data->tampil_data('jabatan')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/jabatan',$data);
		$this->load->view('template/footer');
	}
	   function m_ruang_rawat_inap()
	{
		$this->load->model('m_data');
		$data['ruang_rawat_inap'] = $this->m_data->tampil_data('ruang_rawat_inap')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/ruang_rawat_inap',$data);
		$this->load->view('template/footer');
	}
	function m_poli()
	{
		$this->load->model('m_data');
		$data['poli'] = $this->m_data->tampil_data('poli')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli',$data);
		$this->load->view('template/footer');
	}
	function m_spesialis()
	{
		$this->load->model('m_data');
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/spesialis',$data);
		$this->load->view('template/footer');
	}
	function tambah_dokter()
	{
		$this->load->model('m_data');
		$data['dokter'] = $this->m_data->tampil_data('dokter')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter_tambah',$data);
		$this->load->view('template/footer');
	}
	function tambah_jabatan()
	{
		$this->load->model('m_data');
		$data['jabatan'] = $this->m_data->tampil_data('jabatan')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/jabatan_tambah',$data);
		$this->load->view('template/footer');
	}
	function tambah_paramedis()
	{
		$this->load->model('m_data');
		$data['paramedis'] = $this->m_data->tampil_data('paramedis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/paramedis_tambah',$data);
		$this->load->view('template/footer');
	}
	function tambah_ruang_rawat_inap()
	{
		$this->load->model('m_data');
		$data['ruang'] = $this->m_data->tampil_data('ruang_rawat_inap')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/ruang_rawat_inap_tambah',$data);
		$this->load->view('template/footer');
	}
	function tambah_poli()
	{
		$this->load->model('m_data');
		$data['poli'] = $this->m_data->tampil_data('poli')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli_tambah',$data);
		$this->load->view('template/footer');
	}
	function tambah_spesialis()
	{
		$this->load->model('m_data');
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/spesialis_tambah',$data);
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
	function aksi_tambah_paramedis()
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
		$this->m_data->input_data($data,'paramedis');
		redirect('master/m_paramedis');
	}
	function aksi_tambah_jabatan()
	{
		$kode_jabatan	= $this->input->post('kode_jabatan');
		$nama			= $this->input->post('nama');
		$spesialis		= $this->input->post('spesialis');
		$telp			= $this->input->post('telp');
		$status			= $this->input->post('status');
		
		$data = array(
				'kode_jabatan' 	=> $kode_jabatan,
				'nama'	 		=> $nama,
				'spesialis'		=> $spesialis,
				'telp'	 		=> $telp,
				'status'	 	=> $status,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'jabatan');
		redirect('master/m_jabatan');

	}
	function aksi_tambah_ruang_rawat_inap()
	{
		$nama_ruangan	= $this->input->post('nama_ruangan');
		$kelas			= $this->input->post('kelas');
		$kategori		= $this->input->post('kategori');
		$no_kamar		= $this->input->post('no_kamar');
		$tarif			= $this->input->post('tarif');
		$status			= $this->input->post('status');
		
		$data = array(
				'nama_ruangan' 	=> $nama_ruangan,
				'kelas'	 		=> $kelas,
				'kategori'		=> $kategori,
				'no_kamar'	 	=> $no_kamar,
				'tarif'	 		=> $tarif,
				'status'	 	=> $status,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'ruang_rawat_inap');
		redirect('master/m_ruang_rawat_inap');


	}
	function aksi_tambah_poli()
	{
		$nama 		= $this->input->post('nama');
		$no_pasien 		= $this->input->post('no_pasien');
		$kota_kab	= $this->input->post('kota_kab');
		$tanggal	= $this->input->post('tanggal');
		$jam 		= $this->input->post('jam');
		$poli  		= $this->input->post('poli');
		$dokter 	= $this->input->post('dokter');
		$cara_bayar	= $this->input->post('cara_bayar');
		$status		= $this->input->post('status');

		$data = array(
				'nama' 			=> $nama,
				'no_pasien' 	=> $no_pasien,
				'kota_kab' 		=> $kota_kab,
				'tanggal' 		=> $tanggal,
				'jam' 			=> $jam,
				'poli' 			=> $poli,
				'dokter' 		=> $dokter,
				'cara_bayar'	=> $cara_bayar,
				'status'	 	=> $status,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'poli');
		redirect('master/m_poli');
	}
	function aksi_tambah_spesialis()
	{
		$id		= $this->input->post('id');	
		$nama 		= $this->input->post('nama');
		

		$data = array(
				'id' 			=> $id,
				'nama' 			=> $nama,
				
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
	function edit_paramedis($id)
	{
		$this->load->model('m_data');
		$where = array('id_paramedis' => $id);
		$data['paramedis'] = $this->m_data->edit_data($where,'paramedis')->result();
		$data['paramedis'] = $this->m_data->tampil_data('paramedis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/paramedis_edit',$data);
		$this->load->view('template/footer');

	}
	function edit_jabatan($id)
	{
		$this->load->model('m_data');
		$where = array('id_jabatan' => $id);
		$data['jabatan'] = $this->m_data->edit_data($where,'jabatan')->result();
		$data['jabatan'] = $this->m_data->tampil_data('jabatan')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/jabatan_edit',$data);
		$this->load->view('template/footer');

	}

	function edit_ruang_rawat_inap($id)
	{
		$this->load->model('m_data');
		$where = array('id_ruangan' => $id);
		$data['ruang_rawat_inap'] = $this->m_data->edit_data($where,'ruang_rawat_inap')->result();
		$data['ruang_rawat_inap'] = $this->m_data->tampil_data('ruang_rawat_inap')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/ruang_rawat_inap_edit',$data);
		$this->load->view('template/footer');

	}
	function edit_poli($id)
	{
		$this->load->model('m_data');
		$where = array('no_pasien' => $id);
		$data['poli'] = $this->m_data->edit_data($where,'poli')->result();
		$data['poli'] = $this->m_data->edit_data($where,'poli')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli_edit',$data);
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
	function update_paramedis()
	{

		$id 		= $this->input->post('id_paramedis');
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

		$where = array('id_paramedis' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'paramedis',$data);
		redirect('master/m_paramedis');
	}
		function update_jabatan()
	{

		$id 		= $this->input->post('id_jabatan');
		$kode_jabatan	= $this->input->post('kode_jabatan');
		$nama			= $this->input->post('nama');
		$spesialis		= $this->input->post('spesialis');
		$telp			= $this->input->post('telp');
		$status			= $this->input->post('status');
		

		$data = array(
				'kode_jabatan' 	=> $kode_jabatan,
				'nama'	 		=> $nama,
				'spesialis'		=> $spesialis,
				'telp'	 		=> $telp,
				'status'	 	=> $status,
			);

		$where = array('id_jabatan' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'jabatan',$data);
		redirect('master/m_jabatan');
	}
		function update_ruang_rawat_inap()
	{

		$nama_ruangan	= $this->input->post('nama_ruangan');
		$kelas			= $this->input->post('kelas');
		$kategori		= $this->input->post('kategori');
		$no_kamar		= $this->input->post('no_kamar');
		$tarif			= $this->input->post('tarif');
		$status			= $this->input->post('status');
		

		$data = array(
				'nama_ruangan' 	=> $nama_ruangan,
				'kelas'	 		=> $kelas,
				'kategori'		=> $kategori,
				'no_kamar'	 	=> $no_kamar,
				'tarif'	 		=> $tarif,
				'status'	 	=> $status,
			);

		$where = array('id_ruangan' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'ruang_rawat_inap',$data);
		redirect('master/m_ruang_rawat_inap');
	}
		function update_poli()
	{

		$nama 		= $this->input->post('nama');
		$kota_kab	= $this->input->post('kota_kab');
		$tanggal	= $this->input->post('tanggal');
		$jam 		= $this->input->post('jam');
		$poli  		= $this->input->post('poli');
		$dokter 	= $this->input->post('dokter');
		$cara_bayar	= $this->input->post('cara_bayar');
		$status		= $this->input->post('status');
		

	
		$data = array(
				'nama' 			=> $nama,
				'kota_kab' 		=> $kota_kab,
				'tanggal' 		=> $tanggal,
				'jam' 			=> $jam,
				'poli' 			=> $poli,
				'dokter' 		=> $dokter,
				'cara_bayar'	=> $cara_bayar,
				'status'	 	=> $status,
			);

		$where = array('no_pasien' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'poli',$data);
		redirect('master/m_poli');
	}

	function hapus_dokter($id)
	{
		$this->load->model('m_data');
		$where = array('id_dokter' => $id);
		$this->m_data->hapus_data($where,'dokter');
		redirect('master/m_dokter');
	}

	function hapus_paramedis($id)
	{
		$this->load->model('m_data');
		$where = array('id_paramedis' => $id);
		$this->m_data->hapus_data($where,'paramedis');
		redirect('master/m_paramedis');
	}

	function hapus_jabatan($id)
	{
		$this->load->model('m_data');
		$where = array('id_jabatan' => $id);
		$this->m_data->hapus_data($where,'jabatan');
		redirect('master/m_jabatan');
	}


	function hapus_ruang($id)
	{
		$this->load->model('m_data');
		$where = array('id_ruangan' => $id);
		$this->m_data->hapus_data($where,'ruang_rawat_inap');
		redirect('master/m_ruang_rawat_inap');
	}
	function hapus_poli($id)
	{
		$this->load->model('m_data');
		$where = array('id_poli' => $id);
		$this->m_data->hapus_data($where,'poli');
		redirect('master/m_poli');
	}
	function hapus_spesialis($id)
	{
		$this->load->model('m_data');
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'spesialis');
		redirect('master/spesialis');
	}
	function hapus_ruang_rawat_inap($id)
	{
		$this->load->model('m_data');
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'ruang_rawat_inap');
		redirect('master/ruang_rawat_inap');
	}
}
