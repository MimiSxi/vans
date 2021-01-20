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
  'content' => 
  array (
    'name' => 'content',
    'type' => 'longtext',
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
  'nianfeng' => 
  array (
    'name' => 'nianfeng',
    'type' => 'enum(\'2020年\',\'2019年\',\'2018年\',\'2017年\')',
    'notnull' => false,
    'default' => '2020年',
    'primary' => false,
    'autoinc' => false,
  ),
  'yanse' => 
  array (
    'name' => 'yanse',
    'type' => 'enum(\'红\',\'橙\',\'黄\',\'绿\',\'蓝\',\'白\',\'黑\')',
    'notnull' => false,
    'default' => '红',
    'primary' => false,
    'autoinc' => false,
  ),
  'fengge' => 
  array (
    'name' => 'fengge',
    'type' => 'enum(\'风格1\',\'风格2\',\'风格3\',\'风格4\')',
    'notnull' => false,
    'default' => '风格1',
    'primary' => false,
    'autoinc' => false,
  ),
  'caizhi' => 
  array (
    'name' => 'caizhi',
    'type' => 'enum(\'材质1\',\'材质2\',\'材质3\',\'材质4\')',
    'notnull' => false,
    'default' => '材质1',
    'primary' => false,
    'autoinc' => false,
  ),
  'pinglei' => 
  array (
    'name' => 'pinglei',
    'type' => 'enum(\'品类1\',\'品类2\',\'品类3\',\'品类4\')',
    'notnull' => false,
    'default' => '品类1',
    'primary' => false,
    'autoinc' => false,
  ),
  'gongyi' => 
  array (
    'name' => 'gongyi',
    'type' => 'enum(\'工艺1\',\'工艺2\',\'工艺3\',\'工艺4\')',
    'notnull' => false,
    'default' => '工艺1',
    'primary' => false,
    'autoinc' => false,
  ),
  'pdf' => 
  array (
    'name' => 'pdf',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'Brief_introduction' => 
  array (
    'name' => 'Brief_introduction',
    'type' => 'text',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'Number_of_views' => 
  array (
    'name' => 'Number_of_views',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'Number_of_downloads' => 
  array (
    'name' => 'Number_of_downloads',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'Number_of_subscriptions' => 
  array (
    'name' => 'Number_of_subscriptions',
    'type' => 'int(10)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'production_status' => 
  array (
    'name' => 'production_status',
    'type' => 'tinyint(1)',
    'notnull' => false,
    'default' => '1',
    'primary' => false,
    'autoinc' => false,
  ),
  'production_update_time' => 
  array (
    'name' => 'production_update_time',
    'type' => 'int(11)',
    'notnull' => false,
    'default' => NULL,
    'primary' => false,
    'autoinc' => false,
  ),
  'Modifier' => 
  array (
    'name' => 'Modifier',
    'type' => 'varchar(200)',
    'notnull' => false,
    'default' => '',
    'primary' => false,
    'autoinc' => false,
  ),
  'client' => 
  array (
    'name' => 'client',
    'type' => 'enum(\'澳洲\',\'俄罗斯\',\'新西兰\',\'法国\',\'纽约\',\'其他\')',
    'notnull' => false,
    'default' => '澳洲',
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