<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Pyz\Zed\Customer;

use SprykerFeature\Zed\CustomerMailConnector\Communication\Plugin\PasswordRestoredConfirmationSender;
use SprykerFeature\Zed\CustomerMailConnector\Communication\Plugin\PasswordRestoreTokenSender;
use SprykerFeature\Zed\CustomerMailConnector\Communication\Plugin\RegistrationTokenSender;
use SprykerEngine\Zed\Kernel\Container;
use SprykerFeature\Zed\Customer\CustomerDependencyProvider as SprykerCustomerDependencyProvider;

class CustomerDependencyProvider extends SprykerCustomerDependencyProvider
{

    /**
     * @param Container $container
     *
     * @return mixed[]
     */
    protected function getSenderPlugins(Container $container)
    {
        return [
            SprykerCustomerDependencyProvider::REGISTRATION_TOKEN_SENDERS => [
                new RegistrationTokenSender(),
            ],
            SprykerCustomerDependencyProvider::PASSWORD_RESTORE_TOKEN_SENDERS => [
                new PasswordRestoreTokenSender(),
            ],
            SprykerCustomerDependencyProvider::PASSWORD_RESTORED_CONFIRMATION_SENDERS => [
                new PasswordRestoredConfirmationSender(),
            ],
        ];
    }

}
