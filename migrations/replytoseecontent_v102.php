<?php
/**
*
* @package phpBB Extension - Reply to see content
* @copyright (c) 2020 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\replytoseecontent\migrations;

class replytoseecontent_v102 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\replytoseecontent\migrations\replytoseecontent_v101'
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['replytoseecontent_version', '1.0.2']],
			['permission.add', ['u_replytoseecontent_see_all']],
			['permission.permission_set', ['REGISTERED', 'u_replytoseecontent_see_all', 'group', false]],
		];
	}
}
