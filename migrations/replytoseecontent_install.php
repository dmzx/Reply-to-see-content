<?php
/**
*
* @package phpBB Extension - Reply to see content
* @copyright (c) 2020 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\replytoseecontent\migrations;

class replytoseecontent_install extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config.add', ['replytoseecontent_version', '1.0.0']],
		];
	}

	public function update_schema()
	{
		return [
			'add_columns'	=> [
				$this->table_prefix . 'forums'	=> [
					'replytoseecontent_enable'	=> ['BOOL', 0],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns'	=> [
				$this->table_prefix . 'forums'	=> [
					'replytoseecontent_enable',
				],
			],
		];
	}
}
