<?php

namespace CedricZiel\SymfonyForms\ViewHelpers\Format;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithContentArgumentAndRenderStatic;

class UppercaseViewHelper extends AbstractViewHelper
{
    use CompileWithContentArgumentAndRenderStatic;

    /**
     * {@inheritdoc}
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('subject', 'string', 'String to uppercase', false, null);
    }

    /**
     * {@inheritdoc}
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {

        return strtoupper($renderChildrenClosure());
    }
}