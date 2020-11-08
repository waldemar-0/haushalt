<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gegenstand
 *
 * @ORM\Table(name="gegenstand", indexes={@ORM\Index(name="fk_Gegenstand_GegenstandsTyp_idx", columns={"typ_id"})})
 * @ORM\Entity
 */
class Gegenstand
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var \Gegenstandstyp
     *
     * @ORM\ManyToOne(targetEntity="Gegenstandstyp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typ_id", referencedColumnName="id")
     * })
     */
    private $typ;


}
