<?php

namespace CedricZiel\SymfonyForms\Controller;

use CedricZiel\SymfonyForms\ProvidesFormsTrait;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExampleFormController extends ActionController
{
    use ProvidesFormsTrait;

    public function initializeFormAction()
    {
    }

    /**
     * Displays a simple example form.
     */
    public function formAction()
    {
        $form = $this->createFormBuilder()
            ->add('test')
            ->getForm();

        // $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {

            // do something

            return;
        }

        $this->view->assign('form', $form->createView());
    }
}