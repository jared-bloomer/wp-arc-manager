<?php
/**
 * Trigger this file on uninstall
 * 
 * @package wparcmanager
 */

 // Ensure this is called from Wordpress only
 if(!defined('WP_UNINSTALL_PLUGIN')) {
    die;
 }

 // Clear Database Stored Data

 // Access the DB via SQL
 global $wpdb;

 // Delete all entries from the wp_post table. 
 $wpdb->query("DELETE FROM wp_post WHERE post_type = 'arcmanager'");

 // Delete Metadata from wp_postmeta and wp_term_relationships tables
 $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_post)");
 $wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_post)");

