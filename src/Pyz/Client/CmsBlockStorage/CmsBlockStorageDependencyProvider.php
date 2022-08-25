<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\CmsBlockStorage;

use Spryker\Client\CmsBlockCategoryStorage\Plugin\CmsBlockStorage\CmsBlockCategoryCmsBlockStorageReaderPlugin;
use Spryker\Client\CmsBlockProductStorage\Plugin\CmsBlockStorage\CmsBlockProductCmsBlockStorageReaderPlugin;
use Spryker\Client\CmsBlockStorage\CmsBlockStorageDependencyProvider as SprykerCmsBlockStorageDependencyProvider;

class CmsBlockStorageDependencyProvider extends SprykerCmsBlockStorageDependencyProvider
{
    /**
     * @return array
     */
    protected function getCmsBlockStorageReaderPlugins(): array
    {
        return array_merge(parent::getCmsBlockStorageReaderPlugins(), [
            new CmsBlockCategoryCmsBlockStorageReaderPlugin(),
            new CmsBlockProductCmsBlockStorageReaderPlugin(),
        ]);
    }
}