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
	public function __construct($name = 'default') {
		parent::__construct('ownCloud coding standard');
		$this->setIndent("\t");
	}

	public function getRules(): array {
		$rules = [
			'@PSR1' => true,
			// PSR-2
			'braces' => [
				'position_after_functions_and_oop_constructs' => 'same'
			],
			'class_definition' => true,
			'elseif' => true,
			'encoding' => true,
			'full_opening_tag' => true,
			'function_declaration' => true,
			'indentation_type' => true,
			'line_ending' => true,
			'constant_case'  => ['case' => 'lower'],
			'lowercase_keywords' => true,
			'method_argument_space' => true,
			'no_break_comment' => true,
			'no_closing_tag' => true,
			'no_spaces_after_function_name' => true,
			'spaces_inside_parentheses' => true,
			'no_trailing_whitespace' => true,
			'no_trailing_whitespace_in_comment' => true,
			'single_blank_line_at_eof' => true,
			'single_class_element_per_statement' => true,
			'single_import_per_statement' => true,
			'single_line_after_imports' => true,
			'switch_case_semicolon_to_colon' => true,
			'switch_case_space' => true,
			'visibility_required' => true,
			// ownCloud specific
			'native_function_invocation' => ['strict' => false],
			'array_syntax' => ['syntax' => 'short'],
			'combine_consecutive_issets' => true,
			'combine_consecutive_unsets' => true,
			'no_extra_blank_lines' => true,
			'is_null' => true,
			'yoda_style' => [
				'equal' => false,
				'identical' => false
			],
            // phpunit automated refactorings
            'php_unit_no_expectation_annotation' => true,
            'php_unit_expectation' => true,
            'php_unit_dedicate_assert_internal_type' => true
        ];
		return $rules;
	}
}
