phpMyAdmin - Readme
===================

Version 4.7.1 fork from phpMyAdmin but suit for baidu env

A web interface for MySQL and MariaDB.

https://www.phpmyadmin.net/

Summary
-------

phpMyAdmin is intended to handle the administration of MySQL over the web.
For a summary of features, list of requirements, and installation instructions,
please see the documentation in the ./doc/ folder or at https://docs.phpmyadmin.net/

Copyright
---------

Copyright © 1998 onwards -- the phpMyAdmin team

Certain libraries are copyrighted by their respective authors;
see the full copyright list for details.

For full copyright information, please see ./doc/copyright.rst

License
-------

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License version 2, as published by the
Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

Licensing of current contributions
----------------------------------

Beginning on 2013-12-01, new contributions to this codebase are all licensed
under terms compatible with GPLv2-or-later.  phpMyAdmin is currently
transitioning older code to GPLv2-or-later, but work is not yet complete.

Enjoy!
------

The phpMyAdmin team

fix:

1、phpMyAdmin - Error
You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause some data to be corrupted!

2、undefined method Closure::bind from context 

# 中文

  - 基于phpMyAdmin且fix了某些bug，已经联系作者且merge进phpMyAdmin 4.7.2 milestone。
  - 基于hhvm和nginx，运行于百度开发机的环境。
  - 基于socket和百度备库访问环境做优化，可查询大数据量db。
  - 使用方法：

  ```sh
  复制config.inc.example.php 且重命名成：config.inc.php
  加入自己的db信息就可以使用了
  ```
  - example：

  ```
    **
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
    $cfg['Servers'][$i]['host'] = 'cp01-rdqa-***-lujunxu.epc.baidu.com';
    $cfg['Servers'][$i]['port'] = '8899';
    $cfg['Servers'][$i]['user']          = 'root';
    $cfg['Servers'][$i]['password']      = '123456'; // use here your password
    $cfg['Servers'][$i]['compress'] = false;
    $cfg['Servers'][$i]['AllowNoPassword'] = true;
    $cfg['Servers'][$i]['wait_timeout'] = '1000';
    #显示db详情
    $cfg['Servers'][$i]['verbose']='cp01-rdqa-***-lujunxu.epc.baidu.com:8899_本机';

    #第二个db
    $i++;
    #第一mysql db
    /* Authentication type */
    $cfg['Servers'][$i]['auth_type'] = 'config';
    /* Server parameters */
    #B端商品备库_sh01-dba-****-bgoods-99.sh01
    $cfg['Servers'][$i]['host'] = 'sh01-dba-***-bgoods-99.sh01';
    $cfg['Servers'][$i]['port'] = '5100';
    $cfg['Servers'][$i]['user']          = 'lujunxu';
    $cfg['Servers'][$i]['password']      = '5XDSan94g9'; // use here your password
    $cfg['Servers'][$i]['compress'] = false;
    $cfg['Servers'][$i]['AllowNoPassword'] = true;
    #显示db详情
    $cfg['Servers'][$i]['verbose']='sh01-dba-*****-99.sh01:5100_B端商品库';
  ```

