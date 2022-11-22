<?php

declare(strict_types=1);

namespace CraftPlugins\ReadingTime;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig_Extension;
use function CraftPlugins\ReadingTime\readingTime;

class ReadingTimeTwigExtension extends AbstractExtension
{
	/**
	 * Get Name
	 *
	 * @return string
	 */
	public function getName()
	{
		return 'ReadingTimeTwigExtension';
	}

	/**
	 * Get Functions
	 *
	 * @return array
	 */
	public function getFunctions()
	{
		return [
			new TwigFunction('readingTime', fn(string $content, array $options = []) => readingTime($content, $options)),
		];
	}
}