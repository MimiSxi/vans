<?php 
return array (
  'id' => 
  array (
    'name' => 'id',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => true,
    'autoinc' => true,
  ),
  'aid' => 
  array (
    'name' => 'aid',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'workid' => 
  array (
    'name' => 'workid',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'add_time' => 
  array (
    'name' => 'add_time',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'update_time' => 
  array (
    'name' => 'update_time',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => '0',
    'primary' => false,
    'autoinc' => false,
  ),
  'uniqueCode' => 
  array (
    'name' => 'uniqueCode',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'category' => 
  array (
    'name' => 'category',
    'type' => 'enum(\'品类1\',\'品类2\',\'品类3\',\'品类4\')',
    'notnull' => false,
    'default' => '品类1',
    'primary' => false,
    'autoinc' => false,
  ),
  'craft' => 
  array (
    'name' => 'craft',
    'type' => 'enum(\'工艺1\',\'工艺2\',\'工艺3\',\'工艺4\')',
    'notnull' => false,
    'default' => '工艺1',
    'primary' => false,
    'autoinc' => false,
  ),
  'years' => 
  array (
    'name' => 'years',
    'type' => 'enum(\'2020年\',\'2019年\',\'2018年\',\'2017年\')',
    'notnull' => false,
    'default' => '2020年',
    'primary' => false,
    'autoinc' => false,
  ),
  'material' => 
  array (
    'name' => 'material',
    'type' => 'enum(\'材质1\',\'材质2\',\'材质3\',\'材质4\')',
    'notnull' => false,
    'default' => '材质1',
    'primary' => false,
    'autoinc' => false,
  ),
  'color' => 
  array (
    'name' => 'color',
    'type' => 'enum(\'红\',\'黄\',\'蓝\',\'黑\',\'白\')',
    'notnull' => false,
    'default' => '红',
    'primary' => false,
    'autoinc' => false,
  ),
  'size' => 
  array (
    'name' => 'size',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'price' => 
  array (
    'name' => 'price',
    'type' => 'decimal(10,2)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'bigPicture' => 
  array (
    'name' => 'bigPicture',
    'type' => 'varchar(10001)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'label' => 
  array (
    'name' => 'label',
    'type' => 'set(\'标签1\',\'标签2\',\'标签3\',\'标签4\',\'标签5\')',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'BriefIntroduction' => 
  array (
    'name' => 'BriefIntroduction',
    'type' => 'text',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'detailedIntroduction' => 
  array (
    'name' => 'detailedIntroduction',
    'type' => 'longtext',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'viewNum' => 
  array (
    'name' => 'viewNum',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'downloadNum' => 
  array (
    'name' => 'downloadNum',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'subscriptionsNum' => 
  array (
    'name' => 'subscriptionsNum',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'production_status' => 
  array (
    'name' => 'production_status',
    'type' => 'enum(\'未审核\',\'已审核\',\'屏蔽\')',
    'notnull' => false,
    'default' => '未审核',
    'primary' => false,
    'autoinc' => false,
  ),
  'inventoryLocation' => 
  array (
    'name' => 'inventoryLocation',
    'type' => 'enum(\'未审核\',\'样品库\',\'展厅\',\'已寄出\')',
    'notnull' => false,
    'default' => '未审核',
    'primary' => false,
    'autoinc' => false,
  ),
  'isRecommend' => 
  array (
    'name' => 'isRecommend',
    'type' => 'tinyint(1)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'modifier' => 
  array (
    'name' => 'modifier',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'annex' => 
  array (
    'name' => 'annex',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
);