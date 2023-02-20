<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

class RuleDictionnaryPrinterType extends RuleDictionnaryDropdown
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        parent::__construct('RuleDictionnaryPrinterType');
    }


    /**
     * @see Rule::getCriterias()
     **/
    public function getCriterias()
    {

        static $criterias = [];

        if (count($criterias)) {
            return $criterias;
        }

        $criterias['name']['field'] = 'name';
        $criterias['name']['name']  = _n('Type', 'Types', 1);
        $criterias['name']['table'] = 'glpi_printertypes';

        return $criterias;
    }


    /**
     * @see Rule::getActions()
     **/
    public function getActions()
    {

        $actions                          = [];
        $actions['name']['name']          = _n('Type', 'Types', 1);
        $actions['name']['force_actions'] = ['assign', 'regex_result', 'append_regex_result'];

        return $actions;
    }
}
