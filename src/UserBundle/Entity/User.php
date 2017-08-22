<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"admin" = "Admin","collegeStudent" = "CollegeStudent","former" = "Former","pro" = "Pro", "student" = "Student"})
 *
 */
abstract class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your first name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The  first name is too short.",
     *     maxMessage="The first name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your last name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The last name is too short.",
     *     maxMessage="The last name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=11)
     *
     * @Assert\NotBlank(message="Please enter your CIN.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max=8,
     *     minMessage="The CIN is too short.",
     *     maxMessage="The CIN is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $CIN;

    /**
     * @ORM\Column(type="string", length=11)
     *
     * @Assert\NotBlank(message="Please enter your phone number.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max=8,
     *     minMessage="The CIN is too short.",
     *     maxMessage="The CIN is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $phone;

    /**
     * @ORM\Column(type="date", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     */
    protected $birthDate;

    public function getBirthDate(){
        return $this->birthDate;
    }
    public function setBirthDate($birthDate){
        $this->birthDate=$birthDate;
        return $this;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName($firstName){
        $this->firstName=$firstName;
        return $this;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName=$lastName;
        return $this;
    }
    public function getCIN(){
        return $this->CIN;
    }
    public function setCIN($CIN){
        $this->CIN=$CIN;
        return $this;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone=$phone;
        return $this;
    }
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}