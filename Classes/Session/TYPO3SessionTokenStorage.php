<?php

namespace CedricZiel\SymfonyForms\Session;

use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class TYPO3SessionTokenStorage implements TokenStorageInterface
{
    /**
     * Reads a stored CSRF token.
     *
     * @param string $tokenId The token ID
     *
     * @return string The stored token
     *
     * @throws \Symfony\Component\Security\Csrf\Exception\TokenNotFoundException If the token ID does not exist
     */
    public function getToken($tokenId)
    {
        // TODO: Implement getToken() method.
    }

    /**
     * Stores a CSRF token.
     *
     * @param string $tokenId The token ID
     * @param string $token The CSRF token
     */
    public function setToken($tokenId, $token)
    {
        // TODO: Implement setToken() method.
    }

    /**
     * Removes a CSRF token.
     *
     * @param string $tokenId The token ID
     *
     * @return string|null Returns the removed token if one existed, NULL
     *                     otherwise
     */
    public function removeToken($tokenId)
    {
        // TODO: Implement removeToken() method.
    }

    /**
     * Checks whether a token with the given token ID exists.
     *
     * @param string $tokenId The token ID
     *
     * @return bool Whether a token exists with the given ID
     */
    public function hasToken($tokenId)
    {
        // TODO: Implement hasToken() method.
    }
}