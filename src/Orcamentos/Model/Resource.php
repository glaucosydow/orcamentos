<?php
namespace Orcamentos\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Resource")
 */
class Resource
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var datetime
     */
    protected $updated;

    /**
     * @ORM\Column(type="string", length=150)
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     *
     * @var float
     */
    private $cost;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="resourceCollection", cascade={"persist", "merge", "refresh"})
     * 
     * @var Company
     */
    protected $company;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="resourceCollection", cascade={"persist", "merge", "refresh"})
     * 
     * @var Type
     */
    protected $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var integer
     */
    private $equipmentLife;

    public function getEquipmentLife()
    {
        return $this->equipmentLife;
    }
    
    public function setEquipmentLife($equipmentLife)
    {
        return $this->equipmentLife = $equipmentLife;
    }
    
    public function __construct()
    {
        $this->setCreated(date('Y-m-d H:i:s'));
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        return $this->name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    
    public function getCost()
    {
        return $this->cost;
    }
    
    public function setCost($cost)
    {
        return $this->cost = $cost;
    }
        
    public function getCompany()
    {
        return $this->company;
    }
    
    public function setCompany($company)
    {
        return $this->company = $company;
    }
    
    public function getPrivateNotes()
    {
        return $this->privateNotes;
    }
    
    public function setPrivateNotes($privateNotes)
    {
        return $this->privateNotes = $privateNotes;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        return $this->description = $description;
    }
    
      public function getClientNotes()
    {
        return $this->clientNotes;
    }
    
    public function setClientNotes($clientNotes)
    {
        return $this->clientNotes = $clientNotes;
    }

    public function getTags()
    {
        return $this->tags;
    }
    
    public function setTags($tags)
    {
        return $this->tags = $tags;
    }

    public function getType()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        return $this->type = $type;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getCreated()
    {
        return $this->created->format('Y-m-d H:i:s');
    }
    
    public function setCreated($created)
    {
        $this->created = \DateTime::createFromFormat('Y-m-d H:i:s', $created);    
    }

    public function getUpdated()
    {
        return $this->updated;
    }
    
    public function setUpdated($updated)
    {
        $this->updated = \DateTime::createFromFormat('Y-m-d H:i:s', $updated);
    }

}
