<?php

include_once '../Model/user.php';
include_once "../Controller/lieu_concertC.php";

class Userc
{
    public function addUser($user) {
        $db = config::getConnexion();
        try {
           $req = $db->prepare('INSERT INTO user (nom , 	prenom , email ,date , 	pass ) VALUES (:nom, :prenom , :addresse , :dates, :pass )');
           $req->execute([
               'nom' => $user->getNomUser(),
               'prenom' => $user->getPrenomUser(),
               'addresse' => $user->getMailUser(),
               'dates' => $user->getDateUser(),
               'pass' => $user->getMotdepass()
               

           ]);

        } catch(Exception $e) {
           die('Error: ' . $e->getMessage());
        }
   }

    public function listusers()
    {
        $sql = "SELECT * FROM user where role='user'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    
}
public function listAdmin()
{
    $sql = "SELECT * FROM user where role='admin'";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }

}

public function DeleteUser($id) {
    $db = config::getConnexion();
    try {
       $query = $db->prepare('DELETE FROM user where idAC = :id');
       $query->execute([ 'id' => $id]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
}  
}
public function UpdateUser($id, $user)
{
    $db = config::getConnexion();
    try {
       $query = $db->prepare('UPDATE user SET nom =:nom , prenom = :prenom , email = :addresse , date = :dates , pass = :pass where idAC = :id');
       $query->execute([ 
        'id' => $id,
       'nom' => $user->getNomUser(),
       'prenom' => $user->getPrenomUser(),
       'addresse' => $user->getMailUser(),
       'dates' => $user->getDateUser(),
       'pass' => $user->getMotdepass()

    ]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
} 
}
public function AddAdmin($id , $role)
{ 
    $db = config::getConnexion();
    try {
       $query = $db->prepare('UPDATE user SET role =:role  where idAC = :id');
       $query->execute([ 
        'id' => $id,
       'role' =>$role
    

    ]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
} 
}


function getUserById($id)
    {
        echo("$id") ; 
        $sql = "SELECT * from user where idAC = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $User = $query->fetch();
            return $User;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


}
?>