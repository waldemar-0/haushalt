<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gegenstandsbilder
 *
 * @ORM\Table(name="gegenstandsBilder", indexes={@ORM\Index(name="fk_GegenstandsBilder_Gegenstand1_idx", columns={"gegenstand_id"})})
 * @ORM\Entity
 */
class Gegenstandsbilder
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
     * @ORM\Column(name="pfad", type="string", length=45, nullable=true)
     */
    private $pfad;

    /**
     * @var \Gegenstand
     *
     * @ORM\ManyToOne(targetEntity="Gegenstand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gegenstand_id", referencedColumnName="id")
     * })
     */
    private $gegenstand;


}
