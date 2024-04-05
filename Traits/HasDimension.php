<?php

trait HasDimension  {

    protected $dimension;

    public function getDimension() {
        return $this->dimension;
    }
    
    /**
     * setdimension
     *
     * @param  string $dimension
     */
    public function setDimension($dimension) {
        $this->dimension = $dimension;
    }
}