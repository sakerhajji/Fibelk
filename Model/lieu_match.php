<?php
class lieu_match
{
    private  $id_LM;
    private  $nom_LM;
    private  $adresse;
    private  $temp_o;
    private  $temp_f;
    private  $capacite;
    private  $image_T;
    private  $description;

    public function __construct($id_LM=null, $nom_LM=null,$adresse=null, $temp_o = null, $temp_f = null,$capacite = null , $image_T=null ,$description=null)
    {
        $this->id_LM= $id_LM;
        $this->nom_LM= $nom_LM;
        $this->adresse= $adresse;
        $this->temp_o= $temp_o;
        $this->temp_f= $temp_f;
        $this->capacite= $capacite;
        $this->image_T= $image_T;
        $this->description= $description;


    }
  /*  public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>identifiant</td>
                <td> nom_LM</td>
                <td>description</td>
                <td>duree</td>
                <td>photo </td>
                <td>type </td>
            </tr>
            <tr>
                <td>'. $this->id_LM .'</td>
                <td>'. $this->nom_LM .'</td>
                <td>'. $this->description .'</td>
                <td>'. $this->duree .'</td>
                <td>'. $this->photo .'</td>
                <td>'. $this->type .'</td>

            </tr>
        </table>';
    }*/
    public function getid_LM()
    {
        return $this->id_LM;
    }

    /**
     *
     * @return  self
     */ 
    public function setid_LM($id_LM)
    {
        $this->id_LM = $id_LM;

        return $this;
    }

    /**
     */ 
    public function getnom_LM()
    {
        return $this->nom_LM;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom_LM($nom_LM)
    {
        $this->nom_LM = $nom_LM;

        return $this;
    }

    /**
     */ 
    public function getadresse()
    {
        return $this->adresse;
    }

    /**
     *
     * @return  self
     */ 
    public function setadresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     */ 
    public function gettemp_o()
    {
        return $this->temp_o;
    }

    /**
     *
     * @return  self
     */ 
    public function settemp_o($temp_o)
    {
        $this->temp_o = $temp_o;

        return $this;
    }

    /**
     */ 
    public function gettemp_f()
    {
        return $this->temp_f;
    }

    /**
     *
     * @return  self
     */ 
    public function settemp_f($temp_f)
    {
        $this->temp_f = $temp_f;

        return $this;
    }

    /**
     */ 
    public function getcapacite()
    {
        return $this->capacite;
    }

    /**
     *
     * @return  self
     */ 
    public function setcapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }
        /**
     */ 
    public function getimage_T()
    {
        return $this->image_T;
    }

    /**
     *
     * @return  self
     */ 
    public function setimage_T($image_T)
    {
        $this->image_T = $image_T;

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

}

?>