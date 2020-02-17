<?php
/**
 * Part of Arcsecond package
 *
 * Implementation of Config repository
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel;


class Config implements ConfigInterface
{
    /**
     * API key
     *
     * @var string
     */
    public $apiKey;

    /**
     * API base URL
     *
     * @var string
     */
    public $apiUrl;

    /**
     * Config constructor
     *
     * return void
     */
    public function __construct() {
        $this->setApiKey(getenv('ARCSECOND_API_KEY'));
        $this->setApiUrl(getenv('ARCSECOND_API_URL'));
    }

    /**
     * {@inheritdoc}
     */
    public function getApiKey() {
        return $this->apiKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiUrl($apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUrl() {
        return $this->apiUrl;
    }

}
