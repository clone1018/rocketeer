<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rocketeer\Services\Connections;

use Rocketeer\Interfaces\ConnectionInterface;
use Rocketeer\Interfaces\HasRolesInterface;

/**
 * Base connection class with additional setters
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 */
class Connection extends \Illuminate\Remote\Connection implements ConnectionInterface, HasRolesInterface
{
    use \Rocketeer\Traits\Properties\HasRoles;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
