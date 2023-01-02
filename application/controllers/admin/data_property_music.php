<?php
class Data_Property_Music extends CI_Controller
{
    public function index()
    {
        $data['alatmusikjasa'] = $this->model_alat_musik->get_data('alatmusikjasa')->result();
        $data['type'] = $this->model_alat_musik->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_property_music()
    {
        $data['alatmusikjasa'] = $this->Model_Alat_Musik->get_data('alatmusikjasa')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music_add_property', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_property_music_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->add_property_music();
        } else {
            $Nama               = $this->input->post('Nama');
            $Brand              = $this->input->post('Brand');
            $HargaSewa          = $this->input->post('HargaSewa');
            $Status             = $this->input->post('Status');
            $Gambar               = $_FILES['gambar']['name'];
            if ($Gambar = '') {
            } else {
                $config['upload_path']     = './assets/upload';
                $config['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('Gambar')) {
                    echo "Gambar Alat Music Gagal Diupload";
                } else {
                    $Gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'Nama'                  => $Nama,
                'Brand'                 => $Brand,
                'HargaSewa'             => $HargaSewa,
                'Status'                => $Status,
                'Gambar'                => $Gambar
            );

            $this->model_alat_musik->insert_data($data, 'alatmusikjasa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Alat Musik Berhasil Ditambahkan!.
            <button type="butoon" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </div>');
            redirect('admin/data_property_music');
        }
    }

    public function update_data($id)
    {
        $where = array('id_alat_musik_jasa' => $id);
        $data['alatmusikjasa'] = $this->db->query("SELECT * FROM alatmusikjasa WHERE id_alat_musik_jasa='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_property_music_update_property', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id                 = $this->input->post('id_alat_musik_jasa');
            $Nama               = $this->input->post('Nama');
            $Brand              = $this->input->post('Brand');
            $HargaSewa          = $this->input->post('HargaSewa');
            $Status             = $this->input->post('Status');
            $Gambar             = $_FILES['gambar']['name'];
            if ($Gambar) {
                $config['upload_path']     = './assets/upload';
                $config['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('Gambar')) {
                    $Gambar = $this->upload->data('file_name');
                    $this->db->set('Gambar', $Gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'Nama'                  => $Nama,
                'Brand'                 => $Brand,
                'HargaSewa'             => $HargaSewa,
                'Status'                => $Status,
                'Gambar'                => $Gambar
            );

            $where = array(
                'id_alat_musik_jasa' => $id
            );

            $this->model_alat_musik->update_data('alatmusikjasa', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Alat Musik Berhasil Diupdate!.
            <button type="butoon" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_property_music');
        }
    }

    // public function update_property($id)
    // {
    //     $where = array('id_alat_musik_jasa' => $id);
    //     $data['alatmusikjasa'] = $this->db->query("SELECT * FROM alatmusikjasa WHERE id_alat_musik_jasa='$id'")->result();
    //     $this->load->view('templates_admin/header');
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/data_property_update', $data);
    //     $this->load->view('templates_admin/footer');
    // }

    // public function update_property_action($id)
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->update_property($id);
    //     } else {
    //         $id_alat_musik_jasa  = $this->input->post('id_alat_musik_jsa');
    //         $Nama                = $this->input->post('Nama');
    //         $Brand               = $this->input->post('Brand');
    //         $HargaSewa           = $this->input->post('HargaSewa');
    //         $Status              = $this->input->post('Status');
    //         $Gambar              = $this->input->post('Gambar');
    //         $kode_type           = $this->input->post('kode_type');


    //         $data = array(
    //             'Nama' => $Nama,
    //             'Brand' => $Brand,
    //             'HargaSewa' => $HargaSewa,
    //             'Status' => $Status,
    //             'Gambar' => $Gambar,
    //             'kode_type' => $kode_type,
    //         );

    //         $where = array(
    //             'id_alat_musik_jasa' => $id_alat_musik_jasa
    //         );

    //         $this->model_alat_musik->update_data('alatmusikjasa', $data, $where);
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         Data Type Berhasil Diupdate!.
    //         <button type="butoon" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //         </div>');
    //         redirect('admin/data_property_music');
    //     }
    // }

    public function _rules()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Brand', 'Merk', 'required');
        $this->form_validation->set_rules('HargaSewa', 'Price Rent', 'required');
        $this->form_validation->set_rules('Status', 'Status', 'required');
        // $this->form_validation->set_rules('Gambar', 'Gambar', 'required');
    }

    public function detail_property($id)
    {
        $data['detail'] = $this->model_alat_musik->ambil_id($id);
        // $data['back_to_transaction'] = $this->input->post('back-to-transaction');

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_property', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_property($id)
    {
        $where = array('id_alat_musik_jasa' => $id);
        $this->model_alat_musik->delete_property($where, 'alatmusikjasa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Alat Musik Berhasil Dihapus!.
        <button type="butoon" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('admin/data_property_music');
    }
}
