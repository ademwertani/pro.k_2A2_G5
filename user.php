<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 31/03/2018
 * Time: 23:24
 */

class User
{

    private $id;
    
    private $password;
private $nom;
    /**
     * User constructor.
     * @param $id
     * @param $password
     * @param $nom
    
     */
    public function __construct($id,$password, $nom)
    {
        $this->id = $id;
        $this->password = $password;
        $this->nom = $nom;
        
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    
}

?>