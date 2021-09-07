<?php

/**
 * Always return true upon the preemptive HTTP request filter,
 * as we are working on localhost.
 *
 * @author Michael Bryan Sumner <75835774+michael-sumner@users.noreply.github.com>
 * @return bool true
 */

add_filter( 'pre_http_request', '__return_true', PHP_INT_MAX + 1 );
