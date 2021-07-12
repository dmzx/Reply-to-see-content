<?php
/**
*
* @package phpBB Extension - Reply to see content
* @copyright (c) 2021 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\replytoseecontent\migrations;

class replytoseecontent_v104 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\replytoseecontent\migrations\replytoseecontent_v103'
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['replytoseecontent_version', '1.0.4']],
		];
	}

	public function update_schema()
	{
		return [
			'add_columns'	=> [
				$this->table_prefix . 'forums'	=> [
					'replytoseecontent_url_hide'	=> ['BOOL', 0],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns'	=> [
				$this->table_prefix . 'forums'	=> [
					'replytoseecontent_url_hide',
				],
			],
		];
	}
}
