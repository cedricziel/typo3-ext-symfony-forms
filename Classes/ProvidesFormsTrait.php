<?php

namespace CedricZiel\SymfonyForms;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

trait ProvidesFormsTrait
{
    /**
     * Creates and returns a Form instance from the type of the form.
     *
     * @param string $type The fully qualified class name of the form type
     * @param mixed $data The initial data for the form
     * @param array $options Options for the form
     *
     * @return FormInterface
     */
    protected function createForm($type, $data = null, array $options = [])
    {
        return FormFactoryFactory::createFactory()
            ->create($type, $data, $options);
    }

    /**
     * Creates and returns a form builder instance.
     *
     * @param mixed $data The initial data for the form
     * @param array $options Options for the form
     *
     * @return FormBuilderInterface
     */
    protected function createFormBuilder($data = null, array $options = [])
    {
        return FormFactoryFactory::createFactory()
            ->createBuilder(FormType::class, $data, $options);
    }
}