<?php

namespace Krdinesh\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\QueryBuilderTrait;

class GreenHouse extends AbstractProvider {

    use BearerAuthorizationTrait;
    use QueryBuilderTrait;

    public function getBaseAuthorizationUrl(){
        return "https://api.greenhouse.io/oauth/authorize";
    }

    public function getBaseAccessTokenUrl(array $params){
        return "https://api.greenhouse.io/oauth/token";
    }

    protected function getScopeSeparator(){
        return '+';
    }

    protected function buildQueryString(array $params)
    {
        return urldecode(http_build_query($params, null, '&', \PHP_QUERY_RFC3986));
    }

    protected function getDefaultScopes()
    {
        return ['candidates.view','candidates.create','jobs.view'];
    }

    protected function checkResponse(ResponseInterface $response, $data)
    {
        // check Response of GreenHouse Integration

    }
     /**
     * Returns the URL for requesting the resource owner's details.
     *
     * @param AccessToken $token
     * @return string
     */

     public function getResourceOwnerDetailsUrl(AccessToken $token){

     }

    /**
     * Generates a resource owner object from a successful resource owner
     * details request.
     *
     * @param  array $response
     * @param  AccessToken $token
     * @return ResourceOwnerInterface
     */
     protected function createResourceOwner(array $response, AccessToken $token){

     }
}