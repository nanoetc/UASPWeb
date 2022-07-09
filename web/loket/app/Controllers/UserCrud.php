<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class UserCrud extends Controller
{
    public function index(){
      return view('index');}
    public function contact(){
        return view('contact');}
    public function about(){
          return view('about');}
    // show users list
    public function list(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
    // add user form
    public function create(){
        return view('add_user');
    }

    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'alamat'  => $this->request->getVar('alamat'),
            'keluhan'  => $this->request->getVar('keluhan'),
        ];
        $userModel->insert($data);
        return $this->response->redirect('/web/loket/public/users-list');
    }
    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_view', $data);
    }

    public function detail($id = null)
    {
      $userModel = new UserModel();
      $data['user_obj'] = $userModel->where('id', $id)->first();
      return view('detail_view', $data);
    }

    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
          'nama' => $this->request->getVar('nama'),
          'alamat'  => $this->request->getVar('alamat'),
          'keluhan'  => $this->request->getVar('keluhan'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect('/web/loket/public/users-list');
    }

    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect('/web/loket/public/users-list');
    }
}
