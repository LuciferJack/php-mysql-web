<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = '123456'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$cfg['ShowDatabasesNavigationAsTree']=true;
$cfg['SQLQuery']['Edit']=true;
$cfg['SQLQuery']['Explain']=true;
$cfg['ShowSQL']=true;
#执行时间
$cfg['ExecTimeLimit']=0;
#内存大小
#$cfg['MemoryLimit'] = "10240M";

#关闭自动提醒 sql
#$cfg['CodemirrorEnable']=false;
#$cfg['ShowSQL']=false;
#$cfg['DefaultLang'] = 'en';
#Force language to use. The corresponding language file needs to be in locale/code/LC_MESSAGES/phpmyadmin.mo.h
#$cfg['Lang']='en';
#echo 'Current PHP version: ' . phpversion();



/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'cp01-rdqa-dev171-lujunxu.epc.baidu.com';
$cfg['Servers'][$i]['port'] = '8899';
$cfg['Servers'][$i]['user']          = 'root';
$cfg['Servers'][$i]['password']      = '123456'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['wait_timeout'] = '1000';
#显示db详情
$cfg['Servers'][$i]['verbose']='cp01-rdqa-dev171-lujunxu.epc.baidu.com:8899_本机';

#第二个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#B端商品备库_sh01-dba-nuomi-bgoods-99.sh01
$cfg['Servers'][$i]['host'] = 'sh01-dba-nuomi-bgoods-99.sh01';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='sh01-dba-nuomi-bgoods-99.sh01:5100_B端商品库';


#第三个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = '10.92.111.41';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='10.92.111.41:5100_bainuo_ktv';


#第四个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = 'nj03-dba-forum-ddbspush02-99.nj03';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='nj03-dba-forum-ddbspush02-99.nj03:5100_nuomiplus';

#第五个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = 'nj03--dba-nuomi-goods-99.nj03';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='nj03--dba-nuomi-goods-99.nj03:5100_c_goods';


#第六个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = 'nj03-dba-forum-ddbspush02-99.nj03';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['wait_timeout'] = '1000';
#显示db详情
$cfg['Servers'][$i]['verbose']='nj03-dba-forum-ddbspush02-99.nj03:5100_tpupload';


#第七个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = '10.99.201.114';
$cfg['Servers'][$i]['port'] = '8806';
$cfg['Servers'][$i]['user']          = 'root';
$cfg['Servers'][$i]['password']      = 'work@nuomi'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='10.99.201.114:8806_nlp_sandbox';



#第八个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = '10.26.112.40';
$cfg['Servers'][$i]['port'] = '5100';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='10.26.112.40:5100_bainuo_zizhucan';


#第九个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = '10.99.201.114';
$cfg['Servers'][$i]['port'] = '8806';
$cfg['Servers'][$i]['user']          = 'root';
$cfg['Servers'][$i]['password']      = 'work@nuomi'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='10.99.201.114:8806_biz_spider';



#第十个db
$i++;
#第一mysql db
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
#糯米c 端 预定功能：bainuo_ktv
$cfg['Servers'][$i]['host'] = 'nj02-dba-dbbk-001.nj02';
$cfg['Servers'][$i]['port'] = '3603';
$cfg['Servers'][$i]['user']          = 'lujunxu';
$cfg['Servers'][$i]['password']      = '**********'; // use here your password
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
#显示db详情
$cfg['Servers'][$i]['verbose']='nj02-dba-dbbk-001.nj02:3603_niux_fmis';






/**
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
//$cfg['Servers'][$i]['controluser'] = 'pma';
//$cfg['Servers'][$i]['controlpass'] = 'pmapass';

/* Storage database and tables */
// $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
// $cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
// $cfg['Servers'][$i]['relation'] = 'pma__relation';
// $cfg['Servers'][$i]['table_info'] = 'pma__table_info';
// $cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
// $cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
// $cfg['Servers'][$i]['column_info'] = 'pma__column_info';
// $cfg['Servers'][$i]['history'] = 'pma__history';
// $cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
// $cfg['Servers'][$i]['tracking'] = 'pma__tracking';
// $cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
// $cfg['Servers'][$i]['recent'] = 'pma__recent';
// $cfg['Servers'][$i]['favorite'] = 'pma__favorite';
// $cfg['Servers'][$i]['users'] = 'pma__users';
// $cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
// $cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
// $cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
// $cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
// $cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
// $cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';

/**
 * End of servers configuration
 */



/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Whether to display icons or text or both icons and text in table row
 * action segment. Value can be either of 'icons', 'text' or 'both'.
 * default = 'both'
 */
//$cfg['RowActionType'] = 'icons';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 * default = false
 */
//$cfg['ShowAll'] = true;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * Possible values: 25, 50, 100, 250, 500
 * default = 25
 */
//$cfg['MaxRows'] = 50;

/**
 * Disallow editing of binary fields
 * valid values are:
 *   false    allow editing
 *   'blob'   allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'    disallow editing
 * default = 'blob'
 */
//$cfg['ProtectBinary'] = false;

/**
 * Default language to use, if not browser-defined or user-defined
 * (you find all languages in the locale folder)
 * uncomment the desired line:
 * default = 'en'
 */
#$cfg['DefaultLang'] = 'en';
#Force language to use. The corresponding language file needs to be in locale/code/LC_MESSAGES/phpmyadmin.mo.h
#$cfg['Lang']='en';

//$cfg['DefaultLang'] = 'de';

/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 * default = 1
 */
//$cfg['PropertiesNumColumns'] = 2;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * This requires configuration storage enabled, see above.
 * default = false
 */
//$cfg['QueryHistoryDB'] = true;

/**
 * When using DB-based query history, how many entries should be kept?
 * default = 25
 */
//$cfg['QueryHistoryMax'] = 100;

/**
 * Whether or not to query the user before sending the error report to
 * the phpMyAdmin team when a JavaScript error occurs
 *
 * Available options
 * ('ask' | 'always' | 'never')
 * default = 'ask'
 */
//$cfg['SendErrorReports'] = 'always';

/**
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <https://docs.phpmyadmin.net/>.
 */
