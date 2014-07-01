<?php

namespace AndyTruong\VCLang\Entity;

class DictionaryEntity extends LanguageAwareEntity
{

    /**
     * ID
     *
     * @var int
     */
    protected $id;

    /**
     * Name
     *
     * @var string
     */
    protected $name;

    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Object ID.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getter for name property.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter for description property.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for id property.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Setter for name property.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Setter for description property.
     *
     * @param type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
