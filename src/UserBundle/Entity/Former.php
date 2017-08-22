<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="former")
 * @UniqueEntity(fields = "username", targetClass = "UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "UserBundle\Entity\User", message="fos_user.email.already_used")
 * @UniqueEntity(fields = "CIN", targetClass = "UserBundle\Entity\User", message="fos_user.CIN.already_used")
 * @UniqueEntity(fields = "phone", targetClass = "UserBundle\Entity\User", message="fos_user.phone.already_used")
 */
class Former extends User
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
     * @Assert\NotBlank(message="Please enter your job.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The job is too short.",
     *     maxMessage="The job is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $job;

    public function getJob(){
        return $this->job;
    }
    public function setJob($job){
        $this->job=$job;
        return $this;
    }
}