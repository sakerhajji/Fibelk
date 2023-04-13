<?php
class lieu_concert
{
    private  $ID;
    private  $nom;
    private  $adresse;
    private  $temp_o;
    private  $temp_f;
    private  $capacite;
    private  $image;
    private  $description;

    public function __construct($ID=null, $nom=null,$adresse=null, $temp_o = null, $temp_f = null,$capacite = null , $image=null ,$description=null)
    {
        $this->ID= $ID;
        $this->nom= $nom;
        $this->adresse= $adresse;
        $this->temp_o= $temp_o;
        $this->temp_f= $temp_f;
        $this->capacite= $capacite;
        $this->image= $image;
        $this->description= $description;


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
    public function getID()
    {
        return $this->ID;
    }

    /**
     *
     * @return  self
     */ 
    public function setID($ID)
    {
        $this->ID = $ID;

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