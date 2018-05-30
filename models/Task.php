<?php
/**
 * Task.php
 */
class Task
{
    public $description;

    public $complete;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function isComplete()
    {
        return $this->complete;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $complete
     *
     * @return self
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }
}