<?php

class StudentCollection implements Iterator {
    private array $students;

    private int $position = 0;

    public function __construct(array $students) {
        $this->students = $students;
        
    }
public function current() : mixed {
        return $this->students[$this->position];
    }

    public function key() : int {
        return $this->position;
    }

    public function next() : void {
        $this->position++;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function valid() : bool {
        return isset($this->students[$this->position]);
    
}
}

$col = new StudentCollection(["Petar","Mara","Ivana","Robert"]);
foreach($col as $student){
    echo "Student: ".$student;
    
}





?>