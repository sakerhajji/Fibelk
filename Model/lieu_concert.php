<?php
class lieu_concert
{
    private  $id_LC;
    private  $nom_LC;
    private  $adresse;
    private  $temp_O_LC;
    private  $temp_F_LC;
    private  $capacite;
    private  $image;
    private  $description;

    public function __construct($id_LC=null, $nom_LC=null,$adresse=null, $temp_O_LC = null, $temp_F_LC = null,$capacite = null , $image=null ,$description=null)
    {
        $this->id_LC= $id_LC;
        $this->nom_LC= $nom_LC;
        $this->adresse= $adresse;
        $this->temp_O_LC= $temp_O_LC;
        $this->temp_F_LC= $temp_F_LC;
        $this->capacite= $capacite;
        $this->image= $image;
        $this->description= $description;


    }
  /*  public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>identifiant</td>
                <td> nom_LC</td>
                <td>description</td>
                <td>duree</td>
                <td>photo </td>
                <td>type </td>
            </tr>
            <tr>
                <td>'. $this->id .'</td>
                <td>'. $this->nom_LC .'</td>
                <td>'. $this->description .'</td>
                <td>'. $this->duree .'</td>
                <td>'. $this->photo .'</td>
                <td>'. $this->type .'</td>

            </tr>
        </table>';
    }*/
    public function getid_LC()
    {
        return $this->id_LC;
    }

    /**
     *
     * @return  self
     */ 
    public function setid_LC($id_LC)
    {
        $this->id_LC = $id_LC;

        return $this;
    }

    /**
     */ 
    public function getnom_LC()
    {
        return $this->nom_LC;
    }

    /**
     *
     * @return  self
     */ 
    public function setnom_LC($nom_LC)
    {
        $this->nom_LC = $nom_LC;

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
    public function gettemp_O_LC()
    {
        return $this->temp_O_LC;
    }

    /**
     *
     * @return  self
     */ 
    public function settemp_O_LC($temp_O_LC)
    {
        $this->temp_O_LC = $temp_O_LC;

        return $this;
    }

    /**
     */ 
    public function gettemp_F_LC()
    {
        return $this->temp_F_LC;
    }

    /**
     *
     * @return  self
     */ 
    public function settemp_F_LC($temp_F_LC)
    {
        $this->temp_F_LC = $temp_F_LC;

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
    public function getimage()
    {
        return $this->image;
    }

    /**
     *
     * @return  self
     */ 
    public function setimage($image)
    {
        $this->image = $image;

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