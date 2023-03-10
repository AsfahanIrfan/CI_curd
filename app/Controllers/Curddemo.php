<?php 
namespace App\Controllers;
use App\Models\UserModel;
// use CodeIgniter\Controller;
class Cruddemo extends BaseController
{
    // show users list
    public function index(){

        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        
        return view('user_view', $data);
    }
        
}