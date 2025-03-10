<?php
/**
 * Generate/Plugin command test.
 *
 * PHP version 7
 *
 * Copyright (C) Villanova University 2020.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  Tests
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:testing:unit_tests Wiki
 */
namespace VuFindTest\Command\Generate;

use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Tester\CommandTester;
use VuFindConsole\Command\Generate\PluginCommand;
use VuFindConsole\Generator\GeneratorTools;

/**
 * Generate/Plugin command test.
 *
 * @category VuFind
 * @package  Tests
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:testing:unit_tests Wiki
 */
class PluginCommandTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that missing parameters yield an error message.
     *
     * @return void
     */
    public function testWithoutParameters()
    {
        $this->expectException(
            \Symfony\Component\Console\Exception\RuntimeException::class
        );
        $this->expectExceptionMessage(
            'Not enough arguments (missing: "class_name").'
        );
        $command = new PluginCommand(
            $this->getMockGeneratorTools(),
            $this->getMockContainer()
        );
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);
    }

    /**
     * Test the simplest possible success case.
     *
     * @return void
     */
    public function testSuccessWithMinimalParameters()
    {
        $container = $this->getMockContainer();
        $tools = $this->getMockGeneratorTools(
            ['setOutputInterface', 'createPlugin']
        );
        $tools->expects($this->once())->method('setOutputInterface')
            ->will($this->returnValue($tools));
        $tools->expects($this->once())->method('createPlugin')
            ->with(
                $this->equalTo($container),
                $this->equalTo('Foo'),
                $this->equalTo(null)
            );
        $command = new PluginCommand($tools, $container);
        $commandTester = new CommandTester($command);
        $commandTester->execute(['class_name' => 'Foo']);
        $this->assertEquals(0, $commandTester->getStatusCode());
    }

    /**
     * Test the factory parameter.
     *
     * @return void
     */
    public function testSuccessWithFactoryParameter()
    {
        $container = $this->getMockContainer();
        $tools = $this->getMockGeneratorTools(
            ['setOutputInterface', 'createPlugin']
        );
        $tools->expects($this->once())->method('setOutputInterface')
            ->will($this->returnValue($tools));
        $tools->expects($this->once())->method('createPlugin')
            ->with(
                $this->equalTo($container),
                $this->equalTo('Foo'),
                $this->equalTo('Factory')
            );
        $command = new PluginCommand($tools, $container);
        $commandTester = new CommandTester($command);
        $commandTester->execute(
            ['class_name' => 'Foo', 'factory' => 'Factory']
        );
        $this->assertEquals(0, $commandTester->getStatusCode());
    }

    /**
     * Test exception handling.
     *
     * @return void
     */
    public function testError()
    {
        $container = $this->getMockContainer();
        $tools = $this->getMockGeneratorTools(
            ['createPlugin', 'setOutputInterface']
        );
        $tools->expects($this->once())->method('setOutputInterface')
            ->will($this->returnValue($tools));
        $tools->expects($this->once())->method('createPlugin')
            ->will($this->throwException(new \Exception('Foo!')));
        $command = new PluginCommand($tools, $container);
        $commandTester = new CommandTester($command);
        $commandTester->execute(
            ['class_name' => 'Foo', 'factory' => 'Factory']
        );
        $this->assertEquals("Foo!\n", $commandTester->getDisplay());
        $this->assertEquals(1, $commandTester->getStatusCode());
    }

    /**
     * Get a mock generator tools object
     *
     * @param array $methods Methods to mock
     *
     * @return GeneratorTools
     */
    protected function getMockGeneratorTools($methods = [])
    {
        return $this->getMockBuilder(GeneratorTools::class)
            ->disableOriginalConstructor()
            ->onlyMethods($methods)
            ->getMock();
    }

    /**
     * Get a mock container object
     *
     * @param array $methods Methods to mock
     *
     * @return ContainerInterface
     */
    protected function getMockContainer($methods = [])
    {
        return $this->getMockBuilder(ContainerInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods($methods)
            ->getMock();
    }
}
