<?php
/**
 * Abstract base class for generator commands relying on the service container.
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
 * @package  Console
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development Wiki
 */
namespace VuFindConsole\Command\Generate;

use Psr\Container\ContainerInterface;
use VuFindConsole\Generator\GeneratorTools;

/**
 * Abstract base class for generator commands relying on the service container.
 *
 * @category VuFind
 * @package  Console
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development Wiki
 */
class AbstractContainerAwareCommand extends AbstractCommand
{
    /**
     * Top-level service container
     *
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Constructor
     *
     * @param GeneratorTools     $tools     Generator tools
     * @param ContainerInterface $container Top-level service container
     * @param string|null        $name      The name of the command; passing null
     * means it must be set in configure()
     */
    public function __construct(
        GeneratorTools $tools,
        ContainerInterface $container,
        $name = null
    ) {
        $this->container = $container;
        parent::__construct($tools, $name);
    }
}
