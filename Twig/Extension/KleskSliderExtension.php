<?php

namespace Klesk\SliderBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class KleskSliderExtension extends \Twig_Extension
{

    /**
	* Container
	*
	* @var ContainerInterface
	*/
    protected $container;

    /**
	* Initialize slider helper
	*
	* @param ContainerInterface $container
	*/
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
	* Gets a service.
	*
	* @param string $id The service identifier
	*
	* @return object The associated service
	*/
    public function getService($id)
    {
        return $this->container->get($id);
    }

    /**
     * Get parameters from the service container
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getParameter($name)
    {
        return $this->container->getParameter($name);
    }

    /**
	* Returns a list of functions to add to the existing list.
	*
	* @return array An array of functions
	*/
    public function getFunctions()
    {
        return array(
            'slider' => new \Twig_Function_Method($this, 'Slider', array('is_safe' => array('html'))),
            'slider_script' => new \Twig_Function_Method($this, 'Slider_Script', array('is_safe' => array('html'))),
        );
    }

    /**
	* slider initializations
	*
	* @return string
	*/

	public function Slider($entity)
	{
		// Get configuration
        $config  = $this->getParameter('klesk_slider.config');

		$em = $this->getService('doctrine.orm.entity_manager');
		$entities = $em->getRepository($entity)->findBy(
			array(),
			array($config['order']['by'] => $config['order']['sort']),
			$config['limit'],
			$config['offset']
		);

		return $this->getService('templating')->render('KleskSliderBundle:Slider:init.html.twig',array('entities' => $entities, 'config' => $config));
	}


    /**
	* slider assets
	*
	* @return string
	*/

	public function Slider_Script()
	{
		// Get configuration
        $config  = $this->getParameter('klesk_slider.config');

		return $this->getService('templating')->render('KleskSliderBundle:Slider:script.html.twig',array(
				'config' => $config
		));
	}


    /**
	* Returns the name of the extension.
	*
	* @return string The extension name
	*/
    public function getName()
    {
        return 'klesk_slider';
    }

}
