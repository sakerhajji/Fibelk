<?php 
class User
{
    private $NomUser;
    private $PrenomUser;
    private $MailUser;
    private $DateUser;
    private $MotdepassUser;
    private $RoleUser;


    public function __construct($ln=null, $fn=null,$MailUser=null, $ad = null, $MotdepassUser = null , $RoleUser=null)
    {
        $this->NomUser= $ln;
        $this->PrenomUser= $fn;
        $this->MailUser= $MailUser;
        $this->DateUser= $ad;
        $this->MotdepassUser= $MotdepassUser;
        $this->RoleUser=$RoleUser ; 
    }

    

    /**
     * Get the value of NomUser
     */ 
    public function getNomUser()
    {
        return $this->NomUser;
    }

    /**
     * Set the value of NomUser
     *
     * @return  self
     */ 
    public function setNomUser($NomUser)
    {
        $this->NomUser = $NomUser;

        return $this;
    }

    /**
     * Get the value of PrenomUser
     */ 
    public function getPrenomUser()
    {
        return $this->PrenomUser;
    }

    /**
     * Set the value of PrenomUser
     *
     * @return  self
     */ 
    public function setPrenomUser($PrenomUser)
    {
        $this->PrenomUser = $PrenomUser;

        return $this;
    }

    /**
     * Get the value of MailUser
     */ 
    public function getMailUser()
    {
        return $this->MailUser;
    }

    /**
     * Set the value of MailUser
     *
     * @return  self
     */ 
    public function setMailUser($MailUser)
    {
        $this->MailUser = $MailUser;

        return $this;
    }

    /**
     * Get the value of MotdepassUser
     */ 
    public function getMotdepassUser()
    {
        return $this->MotdepassUser;
    }

    /**
     * Set the value of MotdepassUser
     *
     * @return  self
     */ 
    public function setMotdepassUser($MotdepassUser)
    {
        $this->MotdepassUser = $MotdepassUser;

        return $this;
    }

    /**
     * Get the value of DateUser
     */ 
    public function getDateUser()
    {
        return $this->DateUser;
    }

    /**
     * Set the value of DateUser
     *
     * @return  self
     */ 
    public function setDateUser($DateUser)
    {
        $this->DateUser = $DateUser;

        return $this;
    }

    /**
     * Get the value of MotdepassUser
     */ 
    public function getMotdepass ()
    {
        return $this->MotdepassUser;
    }

    /**
     * Set the value of MotdepassUser
     *
     * @return  self
     */ 
    public function setMotdepass($MotdepassUser)
    {
        $this->MotdepassUser = $MotdepassUser;

        return $this;
    }
      /**
     * Get the value of RoleUser
     */
    public function getRoleUser()
    {
        return $this->RoleUser;
    }

    /**
     * Set the value of RoleUser
     *
     * @return  self
     */
    public function setRoleUser($RoleUser)
    {
        $this->RoleUser = $RoleUser;

        return $this;
    }
}
?>
