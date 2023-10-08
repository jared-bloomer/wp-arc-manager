<?php
/**
 * @package wparcmanager
 */

 class WpARCManagerDeactivate
 {
    public static function deactivate() {
        flush_rewrite_rules();
    }
 }