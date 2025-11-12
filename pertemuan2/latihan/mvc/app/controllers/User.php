<?php
// Controller User
// Mengatur tampilan daftar user dan detail user
class User extends Controller
{
    // Method utama (default)
    public function index()
    {
        $data["judul"] = "Data user";
        // Memanggil model untuk mengambil semua data user
        $data['users'] = $this->model('User_model')->getAllUsers(); 
        // Memanggil view 'list' dan mengirimkan data
        $this->view('list', $data);
    }

    // Method untuk menampilkan detail user
    public function detail($id)
    {
        $data["judul"] = "Detail user"; 
        // Memanggil model untuk mengambil data user berdasarkan id
        $data['user'] = $this->model('User_model')->getUserById($id);
        // Memanggil view 'detail' dan mengirimkan data
        $this->view('detail', $data);
    }
}