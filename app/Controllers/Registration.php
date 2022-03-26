<?php

namespace App\Controllers;

use App\Models\Regismodel;

class Registration extends BaseController
{
    protected $regismodel, $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function user()
    {

        $regis = $this->regismodel->findAll();

        $data = [
            'title' => 'Beranda',
            'regis' => $regis
        ];

        return view('auth/beranda', $data);
    }


    public function daftar()
    {
        // session();
        // $regis = $this->regismodel->findAll();
        $data =
            [
                'title' => 'Form Registrasi Vaksin',
                'validation' => \Config\Services::validation(),
                // 'regis' => $regis
            ];
        // dd($regis);

        return view('auth/daftarvaksin', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'NIK' => 'required|is_unique[registration.NIK]',
            'no_telepon' => 'required|is_unique[registration.no_telepon]'

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/registration/daftar')->withInput()->with('validation', $validation);
        }

        $this->regismodel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'NIK' => $this->request->getVar('NIK'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal_vaksin' => $this->request->getVar('tanggal_vaksin'),
            'jenis_vaksin' => $this->request->getVar('jenis_vaksin'),
            'periode_vaksin' => $this->request->getVar('periode_vaksin')

        ]);

        session()->setFlashdata('message', 'Pendaftaran Vaksin berhasil dilakukan.');

        return redirect()->to('/registration/daftar');
    }

    public function daftar_vaksindua()
    {
        // session();
        // $regis = $this->regismodel->findAll();
        $data =
            [
                'title' => 'Form Registrasi Vaksin Kedua',
                // 'validation' => \Config\Services::validation(),
                // 'regis' => $regis
            ];
        // dd($regis);

        $this->builder->select('users.id as userid, username, email, fullname, sertif_vaksin, periode_vaksin , nama_lengkap, NIK, jenis_kelamin, tanggal_lahir, no_telepon, alamat, tanggal_vaksin, jenis_vaksin, tanggal_vaksin_kedua ,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('registration', 'registration.NIK = users.NIK_user');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['regis'] = $query->getResult();

        return view('auth/daftarvaksin2', $data);
    }

    public function savedua()
    {
        if (!$this->validate([
            'tanggal_vaksin_kedua' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/registration/daftar_vaksindua')->withInput()->with('validation', $validation);
        }

        $this->regismodel->save([
            'periode_vaksin' => $this->request->getVar('periode_vaksin'),
            'tanggal_vaksin' => $this->request->getVar('tanggal_vaksin_kedua')
        ]);

        session()->setFlashdata('message', 'Pendaftaran Vaksin Kedua berhasil dilakukan.');

        return redirect()->to('/registration/daftar_vaksindua');
    }
}
