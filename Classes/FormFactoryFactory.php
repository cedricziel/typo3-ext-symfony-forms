<?php

namespace CedricZiel\SymfonyForms;

use CedricZiel\SymfonyForms\Session\TYPO3SessionTokenStorage;
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;

class FormFactoryFactory
{
    public static function createFactory()
    {
        $csrfGenerator = new UriSafeTokenGenerator();
        $csrfStorage = new TYPO3SessionTokenStorage();
        $csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);

        return Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->addExtension(new CsrfExtension($csrfManager))
            ->getFormFactory();
    }
}