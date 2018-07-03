<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$data['tampil'] = $this->m_crud->tampil();
		$this->load->view('data', $data);
	}

	// FUNGSI INPUT DATA
	public function simpan()
	{
		if(isset($_POST)){
		 	$config['upload_path']          = './images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 200;
            $config['max_width']            = 2024;
            $config['max_height']           = 2024;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('home', $error);
            }
            else
            {	
            		$nama = $this->input->post('nama');
					$email = $this->input->post('email');
					$jenkel = $this->input->post('jenkel');
					$alamat = $this->input->post('alamat');
					$lulusan = $this->input->post('lulusan');
                    $upload = $this->upload->data();
                    $gambar = $upload['file_name'];

                    $data = array(
				        'nama' => $nama,
				        'email' => $email,
				        'jenkel' => $jenkel,
				        'alamat' => $alamat,
				        'lulusan' => $lulusan,
				        'foto' => $gambar
					);

					$this->m_crud->input($data);
					$this->session->set_flashdata('pesan', 'DATA BERHASIL DI SIMPAN');
					redirect('welcome');
            }			
		}
	}


	// FUNGSI TAMPIL DATA EDIT
	public function tampilEdit($id){
		$data['tampilEdit'] = $this->m_crud->tampilEdit($id);
		$this->load->view('edit', $data);
	}

	// FUNGSI EDIT DATA
	public function simpanEdit($id){
		if(isset($_POST)){
		 	$config['upload_path']          = './images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 200;
            $config['max_width']            = 2024;
            $config['max_height']           = 2024;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                    // $error = array('error' => $this->upload->display_errors());
                    // $this->session->set_flashdata('error', 'DATA ERROR');
                    // redirect('data/tampilEdit/'.$id);
                    // echo "ERROR";
            	$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$jenkel = $this->input->post('jenkel');
				$alamat = $this->input->post('alamat');
				$lulusan = $this->input->post('lulusan');

                $data = array(
			        'nama' => $nama,
			        'email' => $email,
			        'jenkel' => $jenkel,
			        'alamat' => $alamat,
			        'lulusan' => $lulusan
				);

                $id = $this->input->post('id');
				$this->m_crud->editData($data, $id);
				$this->session->set_flashdata('pesan', 'DATA BERHASIL DI EDIT');
				redirect('data');
            }
            else
            {	
        		$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$jenkel = $this->input->post('jenkel');
				$alamat = $this->input->post('alamat');
				$lulusan = $this->input->post('lulusan');
                $upload = $this->upload->data();
                $gambar = $upload['file_name'];

                $data = array(
			        'nama' => $nama,
			        'email' => $email,
			        'jenkel' => $jenkel,
			        'alamat' => $alamat,
			        'lulusan' => $lulusan,
			        'foto' => $gambar
				);

                $id = $this->input->post('id');
				$this->m_crud->editData($data, $id);
				$this->session->set_flashdata('pesan', 'DATA BERHASIL DI EDIT');
				redirect('data');
            		
            }			
		}
	}

	// FUNGSI DELETE DATA
	public function delete($id)
	{
		$this->m_crud->delete($id);
		$this->session->set_flashdata('pesan', 'DATA BERHASIL DI DELETE');
		redirect('data');
	}
}
