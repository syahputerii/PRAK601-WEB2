<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('register', $data);
    }

    public function store()
    {
        $data = $this->request->getPost(['username', 'email', 'password']);

        if (! $this->validate([
            'username' => 'required|min_length[5]|max_length[20]|is_unique[user.username]',
            'email'    => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[8]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $save = $this->model->save($data);

        if ($save) {
            session()->setFlashdata('success', 'Register Berhasil!');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back()->withInput();
        }
    }
}