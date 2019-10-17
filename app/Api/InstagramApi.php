<?php

namespace App\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class InstagramApi
{
    /**
     * @var \GuzzleHttp\Client
     */
    private static $client;

    /**
     * Initialize the http client
     *
     * @param string $host
     * @param int $port
     */

    public static function Init()
    {
        InstagramApi::$client = new Client(
            [
                'base_uri' => env('INSTAGRAM_API'),
            ]
        );
        \Log::info('ClientAPI init');
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Get($uri, $options = [])
    {
        sprintf('[GET] %s', $uri);

        return InstagramApi::$client->get($uri, $options);
    }

    /**
     * @param $uri
     * @param $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Post($uri, $options)
    {
        sprintf('[POST] %s', $uri);
        return InstagramApi::$client->post($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Put($uri, $options = [])
    {
        sprintf('[PUT] %s', $uri);
        return InstagramApi::$client->put($uri, $options);
    }

    /**
     * @return APIResponse
     */
    public static function getImages($tags): APIResponse
    {
        $res = new APIResponse;
        try {
            $response = InstagramApi::Get($tags.'/?__a=1');
            $res->SetPayloadJSON($response->getBody()->getContents());
        } catch (\Exception $exception) {
            $res->SetErrorReason($exception->getMessage());
        }
        return $res;
    }




}
