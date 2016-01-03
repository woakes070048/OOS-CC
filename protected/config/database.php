<?php
/**
 * Database information
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2012 Ommu Platform (ommu.co)
 * @link https://github.com/oMMu/Ommu-Core
 * @contect (+62)856-299-4114
 *
 */
return array(
	'components'=>array(
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=host.name;dbname=host.database',
			//'emulatePrepare' => true,
			'username' => 'host.username',
			'password' => 'host.password',
			'charset' => 'utf8',
		),
	),
);
?>