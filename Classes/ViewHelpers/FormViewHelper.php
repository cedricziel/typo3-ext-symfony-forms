<?php

namespace CedricZiel\SymfonyForms\ViewHelpers;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

/**
 * Renders the form tag.
 */
class FormViewHelper extends AbstractTagBasedViewHelper
{
    /**
     * @var string
     */
    protected $tagName = 'form';

    /**
     * {@inheritdoc}
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('action', 'string', 'Target action');
        $this->registerArgument('arguments', 'array', 'Arguments', false, []);
        $this->registerArgument('controller', 'string', 'Target controller');
        $this->registerArgument('extensionName', 'string', 'Target Extension Name (without "tx_" prefix and no underscores). If NULL the current extension name is used');
        $this->registerArgument('pluginName', 'string', 'Target plugin. If empty, the current plugin name is used');
        $this->registerArgument('pageUid', 'int', 'Target page uid');
        $this->registerArgument('object', 'mixed', 'Object to use for the form. Use in conjunction with the "property" attribute on the sub tags');
        $this->registerArgument('pageType', 'int', 'Target page type', false, 0);
        $this->registerArgument('noCache', 'bool', 'set this to disable caching for the target page. You should not need this.', false, false);
        $this->registerArgument('noCacheHash', 'bool', 'set this to suppress the cHash query parameter created by TypoLink. You should not need this.', false, false);
        $this->registerArgument('section', 'string', 'The anchor to be added to the action URI (only active if $actionUri is not set)', false, '');
        $this->registerArgument('format', 'string', 'The requested format (e.g. ".html") of the target page (only active if $actionUri is not set)', false, '');
        $this->registerArgument('additionalParams', 'array', 'additional action URI query parameters that won\'t be prefixed like $arguments (overrule $arguments) (only active if $actionUri is not set)', false, []);
        $this->registerArgument('absolute', 'bool', 'If set, an absolute action URI is rendered (only active if $actionUri is not set)', false, false);
        $this->registerArgument('addQueryString', 'bool', 'If set, the current query parameters will be kept in the action URI (only active if $actionUri is not set)', false, false);
        $this->registerArgument('argumentsToBeExcludedFromQueryString', 'array', 'arguments to be removed from the action URI. Only active if $addQueryString = TRUE and $actionUri is not set', false, []);
        $this->registerArgument('addQueryStringMethod', 'string', 'Method to use when keeping query parameters (GET or POST, only active if $actionUri is not set', false, 'GET');
        $this->registerArgument('fieldNamePrefix', 'string', 'Prefix that will be added to all field names within this form. If not set the prefix will be tx_yourExtension_plugin');
        $this->registerArgument('actionUri', 'string', 'can be used to overwrite the "action" attribute of the form tag');
        $this->registerArgument('objectName', 'string', 'name of the object that is bound to this form. If this argument is not specified, the name attribute of this form is used to determine the FormObjectName');
        $this->registerArgument('hiddenFieldClassName', 'string', 'hiddenFieldClassName');

        /*
         * Symfony form part starts here
         */
        $this->registerArgument('form', 'object', 'The form instance', true);

        $this->registerTagAttribute('enctype', 'string', 'MIME type with which the form is submitted');
        $this->registerTagAttribute('method', 'string', 'Transfer type (GET or POST)');
        $this->registerTagAttribute('name', 'string', 'Name of form');
        $this->registerTagAttribute('onreset', 'string', 'JavaScript: On reset of the form');
        $this->registerTagAttribute('onsubmit', 'string', 'JavaScript: On submit of the form');
        $this->registerUniversalTagAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        /** @var FormView $form */
        $form = $this->arguments['form'];


        return $this->tag->render();
    }
}