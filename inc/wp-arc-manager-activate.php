<?php
/**
 * @package wparcmanager
 */

 class WpARCManagerActivate
 {
    public static function activate() {
        flush_rewrite_rules();
    }
 }