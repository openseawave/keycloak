<?php

namespace OpenSeaWave\Keycloak\Exceptions;

use Exception;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

/**
 * KeycloakException class.
 *
 * This exception is thrown when an error occurs while interacting with the Keycloak API.
 *
 * @package OpenSeaWave\Keycloak
 * @author  Omar Haris
 */
class KeycloakException extends Exception
{
    /**
     * The HTTP response from Keycloak, if available.
     *
     * @var ResponseInterface|null
     */
    protected $response;

    /**
     * The HTTP status code from the Keycloak API.
     *
     * @var int|null
     */
    protected $statusCode;

    /**
     * KeycloakException constructor.
     *
     * @param string $message        The exception message.
     * @param int|null $statusCode   The HTTP status code from Keycloak, if available.
     * @param Exception|null $previous The previous exception.
     * @param ResponseInterface|null $response The HTTP response object, if available.
     */
    public function __construct(
        string $message = "",
        int $statusCode = null,
        Exception $previous = null,
        ResponseInterface $response = null
    ) {
        parent::__construct($message, $statusCode, $previous);
        $this->statusCode = $statusCode;
        $this->response = $response;
    }

    /**
     * Get the HTTP status code from Keycloak.
     *
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * Get the HTTP response object.
     *
     * @return ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get the body of the HTTP response as an associative array.
     *
     * @return array|null
     */
    public function getResponseBody(): ?array
    {
        if ($this->response) {
            $body = (string) $this->response->getBody();
            return json_decode($body, true);
        }
        return null;
    }

    /**
     * Static method to create an exception from a Guzzle RequestException.
     *
     * @param RequestException $exception
     * @return static
     */
    public static function fromRequestException(RequestException $exception): self
    {
        $response = $exception->getResponse();
        $statusCode = $response ? $response->getStatusCode() : null;
        $message = $response ? (string) $response->getBody() : $exception->getMessage();

        return new static($message, $statusCode, $exception, $response);
    }
}
