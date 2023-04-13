<?php
class theatre
{
    private  $id;
    private  $nom;
    private  $description;
    private  $capacite;
    private  $photo;
    private  $adresse;
    private  $temp_o;
    private  $temp_f;


    
  
    public function __construct($id=null, $nom=null,$description=null, $capacite = null, $photo = null,$adresse = null,$temp_o = null,$temp_f = null)
    {
        $this->id= $id;
        $this->nom= $nom;
        $this->description= $description;
        $this->capacite= $capacite;
        $this->photo= $photo;
        $this->adresse= $adresse;
        $this->temp_o= $temp_o;
        $this->temp_f= $temp_f;


    }
    public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>identifiant</td>
                <td> Nom theatre</td>
                <td>description</td>
                <td>capacite</td>
                <td>photo </td>
                <td>adresse </td>
                <td>temp_ouverture </td>
                <td>temp_fermeture </td>

            </tr>
            <tr>
                <td>'. $this->id .'</td>
                <td>'. $this->nom .'</td>
                <td>'. $this->description .'</td>
                <td>'. $this->capacite .'</td>
                <td>'. $this->photo .'</td>
                <td>'. $this->adresse .'</td>
                <td>'. $this->temp_o .'</td>
                <td>'. $this->temp_f .'</td>


            </tr>
        </table>';
    }
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

}

?>