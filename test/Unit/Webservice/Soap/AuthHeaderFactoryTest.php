<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\AuthHeaderFactory;
use PHPUnit\Framework\TestCase;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class AuthHeaderFactoryTest extends TestCase
{
    /**
     * We cannot test auth header internals / validate whether the auth header
     * was initialized correctly.
     *
     * @test
     */
    public function wsseNamespacesAreAvailable()
    {
        self::assertIsString(AuthHeaderFactory::WSS_NS);
        self::assertIsString(AuthHeaderFactory::WSU_NS);
    }
}
