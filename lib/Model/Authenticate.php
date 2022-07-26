<?php
/**
 * Authenticate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JiwaAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Jiwa\JiwaModel;

use \ArrayAccess;
use \Jiwa\ObjectSerializer;

/**
 * Authenticate Class Doc Comment
 *
 * @category Class
 * @description Authenticate
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Authenticate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Authenticate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'provider' => 'string',
        'state' => 'string',
        'oauth_token' => 'string',
        'oauth_verifier' => 'string',
        'user_name' => 'string',
        'password' => 'string',
        'remember_me' => 'bool',
        'continue' => 'string',
        'nonce' => 'string',
        'uri' => 'string',
        'response' => 'string',
        'qop' => 'string',
        'nc' => 'string',
        'cnonce' => 'string',
        'use_token_cookie' => 'bool',
        'access_token' => 'string',
        'access_token_secret' => 'string',
        'meta' => '\Jiwa\JiwaModel\DictionaryStringString_'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'provider' => null,
        'state' => null,
        'oauth_token' => null,
        'oauth_verifier' => null,
        'user_name' => null,
        'password' => null,
        'remember_me' => null,
        'continue' => null,
        'nonce' => null,
        'uri' => null,
        'response' => null,
        'qop' => null,
        'nc' => null,
        'cnonce' => null,
        'use_token_cookie' => null,
        'access_token' => null,
        'access_token_secret' => null,
        'meta' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'provider' => 'provider',
        'state' => 'State',
        'oauth_token' => 'oauth_token',
        'oauth_verifier' => 'oauth_verifier',
        'user_name' => 'UserName',
        'password' => 'Password',
        'remember_me' => 'RememberMe',
        'continue' => 'Continue',
        'nonce' => 'nonce',
        'uri' => 'uri',
        'response' => 'response',
        'qop' => 'qop',
        'nc' => 'nc',
        'cnonce' => 'cnonce',
        'use_token_cookie' => 'UseTokenCookie',
        'access_token' => 'AccessToken',
        'access_token_secret' => 'AccessTokenSecret',
        'meta' => 'Meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provider' => 'setProvider',
        'state' => 'setState',
        'oauth_token' => 'setOauthToken',
        'oauth_verifier' => 'setOauthVerifier',
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'remember_me' => 'setRememberMe',
        'continue' => 'setContinue',
        'nonce' => 'setNonce',
        'uri' => 'setUri',
        'response' => 'setResponse',
        'qop' => 'setQop',
        'nc' => 'setNc',
        'cnonce' => 'setCnonce',
        'use_token_cookie' => 'setUseTokenCookie',
        'access_token' => 'setAccessToken',
        'access_token_secret' => 'setAccessTokenSecret',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provider' => 'getProvider',
        'state' => 'getState',
        'oauth_token' => 'getOauthToken',
        'oauth_verifier' => 'getOauthVerifier',
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'remember_me' => 'getRememberMe',
        'continue' => 'getContinue',
        'nonce' => 'getNonce',
        'uri' => 'getUri',
        'response' => 'getResponse',
        'qop' => 'getQop',
        'nc' => 'getNc',
        'cnonce' => 'getCnonce',
        'use_token_cookie' => 'getUseTokenCookie',
        'access_token' => 'getAccessToken',
        'access_token_secret' => 'getAccessTokenSecret',
        'meta' => 'getMeta'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['oauth_token'] = isset($data['oauth_token']) ? $data['oauth_token'] : null;
        $this->container['oauth_verifier'] = isset($data['oauth_verifier']) ? $data['oauth_verifier'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['remember_me'] = isset($data['remember_me']) ? $data['remember_me'] : null;
        $this->container['continue'] = isset($data['continue']) ? $data['continue'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['qop'] = isset($data['qop']) ? $data['qop'] : null;
        $this->container['nc'] = isset($data['nc']) ? $data['nc'] : null;
        $this->container['cnonce'] = isset($data['cnonce']) ? $data['cnonce'] : null;
        $this->container['use_token_cookie'] = isset($data['use_token_cookie']) ? $data['use_token_cookie'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['access_token_secret'] = isset($data['access_token_secret']) ? $data['access_token_secret'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets oauth_token
     *
     * @return string
     */
    public function getOauthToken()
    {
        return $this->container['oauth_token'];
    }

    /**
     * Sets oauth_token
     *
     * @param string $oauth_token oauth_token
     *
     * @return $this
     */
    public function setOauthToken($oauth_token)
    {
        $this->container['oauth_token'] = $oauth_token;

        return $this;
    }

    /**
     * Gets oauth_verifier
     *
     * @return string
     */
    public function getOauthVerifier()
    {
        return $this->container['oauth_verifier'];
    }

    /**
     * Sets oauth_verifier
     *
     * @param string $oauth_verifier oauth_verifier
     *
     * @return $this
     */
    public function setOauthVerifier($oauth_verifier)
    {
        $this->container['oauth_verifier'] = $oauth_verifier;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets remember_me
     *
     * @return bool
     */
    public function getRememberMe()
    {
        return $this->container['remember_me'];
    }

    /**
     * Sets remember_me
     *
     * @param bool $remember_me remember_me
     *
     * @return $this
     */
    public function setRememberMe($remember_me)
    {
        $this->container['remember_me'] = $remember_me;

        return $this;
    }

    /**
     * Gets continue
     *
     * @return string
     */
    public function getContinue()
    {
        return $this->container['continue'];
    }

    /**
     * Sets continue
     *
     * @param string $continue continue
     *
     * @return $this
     */
    public function setContinue($continue)
    {
        $this->container['continue'] = $continue;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce nonce
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets qop
     *
     * @return string
     */
    public function getQop()
    {
        return $this->container['qop'];
    }

    /**
     * Sets qop
     *
     * @param string $qop qop
     *
     * @return $this
     */
    public function setQop($qop)
    {
        $this->container['qop'] = $qop;

        return $this;
    }

    /**
     * Gets nc
     *
     * @return string
     */
    public function getNc()
    {
        return $this->container['nc'];
    }

    /**
     * Sets nc
     *
     * @param string $nc nc
     *
     * @return $this
     */
    public function setNc($nc)
    {
        $this->container['nc'] = $nc;

        return $this;
    }

    /**
     * Gets cnonce
     *
     * @return string
     */
    public function getCnonce()
    {
        return $this->container['cnonce'];
    }

    /**
     * Sets cnonce
     *
     * @param string $cnonce cnonce
     *
     * @return $this
     */
    public function setCnonce($cnonce)
    {
        $this->container['cnonce'] = $cnonce;

        return $this;
    }

    /**
     * Gets use_token_cookie
     *
     * @return bool
     */
    public function getUseTokenCookie()
    {
        return $this->container['use_token_cookie'];
    }

    /**
     * Sets use_token_cookie
     *
     * @param bool $use_token_cookie use_token_cookie
     *
     * @return $this
     */
    public function setUseTokenCookie($use_token_cookie)
    {
        $this->container['use_token_cookie'] = $use_token_cookie;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token access_token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets access_token_secret
     *
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return $this->container['access_token_secret'];
    }

    /**
     * Sets access_token_secret
     *
     * @param string $access_token_secret access_token_secret
     *
     * @return $this
     */
    public function setAccessTokenSecret($access_token_secret)
    {
        $this->container['access_token_secret'] = $access_token_secret;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \Jiwa\JiwaModel\DictionaryStringString_
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Jiwa\JiwaModel\DictionaryStringString_ $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

