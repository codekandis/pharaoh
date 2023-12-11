<?php declare( strict_types = 1 );

namespace CodeKandis\Pharaoh\Build;

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use function dirname;
use function sprintf;

/**
 * Sets up the rector configuration.
 * @param RectorConfig $rectorConfig The config to set up.
 */
$setupRectorConfiguration = static function ( RectorConfig $rectorConfig ): void
{
	$rectorConfig->phpVersion( PhpVersion::PHP_82 );

	$rectorConfig->sets(
		[
			LevelSetList::UP_TO_PHP_82,
			SetList::CODE_QUALITY,
			SetList::CODING_STYLE,
			SetList::DEAD_CODE,
			SetList::EARLY_RETURN,
			SetList::GMAGICK_TO_IMAGICK,
			SetList::INSTANCEOF,
			SetList::NAMING,
			SetList::PRIVATIZATION,
			SetList::STRICT_BOOLEANS,
			SetList::TYPE_DECLARATION
		]
	);

	$rectorConfig->paths(
		[
			sprintf(
				'%s/src',
				dirname( __DIR__, 1 )
			)
		]
	);
};

return $setupRectorConfiguration;
