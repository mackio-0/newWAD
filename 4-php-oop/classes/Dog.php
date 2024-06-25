<?php

class Dog extends Animal {
    public function makeSound()
    {
        return "woof woof";
    }

    public function bite() {
        return "Dogs bite";
    }
}