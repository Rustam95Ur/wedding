<?php

namespace App\Api;

/**
 * Class APIResponse.
 * This class is responsible for handling messages that should be sent back
 * to other API classes. It encapsulates the return data and errors (if any)
 *
 * @package App\Negotium\Classes
 */
class APIResponse
{
    /**
     * Payload data of the response (if any)
     *
     * @var object
     */
    private $payload = null;

    /**
     * Headers that were received with the response
     *
     * @var array
     */
    private $responseHeasers = [];

    private $tempPayload = null;

    /**
     * Is this response positive or negative?
     *
     * @var boolean
     */
    private $successful = false;

    /**
     * If the response was not successful, this is the reason why
     *
     * @var string
     */
    private $errorReason = 'Not initialized';

    /**
     * Set the payload data. This automatically marks response as successful.
     *
     * @param $object
     */
    public function SetPayloadJSON($object)
    {
        $this->errorReason = null;
        $this->tempPayload = json_decode($object, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $this->successful  = true;
    }

    public function SetHeaders($headers)
    {
        $this->responseHeasers = $headers;
    }

    public function GetHeaders()
    {
        return $this->responseHeasers;
    }

    /**
     * Specifies if the response was successful or not
     *
     * @return boolean
     */
    public function IsSuccessful(): bool
    {
        if ($this->successful == false && !$this->tempPayload) {
            return false;
        }
        if ($this->tempPayload === false) {
            $this->errorReason = "Failed to coerce json to object";

            return false;
        }

        $this->payload    = $this->tempPayload;
        $this->successful = true;
        unset($this->tempPayload);
        unset($this->errorReason);

        return true;
    }

    /**
     * Get the payload data. If the payload data is null, an exception is thrown.
     *
     * @return object
     * @throws \Exception
     */
    public function GetPayload()
    {
        if ($this->successful == false) {
            throw new \Exception('You must call IsSuccessful() first!');
        }

        return $this->payload;
    }

    /**
     * Set the reason why the response was not successful
     *
     * @param string $reason
     */
    public function SetErrorReason($reason)
    {
        $this->payload     = null;
        $this->successful  = false;
        $this->errorReason = $reason;
    }

    /**
     * Get the reason why the response was not successful. throws an exception if response is successful.
     *
     * @return string
     * @throws \Exception
     */
    public function GetErrorReason()
    {
        if ($this->successful !== false) {
            throw new \Exception('You should only call GetErrorReason if IsSuccessful returned false!');
        }

        return $this->errorReason;
    }
}