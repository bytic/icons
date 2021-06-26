<?php

namespace ByTIC\Icons\Build;

use ByTIC\Icons\Collections\IconCollection;
use Symfony\Bundle\MakerBundle\FileManager;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\Util\AutoloaderUtil;
use Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder;
use Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class MakeIconCollection
 * @package ByTIC\Icons\Build
 */
class MakeIconCollection
{
    public static function build($data)
    {
        $data['aliases'] = is_array($data['aliases']) ? $data['aliases'] : [];
        $data['categories'] = is_array($data['categories']) ? $data['categories'] : [];

        $builder = new self($data);
        $builder->generate($data);
    }

    public function generate($data)
    {
        $root_dir = dirname(__DIR__);
        $autoloaderUtil = new AutoloaderUtil(new ComposerAutoloaderFinder($root_dir));

        $fs = new Filesystem();
        $fileManager = new FileManager($fs, $autoloaderUtil, new MakerFileLinkFormatter(null), $root_dir);

        $generator = new Generator($fileManager, 'ByTIC\Icons\\');
        $classNameDetails = $generator->createClassNameDetails($data['info']['class'], 'Dist');

        $className =  $classNameDetails->getFullName();
        $targetPath = $fileManager->absolutizePath($fileManager->getRelativePathForFutureClass($className));
        if (file_exists($targetPath)) {
            $fs->remove($targetPath);
        }

        $mockCollection = new IconCollection();
        $mockCollection->

        $generator->generateClass(
            $classNameDetails->getFullName(),
            __DIR__ . '/stubs/icon_collection.tpl.php',
            [
                'mockCollection' => $mockCollection,
                'rootPrefix' => $data['info']['rootPrefix'],
                'prefix' => $data['info']['prefix'],
                'aliases' => $data['aliases'],
                'categories' => $data['categories'],
            ]
        );

        $generator->writeChanges();
    }

}
