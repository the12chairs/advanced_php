<?php
    

    require_once("../task1/class.php");

    class OnlyOne {

        // Vars
        private static $flag = 0;
        private static $storage = null;


        // Static method



        public static function createTheOne() {
            if(self::$flag == 0){
                self::$storage = new Storage();
                self::$flag++; // Will work anywaiy
            }
            return self::$storage; // else is needless;
        }

    }

    var_dump(OnlyOne::createTheOne());
    var_dump(OnlyOne::createTheOne());

?>
