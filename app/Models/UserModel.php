<?php 
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name','mobile','email'];

    public function getdata(){

    $builder = $this->db->table('users');
    $query   = $builder->get();
    return $query->getResult();

    }
    public function psdata(){

        $builder = $this->db->table('users');
        $query   = $builder->get();
        return $query->getResult();
        
        }
}
?>