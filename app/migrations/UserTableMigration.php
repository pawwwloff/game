<?php 

namespace app\migrations;

use vendor\core\base\Migration;

class UserTableMigration extends Migration{

	public function up()
	{
		$this->int('id')->notnull('id')->increment('id')->primary('id');
		$this->varchar('name', 50)->notnull('name');
		$this->varchar('password', 30);
		$this->int('health')->default_value('health', '100');
		$this->int('attack')->default_value('attack', '100');
		$this->createTable('user', $this->data);
	}
	
	public function down()
	{
		$this->dropTable('user');
	}
	
}