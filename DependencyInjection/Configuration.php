<?php

namespace Klesk\SliderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder
			->root('klesk_slider')
				->children()
					->scalarNode('effect')
						->defaultValue('random')
						->info('Transition effect')
						->example('rain, random, ...')
					->end()
					->scalarNode('prev')
						->defaultValue('Prev')
						->info('Text link to previous image. HTML in enable')
						->example('Previous image')
					->end()
					->scalarNode('next')
						->defaultValue('next')
						->info('Text link to next image. HTML in enable')
						->example('Next image')
					->end()
					->scalarNode('resize')
						->defaultValue('none')
						->info('Resize the image, using gregwar image bundle')
						->example('force, resize, crop, scale or none')
					->end()
					->scalarNode('imagepath')
						->defaultValue('news/images/')
						->info('path of the iamge to slide. don\'t forget traillin slash' )
						->example('news/images/')
					->end()

					->integerNode('width')
						->defaultValue(565)
						->info('Width of the slidere')
						->example(500)
					->end()
					->integerNode('height')
						->defaultValue(290)
						->info('Height of the slider')
						->example(200)
					->end()
					->integerNode('square_per_width')
						->defaultValue(7)
						->max(25)
						->min(3)
						->info('squares per width')
						->example(14)
					->end()
					->integerNode('square_per_height')
						->defaultValue(5)
						->max(25)
						->min(3)
						->info('delay between images in ms')
						->example(1000)
					->end()
					->integerNode('delay')
						->min(500)
						->defaultValue(3000)
						->info('squares per height')
						->example(10)
					->end()
			->end()
		;

		// Here you should define the parameters that are allowed to
		// configure your bundle. See the documentation linked above for
		// more information on that topic.

		return $treeBuilder;
	}
}
