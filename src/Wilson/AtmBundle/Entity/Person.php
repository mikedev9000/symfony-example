<?php

namespace Wilson\AtmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wilson\AtmBundle\Entity\PersonRepository")
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameLast", type="string", length=255)
     */
    private $nameLast;

    /**
     * @var string
     *
     * @ORM\Column(name="nameFirst", type="string", length=255)
     */
    private $nameFirst;

    /**
     * @var string
     *
     * @ORM\Column(name="nameMiddle", type="string", length=255)
     */
    private $nameMiddle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="datetime")
     */
    private $dateOfBirth;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameLast
     *
     * @param string $nameLast
     * @return Person
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;
    
        return $this;
    }

    /**
     * Get nameLast
     *
     * @return string 
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * Set nameFirst
     *
     * @param string $nameFirst
     * @return Person
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;
    
        return $this;
    }

    /**
     * Get nameFirst
     *
     * @return string 
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * Set nameMiddle
     *
     * @param string $nameMiddle
     * @return Person
     */
    public function setNameMiddle($nameMiddle)
    {
        $this->nameMiddle = $nameMiddle;
    
        return $this;
    }

    /**
     * Get nameMiddle
     *
     * @return string 
     */
    public function getNameMiddle()
    {
        return $this->nameMiddle;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return Person
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
}
