<?php defined('BASEPATH') OR exit('No direct script access allowed');

class wp_model extends CI_Model
{
    private $_table = "wp_1";

    public $wp_id;
    public $uraian;
    public $lokasi;
    public $area_ker;
    public $manager;
    public $pengawas;
    public $k3;
    public $app;
    public $tgl_skrng;
    public $tgl_mulai;
    public $tgl_selesai;
    public $jam_mulai;
    public $jam_selesai;
    public $pemohon;

    public function rules()
    {
        return [

            ['field' => 'uraian',
            'label' => 'uraian',
            'rules' => 'required'],
            
            ['field' => 'lokasi',
            'label' => 'lokasi',
            'rules' => 'required'],

            ['field' => 'area_ker',
            'label' => 'area_ker',
            'rules' => 'required'],

            ['field' => 'manager',
            'label' => 'manager',
            'rules' => 'required'],
            
            ['field' => 'pengawas',
            'label' => 'pengawas',
            'rules' => 'required'],

            ['field' => 'K3',
            'label' => 'K3',
            'rules' => 'required'],

            ['field' => 'app',
            'label' => 'app',
            'rules' => 'required'],
            
            ['field' => 'tgl_skrng',
            'label' => 'tgl_skrng',
            'rules' => 'required'],

            ['field' => 'tgl_mulai',
            'label' => 'tgl_mulai',
            'rules' => 'required'],

            ['field' => 'tgl_selesai',
            'label' => 'tgl_selesai',
            'rules' => 'required'],
            
            ['field' => 'jam_mulai',
            'label' => 'jam_mulai',
            'rules' => 'required'],

            ['field' => 'jam_selesai',
            'label' => 'jam_selesai',
            'rules' => 'required'],

            ['field' => 'pemohon',
            'label' => 'pemohon',
            'rules' => 'required']
    
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["wp_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->wp_id = uniqid();
        $this->uraian = $post["uraian_pekerjaan"];
        $this->lokasi = $post["lokasi"];
        $this->area_kerja = $post["area_kerja"];
        $this->manager = $post["manager"];
        $this->pengawas = $post["pengawas"];
        $this->k3 = $post["k3"];
        $this->app = $post["app"];
        $this->tgl_skrng = $post["tgl_skrng"];
        $this->tgl_mulai = $post["tgl_mulai"];
        $this->tgl_selesai = $post["tgl_selesai"];
        $this->jam_mulai = $post["jam_mulai"];
        $this->jam_selesai = $post["jam_selesai"];
        $this->pemohon = $post["pemohon"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->wp_id = uniqid();
        $this->uraian = $post["uraian_pekerjaan"];
        $this->lokasi = $post["lokasi"];
        $this->area_kerja = $post["area_kerja"];
        $this->manager = $post["manager"];
        $this->pengawas = $post["pengawas"];
        $this->k3 = $post["k3"];
        $this->app = $post["app"];
        $this->tgl_skrng = $post["tgl_skrng"];
        $this->tgl_mulai = $post["tgl_mulai"];
        $this->tgl_selesai = $post["tgl_selesai"];
        $this->jam_mulai = $post["jam_mulai"];
        $this->jam_selesai = $post["jam_selesai"];
        $this->pemohon = $post["pemohon"];
        $this->db->update($this->_table, $this, array('wp_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("wp_id" => $id));
    }
}