<?php

trait HasMaterial {

    protected $material;
    
    /**
     * setMaterial
     *
     * @param  string $material
     */
    public function setMaterial($material) {
        $this->material = $material;
    }

    public function getMaterial() {
        return $this->material;
    }

}