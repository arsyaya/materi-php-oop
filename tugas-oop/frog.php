<?php 
class Frog {
    public $name;
    public $legs;
    public $cold_blooded;
    public $jump;

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_legs($legs) {
        $this->legs = $legs;
    }
    function get_legs() {
        return $this->legs;
    }

    function set_cold_blooded($cold_blooded) {
        $this->cold_blooded = $cold_blooded;
    }
    function get_cold_blooded() {
        return $this->cold_blooded;
    }

    function set_jump($jump) {
        $this->jump = $jump;
    }
    function get_jump() {
        return $this->jump;
    }
}

$kodok = new Frog;
    $kodok->set_name('Buduk');
    $kodok->set_legs('4');
    $kodok->set_cold_blooded('No');
    $kodok->set_jump('Hop hop');

    echo "Name : " . $kodok->get_name();
    echo "<br>";
    echo "Legs : " . $kodok->get_legs();
    echo "<br>";
    echo "Cold Blooded : " . $kodok->get_cold_blooded();
    echo "<br>";
    echo "Jump : " . $kodok->get_jump();
    echo "<br>";

?>