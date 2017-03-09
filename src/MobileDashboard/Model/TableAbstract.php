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
 * Abstract class for table classes.
 */
abstract class TableAbstract implements TableInterface
{
	/**
	 * Database connection.
	 * @var \PDO
	 */
	protected $connection;

	/**
	 * Schema name.
	 * @var string
	 */
	protected $schema;
	
	/**
	 * Constructor.
	 * @param \PDO $connection
	 * @param string $schema
	 * @return void
	 */
	public function __construct(\PDO $connection, $schema)
	{
		$this->schema = $schema;
	}
	
	/**
	 * Creates table.
	 * @return void
	 */
	abstract public function createTable();
}
