<?php
/**
 * @author Patrick Jahns <github@patrickjahns.de>
 * @author Thomas Müller <thomas.mueller@tmit.eu>
 *
 * @copyright Copyright (c) 2018, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OC\CodingStandard;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig {

	public function __construct($name = 'default')
	{
		parent::__construct('ownCloud coding standard');
	}

	public function getRules()
	{
		$rules = [
			'native_function_invocation' => true,
			'@PSR1' => true,
			'array_syntax' => ['syntax' => 'short'],
			'combine_consecutive_issets' => true,
			'combine_consecutive_unsets' => true,
			'no_spaces_inside_parenthesis' => true,
			'no_extra_consecutive_blank_lines' => true,
		];
		return $rules;
	}
}