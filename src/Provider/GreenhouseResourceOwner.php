<?php

namespace Krdinesh\OAuth2\Client\Provider;

use League\OAuth2\Client\Tool\ArrayAccessorTrait;

/**
 * @property array $response
 * @property string $uid
 */
class GreenhouseResourceOwner {

    use ArrayAccessorTrait;

    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array()) {
        $this->response = $response;
    }

    /**
     * Get user email
     *
     * @return string|null
     */
    public function getEmail() {
        return $this->getValueByKey($this->response, 'email');
    }

    /**
     * Get user firstname
     *
     * @return string|null
     */
    public function getFirstName() {
        return $this->getValueByKey($this->response, 'first_name');
    }

    /**
     * Get user lastname
     *
     * @return string|null
     */
    public function getLastName() {
        return $this->getValueByKey($this->response, 'last_name');
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray() {
        return $this->response;
    }

}
