<?php

/**
 * This file is included by "spock" command. You'll find
 *
 * $this Instance of spock command console
 * $path Destination path
 *
 * You'll able to:
 *
 * Delete a file
 *   @unlink("{$path}/myfile");
 *
 * Delete a folder
 *   $this->deleteDirectory("{$path}/docs");
 *
 */

/**
 * Filter the list of files and folders to skip during the deploy.
 *
 * @param array $array The files and folders are relative to the root of theme.
 */
add_filter('wpspock_console_deploy_skip', function($skip){
    return array_merge($skip,[
        '/docs'
    ]);
});