<?php
/*  
 *
 *   Interface with 3 methods:
 *   - storeObject
 *   - removeObject
 *   - getObject
 */
    interface iStorage {
        public function storeObject($key, $object);
        public function removeObject($key);
        public function getObject($key);
    }
