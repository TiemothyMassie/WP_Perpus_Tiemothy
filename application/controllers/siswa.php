<?php
class siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[1]',
            [
                'required' => 'Nama Siswa Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|min_length[3]',
            [
                'required' => 'NIS Harus diisi',
                'min_lenght' => 'NIS terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas Siswa',
            'required|min_length[2]',
            [
                'required' => 'kelas siswa Harus diisi',
                'min_lenght' => 'kelas terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'tanggal',
            'Tanggal Lahir',
            [
                'required' => 'Tanggal Lahir Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'tempat',
            'Tempat Lahir',
            'required|min_length[2]',
            [
                'required' => 'Tempat Lahir Harus diisi',
                'min_lenght' => 'kelas terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            [
                'required' => 'kelas siswa Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'kelamin',
            'Jenis Kelamin',
            [
                'required' => 'Jenis Kelamin Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas Siswa',
            [
                'required' => 'kelas siswa Harus diisi',
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-siswa', $data);
        }
    }
}
