<?php
class Memento {
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}
class Originator {
    private $state;

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function saveToMemento() {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento) {
        $this->state = $memento->getState();
    }
}
class Caretaker {
    private $mementos = [];

    public function addMemento(Memento $memento) {
        $this->mementos[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }
}
// Create an instance of the Originator
$originator = new Originator();

// Set the initial state
$originator->setState("State 1");

// Create a Caretaker to manage the Mementos
$caretaker = new Caretaker();

// Save the current state to a Memento
$caretaker->addMemento($originator->saveToMemento());

// Modify the state
$originator->setState("State 2");

// Save the current state to another Memento
$caretaker->addMemento($originator->saveToMemento());

// Restore the previous state from a Memento
$originator->restoreFromMemento($caretaker->getMemento(0));

echo $originator->getState(); // Output: State 1