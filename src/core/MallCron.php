<?php
/**
 * MALL_C.php
 */
// include_once(dirname(__FILE__) . '/Mallcore.php');
namespace oaworld\collect\core;

class Mallcron extends Mallcore {
    protected $b  = 'this var in Mallcron';

    public function __construct() {
        parent::__construct();

        echo '<br/> 2. mall_cron_loaded';
    }


    public function getMallCron() {
        echo "<br/> 5 . {$this->b}";
    }
}