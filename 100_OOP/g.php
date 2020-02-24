<?php

class b {
    public function a() {
        echo "55";
    }
}

class c extends b {
    public function x() {
        $this->a();
    }
}

$obj = new c();
$obj->x();

?>