<?php

namespace CedricZiel\SymfonyForms\ViewHelpers\Condition;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithContentArgumentAndRenderStatic;

class InArrayViewHelper extends AbstractViewHelper
{
    use CompileWithContentArgumentAndRenderStatic;

    protected $escapeChildren = false;
    protected $escapeOutput = false;

    /**
     * {@inheritdoc}
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('needle', 'mixed', 'Subject to find in the given array', true);
        $this->registerArgument('haystack', 'array', 'Haystack to find the given needle in', true);
    }

    /**
     * {@inheritdoc}
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $needle = $renderChildrenClosure();
        /** @var array $haystack */
        $haystack = $arguments['haystack'];

        return in_array($needle, $haystack, true);
    }
}