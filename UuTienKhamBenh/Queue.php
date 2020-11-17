<?php

class Element
{
    public $value;
    public $next;
}

class Queue
{
    private $font = null;
    private $back = null;


    public function isEmpty()
    {
        return $this->font == null;
    }
    function sortByOrder($a, $b) {
        return $a[1] - $b[1];
    }


    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = [$name, $code];
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }


    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}