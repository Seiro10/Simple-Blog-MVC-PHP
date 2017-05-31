<?php


namespace App\Model;


class AdminModel extends Model
{

public function getAll(){

    return $this->db->query('SELECT * FROM article');

}

public function trylogin($email,$password){

    $verif = $this->db->prepare('SELECT * FROM admins WHERE email = ? LIMIT 1', [$email], null , true);
    return password_verify($password ,$verif->password);
}

public function update($data){

 return $this->db->prepare("UPDATE article SET nom = :nom, contenu = :contenu, tag = :tag WHERE id = :id", $data);

}


public function delete($id){

    return $this->db->prepare('DELETE  FROM article WHERE id = ?',[$id]);

}

public function create($contenu){

return $this->db->prepare('INSERT INTO article (nom, contenu, tag) VALUES(:nom, :contenu, :tag)', $contenu);

}

}