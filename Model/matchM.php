<?php
class matchM
{
    private  $id_M;
    private  $nom_M;
    private  $nom_equipe1;
    private  $nom_equipe2;
    private  $duree_P;
    private  $type_P;
    private  $description;
    private  $image_P;

    public function __construct($id_M=null, $nom_M=null,$nom_equipe1=null, $nom_equipe2 = null, $duree_P = null,$type_P = null , $description=null ,$image_P=null)
    {
        $this->id_M= $id_M;
        $this->nom_M= $nom_M;
        $this->nom_equipe1= $nom_equipe1;
        $this->nom_equipe2= $nom_equipe2;
        $this->duree_P= $duree_P;
        $this->type_P= $type_P;
        $this->description= $description;
        $this->image_P= $image_P;


    }
  /*  public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>identifiant</td>
                <td> nom_M</td>
                <td>description</td>
                <td>duree</td>
                <td>photo </td>
                <td>type </td>
            </tr>
            <tr>
                <td>'. $this->id_M .'</td>
                <td>'. $this->nom_M .'</td>
                <td>'. $this->description .'</td>
                <td>'. $this->duree .'</td>
                <td>'. $this->photo .'</td>
                <td>'. $this->type .'</td>

            </tr>
        </table>';
    }*/
    public function getid_M()
    {
        return $this->id_M;
    }

    /**
     *
     * @return  self
     */ 
    public function setid_M($id_M)
    {
        $this->id_M = $id_M;

        return $this;
    }

    /**
     */ 
    public function getnom_M()
    {
        return $this->nom_M;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom_M($nom_M)
    {
        $this->nom_M = $nom_M;

        return $this;
    }

    /**
     */ 
    public function getnom_equipe1()
    {
        return $this->nom_equipe1;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom_equipe1($nom_equipe1)
    {
        $this->nom_equipe1 = $nom_equipe1;

        return $this;
    }

    /**
     */ 
    public function getnom_equipe2()
    {
        return $this->nom_equipe2;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom_equipe2($nom_equipe2)
    {
        $this->nom_equipe2 = $nom_equipe2;

        return $this;
    }

    /**
     */ 
    public function getduree_P()
    {
        return $this->duree_P;
    }

    /**
     *
     * @return  self
     */ 
    public function setduree_P($duree_P)
    {
        $this->duree_P = $duree_P;

        return $this;
    }

    /**
     */ 
    public function gettype_P()
    {
        return $this->type_P;
    }

    /**
     *
     * @return  self
     */ 
    public function settype_P($type_P)
    {
        $this->type_P = $type_P;

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
    public function getimage_P()
    {
        return $this->image_P;
    }

    /**
     *
     * @return  self
     */ 
    public function setimage_P($image_P)
    {
        $this->image_P = $image_P;

        return $this;
    }

}

?>