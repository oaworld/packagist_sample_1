<?php
/**
 * SM.php 
 */
namespace oaworld\collect\core;

class Mallcore {
    protected $a = 'this var in Mallcore';

    public function __construct() {
        echo '<br/> 1. mall_core_loaded';
    }


    public function getMallCore() {
        echo "<br/> 4 . {$this->a}";
    }
}