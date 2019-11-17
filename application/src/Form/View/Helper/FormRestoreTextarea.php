<?php
namespace Omeka\Form\View\Helper;

use Laminas\Form\View\Helper\FormTextarea;
use Laminas\Form\ElementInterface;

class FormRestoreTextarea extends FormTextarea
{
    public function render(ElementInterface $element)
    {
        $view = $this->getView();
        $view->headScript()
            ->appendFile($view->assetUrl('js/restore-textarea.js', 'Omeka'), 'text/javascript', ['defer' => 'defer']);
        return sprintf(
            '<div>%s<button type="button" class="restore-textarea" data-restore-value="%s">%s</button></div>',
            parent::render($element),
            $view->escapeHtml($element->getRestoreValue()),
            $view->escapeHtml($view->translate($element->getRestoreButtonText()))
        );
    }
}
