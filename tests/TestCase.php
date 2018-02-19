<?php

namespace Tests;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
	 * Return request headers needed to interact with the API.
	 *
	 * @return Array array of headers.
	 */
	protected function headers($user = null)
	{
	    $headers = ['Accept' => 'application/json'];

	    if (!is_null($user)) {
	        $token = JWTAuth::fromUser($user);
	        JWTAuth::setToken($token);
	        $headers['Authorization'] = 'Bearer '.$token;
	    }

	    return $headers;
	}
}
