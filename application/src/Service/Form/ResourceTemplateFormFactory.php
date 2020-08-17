<?php
namespace Omeka\Service\Form;

use Interop\Container\ContainerInterface;
use Omeka\Form\ResourceTemplateForm;
use Zend\ServiceManager\Factory\FactoryInterface;

class ResourceTemplateFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $form = new ResourceTemplateForm(null, $options);
        $form->setEventManager($services->get('EventManager'));
        return $form;
    }
}