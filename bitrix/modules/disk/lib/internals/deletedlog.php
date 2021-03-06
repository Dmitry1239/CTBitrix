<?php
namespace Bitrix\Disk\Internals;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type\DateTime;

Loc::loadMessages(__FILE__);

/**
 * Class DeletedLogTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> STORAGE_ID int mandatory
 * <li> OBJECT_ID int mandatory
 * <li> TYPE int mandatory
 * <li> CREATE_TIME datetime mandatory
 * </ul>
 *
 * @package Bitrix\Disk
 **/

final class DeletedLogTable extends DataManager
{
	public static function getTableName()
	{
		return 'b_disk_deleted_log';
	}

	public static function getMap()
	{
		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
			),
			'USER_ID' => array(
				'data_type' => 'integer',
				'required' => true,
			),
			'STORAGE_ID' => array(
				'data_type' => 'integer',
				'required' => true,
			),
			'OBJECT_ID' => array(
				'data_type' => 'integer',
				'required' => true,
			),
			'TYPE' => array(
				'data_type' => 'enum',
				'values' => ObjectTable::getListOfTypeValues(),
				'required' => true,
			),
			'CREATE_TIME' => array(
				'data_type' => 'datetime',
				'required' => true,
				'default_value' => new DateTime(),
			),
		);
	}

	public static function insertBatch(array $items)
	{
		parent::insertBatch($items);
	}
}
