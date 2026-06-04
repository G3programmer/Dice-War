<?php
class Player {
    private  $name;
    private  $class;

    public function __construct(string $name, string $class) {
        $this->name = $name;
        $this->class = $class;
    }

}