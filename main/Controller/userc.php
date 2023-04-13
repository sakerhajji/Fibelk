<?php
include '../config.php';
include '../Model/user.php';

class Userc
{
    public function addUser($user) {
        $db = config::getConnexion();
        try {
           $req = $db->prepare('INSERT INTO account (nom , 	prenom , email ,date , 	pass ) VALUES (:nom, :prenom , :addresse , :dates, :pass )');
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
        $sql = "SELECT * FROM account";
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
       $query = $db->prepare('DELETE FROM account where idAC = :id');
       $query->execute([ 'id' => $id]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
}  
}
public function getUser($id)
{
    $db = config::getConnexion();
    try{
      
       $req = $db->prepare('SELECT * FROM account where idAC = :id');
       $req->execute([
        'id' => $id
    ]);
    $row = $req->fetch(PDO::FETCH_ASSOC);
    $user = new User();
    $user->nom = $row['nom'];
    $user->prenom = $row['prenom'];
    $user->email = $row['email'];
    $user->date = $row['date'];
    $user->pass = $row['pass'];
    return $user;

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function UpdateUser($id, $user)
{
    $db = config::getConnexion();
    try {
       $query = $db->prepare('UPDATE account SET nom =:nom , prenom = :prenom , email = :addresse , date = :dates , pass = :pass where idAC = :id');
       $query->execute([ 'id' => $id,
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
}
?>
