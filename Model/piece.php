<?php
class piece
{
    private  $id;
    private  $nom;
    private  $description;
    private  $duree;
    private  $photo;
    private  $type;

    public function __construct($id=null, $nom=null,$description=null, $duree = null, $photo = null,$type = null)
    {
        $this->id= $id;
        $this->nom= $nom;
        $this->description= $description;
        $this->duree= $duree;
        $this->photo= $photo;
        $this->type= $type;

    }
  /*  public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>identifiant</td>
                <td> Nom</td>
                <td>description</td>
                <td>duree</td>
                <td>photo </td>
                <td>type </td>
            </tr>
            <tr>
                <td>'. $this->id .'</td>
                <td>'. $this->nom .'</td>
                <td>'. $this->description .'</td>
                <td>'. $this->duree .'</td>
                <td>'. $this->photo .'</td>
                <td>'. $this->type .'</td>

            </tr>
        </table>';
    }*/
    public function getid()
    {
        return $this->id;
    }

    /**
     *
     * @return  self
     */ 
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     */ 
    public function getnom()
    {
        return $this->nom;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     */ 
    public function getdescription()
    {
        return $this->description;
    }

    /**
     *
     * @return  self
     */ 
    public function setdescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     */ 
    public function getduree()
    {
        return $this->duree;
    }

    /**
     *
     * @return  self
     */ 
    public function setduree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     */ 
    public function getphoto()
    {
        return $this->photo;
    }

    /**
     *
     * @return  self
     */ 
    public function setphoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     */ 
    public function gettype()
    {
        return $this->type;
    }

    /**
     *
     * @return  self
     */ 
    public function settype($type)
    {
        $this->type = $type;

        return $this;
    }

}

?>