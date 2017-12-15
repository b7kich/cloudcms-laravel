<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys - User
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project)  
    |
    */
    'username' => env('CC_USERNAME', ''),
    'password' => env('CC_PASSWORD', ''),


    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys - Client
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project) 
    |
    */

    'clientKey'     => env('CC_CLIENT_KEY', ''),
    'clientSecret'  => env('CC_CLIENT_SECRET', ''),


    /*
    |--------------------------------------------------------------------------
    | Cloud CMS Settings
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project) 
    |
    */    
    'redirectUri'   => env('CC_REPOSITORY_ID', ''),
    'deploymentUrl' => env('CC_DEPLOYMENT_URL', ''),
    'repositoryId'  => env('CC_REDIRECT_URI', ''),
    'branch'        => env('CC_BRANCH', ''),


    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API base URL 
    |--------------------------------------------------------------------------
    |
    | The base url of Cloud CMS API  (urlResourceOwnerDetails)
    |
    */
    'baseUrl'  => env('CC_BASE_URL','https://api.cloudcms.com'),

    /*
    |--------------------------------------------------------------------------
    | Token Storage path
    |--------------------------------------------------------------------------
    |
    | This is the path to the file where the token and the expiration date/time
    | are saved. It is renewed when the token expires, thus we do not have to
    | request the token for every request. If you do not set any path, the
    | default is set to /storage/token and the name of the file is token
    |
    */  
    'tokenStoragePath'   => env('CC_TOKEN_STORAGE_PATH', ''),

   
);
