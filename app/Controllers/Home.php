<?php

namespace App\Controllers;
use App\Models\UserModel;
class Home extends BaseController
{
    public function listing()
    {
        $userModel = new UserModel();
       $response['data']= $userModel->findAll();
       return view("Views/firstPage",$response);
    }

    public function postform()
    {
        $userModel = new UserModel();
        $data = [
            'first_name'       => $this->request->getVar('first_name'),
            'last_name'        => $this->request->getVar('last_name'),
            'mobile'        => $this->request->getVar('mobile'),
            'email'        => $this->request->getVar('email'),
        ];
   
        $email = $this->request->getVar('email');
        $response['data']= $userModel->find($email);

    if($data == $email){
       
print_r($email);
die();
        $response->where($email)->update($data);       
        return $this->response->redirect(site_url('/listing'));
    }
    else{

        $userModel->insert($data);   
        return $this->response->redirect(site_url('/listing'));      
     
    }

         }
  
    public function getform($id=null)
    {
      if($id != null){
        $userModel = new UserModel();
        $response['data'] = $userModel->where('id', $id)->first();
        return view("Views/addValue",$response); 
        
    }
    else{
     
        return view("Views/addValue");
    }

       
       
      
      
    }
    public function delete($id)
    {
       
        $userModel = new UserModel();
        $response['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/listing'));
    }
}?>
