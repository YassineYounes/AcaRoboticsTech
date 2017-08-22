<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="pro")
 * @UniqueEntity(fields = "username", targetClass = "UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "UserBundle\Entity\User", message="fos_user.email.already_used")
 * @UniqueEntity(fields = "CIN", targetClass = "UserBundle\Entity\User", message="fos_user.CIN.already_used")
 * @UniqueEntity(fields = "phone", targetClass = "UserBundle\Entity\User", message="fos_user.phone.already_used")
 */
class Pro extends User
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
     * @Assert\NotBlank(message="Please enter your Company name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The  company name is too short.",
     *     maxMessage="The company name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $company;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your job.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The job name is too short.",
     *     maxMessage="The job name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $job;

    public function getCompany(){
        return $this->company;
    }
    public function setCompany($company){
        $this->company=$company;
        return $this;
    }
    public function getJob(){
        return $this->job;
    }
    public function setPhone($job){
        $this->job=$job;
        return $this;
    }
}