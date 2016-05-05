<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weather")
 */
class Weather
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(name="temp", type="float")
     */
    protected $temp;
    /**
     * @ORM\Column(name="pressure", type="float")
     */
    protected $pressure;
    /**
     * @ORM\Column(name="hum", type="float")
     */
    protected $hum;
    /**
     * @ORM\Column(name="registed", type="datetime")
     */
    protected $registed;
    /**
     * @ORM\Column(name="deleted", type="datetime")
     */
    protected $deleted ;
 
    public function getId()
    {
        return $this->id;
    }
 
    public function getName()
    {
        return $this->name;
    }
 
    public function setName($name)
    {
        $this->name = $name;
    }
}
