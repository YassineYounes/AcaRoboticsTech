<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="admin")
 * @UniqueEntity(fields = "username", targetClass = "UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "UserBundle\Entity\User", message="fos_user.email.already_used")
 * @UniqueEntity(fields = "CIN", targetClass = "UserBundle\Entity\User", message="fos_user.CIN.already_used")
 * @UniqueEntity(fields = "phone", targetClass = "UserBundle\Entity\User", message="fos_user.phone.already_used")
 */
class Admin extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}