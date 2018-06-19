<?php  if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
                            /*
                            | -------------------------------------------------------------------
                            | DATABASE CONNECTIVITY SETTINGS
                            | -------------------------------------------------------------------
                            | This file will contain the settings needed to access your database.
                            |
                            | For complete instructions please consult the 'Database Connection'
                            | page of the User Guide.
                            |
                            */

                            $active_group = 'default';
                            $active_record = true;

                            $db['default']['hostname'] = 'mysql';
                            $db['default']['username'] = 'root';
                            $db['default']['password'] = '';
                            $db['default']['database'] = 'fc';
                            $db['default']['dbdriver'] = 'mysql';
                            $db['default']['dbprefix'] = '';
                            $db['default']['pconnect'] = false;
                            $db['default']['db_debug'] = true;
                            $db['default']['cache_on'] = false;
                            $db['default']['cachedir'] = '';
                            $db['default']['char_set'] = 'utf8';
                            $db['default']['dbcollat'] = 'utf8_general_ci';
                            $db['default']['swap_pre'] = '';
                            $db['default']['autoinit'] = true;
                            $db['default']['stricton'] = false;


                            /* End of file database.php */
                            /* Location: ./application/config/database.php */