<?php
/**
 * MobileDashboard JSON-REST API.
*
* @author Ondrej Donek, <ondrejd@gmail.com>
* @license GNU General Public License Version 3 http://www.gnu.org/licenses/gpl.txt
* @link https://github.com/MobileDashboard/server-php for canonical repository
*
* @link http://php.net/manual/en/features.commandline.webserver.php for more details about PHP built-in server
*/

namespace MobileDashboard\Model;

/**
 * Interface for table classes.
 */
interface TableInterface
{
	/**
	 * Creates table.
	 * @return void
	 */
	public function createTable();
}
