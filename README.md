# [WIP] Symfony Forms for TYPO3 CMS

## Usage

Create a controller, use the `ProvidesFormsTrait` -> profit.

```php
class FooController extends ActionController
{
    use ProvidesFormsTrait;
    
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

        // it's important to create a FormView from your definition!
        $this->view->assign('form', $form->createView());
    }
}
```

In your view, you only need to render the provided partial:

```xml
<f:render partial="Form/DivFormTheme.html" section="Form" arguments="{form: form}"/>
```

# License

GPLv2+