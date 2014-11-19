<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

//require_once('config.php');
require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');

require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );
require_once( 'Facebook/Entities/AccessToken.php' );
require_once( 'Facebook/Entities/SignedRequest.php' );

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

class Facebook {
var $helper;
var $session;

public function __construct() {
    $this->ci =& get_instance();
    $this->permissions = $this->ci->config->item('permissions', 'facebook');
    // init app with app id (APPID) and secret (SECRET)
    FacebookSession::setDefaultApplication($this->ci->config->item('api_id', 'facebook'), $this->ci->config->item('app_secret', 'facebook') );

    // login helper with redirect_uri
    $this->helper = new FacebookRedirectLoginHelper($this->ci->config->item('redirect_url', 'facebook') );

    try {
        $this->session = $this->helper->getSessionFromRedirect();
    } 
    catch( FacebookRequestException $ex ) {
        // When Facebook returns an error
    } 
    catch( Exception $ex ) {
        // When validation fails or other local issues
    }

}

/**
* Returns the login URL.
*/
public function login_url() {
    return $this->helper->getLoginUrl($this->permissions);
}

/**
* Returns the current user's info as an array.
*/
public function get_user() {
    if ( $this->session ) {
        /**
        * Retrieve User’s Profile Information
        */
        // Graph API to request user data
        $request = ( new FacebookRequest( $this->session, 'GET', '/me' ) );
        $response = $request->execute();

        // Get response as an array
        $user = $response->getGraphObject();
	$user = $user->asArray();
	$user['profile_pic'] = '//graph.facebook.com/'.$user['id'].'/picture';
        return $user;
    }
    return false;
}
}