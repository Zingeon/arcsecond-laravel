<?php
/**
 * Part of Arcsecond package
 *
 * Configuration repository Interface
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel;


interface ConfigInterface
{
    /**
     * Get API key
     *
     * @return string
     */
    public function getApiKey();

    /**
     * Set API key
     *
     * @param string $apiKey
     * @return void
     */
    public function setApiKey($apiKey);

    /**
     * Get API base URL
     *
     * @return string
     */
    public function getApiUrl();

    /**
     * Set API base URL
     *
     * @param string $apiUrl
     * @return mixed
     */
    public function setApiUrl($apiUrl);
}
