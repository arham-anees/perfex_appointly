<?php defined('BASEPATH') or exit('No direct script access allowed');
    
    $CI =& get_instance(); // Assuming you're in a CodeIgniter context

    // Remove custom route
    $route = "\n\$route['(:any)'] = 'custom_scheduler/schedule/\$1';\n";
    $routesPath = APPPATH . 'config/routes.php';

    // Read the current routes file content
    $routesContent = file_get_contents($routesPath);

    // Remove the custom route from the routes file
    $updatedRoutesContent = str_replace($route, '', $routesContent);

    // Write the updated content back to the routes file
    file_put_contents($routesPath, $updatedRoutesContent, LOCK_EX);

    

    $CI->db->query("
        ALTER TABLE " . db_prefix() . "appointly_appointments
        DROP COLUMN status_id"
    );

    // Execute the ALTER TABLE statement to drop the foreign key constraint
    $CI->db->query("
    ALTER TABLE " . db_prefix() . "appointly_appointments
    DROP FOREIGN KEY `fk_status_id`
    ");