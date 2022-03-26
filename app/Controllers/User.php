<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        return view('user/index', $data);
    }

    public function inbox()
    {
        $data['title'] = 'Kotak Masuk';
        return view('user/inbox', $data);
    }

    public function history()
    {
        // $regis = $this->regismodel->findAll();
        $data = [
            'title' => 'Riwayat dan Tiket Vaksin',
        ];

        $this->builder->select('users.id as userid, username, email, fullname, sertif_vaksin, periode_vaksin , nama_lengkap, NIK, jenis_kelamin, tanggal_lahir, no_telepon, alamat, tanggal_vaksin, jenis_vaksin, tanggal_vaksin_kedua ,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('registration', 'registration.NIK = users.NIK_user');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['regis'] = $query->getResult();
        return view('user/history', $data);
    }

    public function sertifikat()
    {
        $data['title'] = 'Sertifikat Vaksin';

        $this->builder->select('users.id as userid, username, email, fullname, sertif_vaksin, periode_vaksin , nama_lengkap, NIK, jenis_kelamin, tanggal_lahir, no_telepon, alamat, tanggal_vaksin, jenis_vaksin ,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('registration', 'registration.NIK = users.NIK_user');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['regis'] = $query->getResult();
        return view('user/sertifikat', $data);
    }
}
