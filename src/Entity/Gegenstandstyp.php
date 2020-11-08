<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gegenstandstyp
 *
 * @ORM\Table(name="gegenstandsTyp", indexes={@ORM\Index(name="fk_gegenstandsTyp_gegenstandsTyp1_idx", columns={"parent_id"})})
 * @ORM\Entity
 */
class Gegenstandstyp
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
     * @ORM\Column(name="typ", type="string", length=45, nullable=true)
     */
    private $typ;

    /**
     * @var \Gegenstandstyp
     *
     * @ORM\ManyToOne(targetEntity="Gegenstandstyp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}
