<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rpelatihan_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'bidang_pelatihan',
            'label' => 'Bidang_pelatihan',
            'rules' => 'required'],

            ['field' => 'tahun_pelatihan',
            'label' => 'Tahun_pelatihan',
            'rules' => 'required']
           

        ];
    }

    public function getAll()
    {
        return $this->db->get('rpelatihan')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('rpelatihan', ["id_rpelatihan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rpelatihan = uniqid();
        $this->bidang_pelatihan         = $post["bidang_pelatihan"];
        $this->tahun_pelatihan         = $post["tahun_pelatihan"];
        $this->sertifikat     = $this->_uploadImage();
        $this->db->insert('rpelatihan', $this);
    }
    
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->bidang_pelatihan         = $post["bidang_pelatihan"];
        $this->tahun_pelatihan         = $post["tahun_pelatihan"];
        $this->sertifikat     = $this->_uploadImage();
        $this->db->update('rpelatihan', $this, array('id_rpelatihan' => $post['id']));        
    }
        
    

    public function delete($id)
    {
        return $this->db->delete('rpelatihan', array("id_rpelatihan" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './assets/img/sertifikat/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->id_rpelatihan;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('sertifikat')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";

}
}