<?php
class realiser
{
    private  $id_e;
    private  $id_t;
    private  $date;
    private  $heure_d;
    private  $prix;
  
    public function __construct($id_e=null, $id_t=null,$date=null, $heure_d = null, $prix = null)
    {
        $this->id_e= $id_e;
        $this->id_t= $id_t;
        $this->date= $date;
        $this->heure_d= $heure_d;
        $this->prix= $prix;

    }
  
    public function getid_e()
    {
        return $this->id_e;
    }

    /**
     *
     * @return  self
     */ 
    public function setid_e($id_e)
    {
        $this->id_e = $id_e;

        return $this;
    }

    /**
     */ 
    public function getid_t()
    {
        return $this->id_t;
    }

    /**
     *
     * @return  self
     */ 
    public function setid_t($id_t)
    {
        $this->id_t = $id_t;

        return $this;
    }

    /**
     */ 
    public function getdate()
    {
        return $this->date;
    }

    /**
     *
     * @return  self
     */ 
    public function setdate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     */ 
    public function getheure_d()
    {
        return $this->heure_d;
    }

    /**
     *
     * @return  self
     */ 
    public function setheure_d($heure_d)
    {
        $this->heure_d = $heure_d;

        return $this;
    }

    /**
     */ 
    public function getprix()
    {
        return $this->prix;
    }

    /**
     *
     * @return  self
     */ 
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

}

?>