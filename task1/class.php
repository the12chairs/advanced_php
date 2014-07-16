<?php
    require_once("interface.php");

    class Storage implements iStorage {
        
        // Arguments
        private $storage;
        
        
        // Methods

        public function __construct() {
            $this->storage = array();
        }
        // simple setter
        public function storeObject($key, $object) {
            $this->storage[$key] = $object; // Add it
        }
        
        // Unset element by key

        public function removeObject($key) {
            unset($this->storage[$key]);
        }

        // Simple getter
        public function getObject($key) {
            if(!isset($this->storage[$key])){
                throw new Exception("Accessing unexisting element!\n");
            }
            return $this->storage[$key];
        }
    }

    $test = new Storage();
    $test->storeObject('foo', 'bar');;
    try {
        echo $test->getObject('foo'). "\n";;
        $test->getObject('bazz');
    } catch (Exception $e) {
        echo $e;
    }
    $test->removeObject('foo');

?>
