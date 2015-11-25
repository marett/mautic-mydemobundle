<?php
// plugins/MyDemoBundle/Controller/DefaultController.php

namespace MauticPlugin\MyDemoBundle\Controller;

use Mautic\CoreBundle\Controller\FormController;

/**
 * Class DefaultController
 */
class DefaultController extends FormController
{

    /**
     * Generates the default view
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->delegateView(array(
            'contentTemplate' => 'MyDemoBundle:Default:index.html.php',
            'passthroughVars' => array(
                'activeLink'     => '#mydemo_index',
                'mauticContent'  => 'mydemo',
                'route'          => $this->generateUrl('mydemo_index')
            )
        ));
    }
}