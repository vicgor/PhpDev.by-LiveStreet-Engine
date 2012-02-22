<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/* Какая библиотека JavaScript используется. Поддерживается Mootools и Jquery */
$config['javascript_lib']  = 'jquery'; // Раскомментировать для jquery
//$config['javascript_lib']  = 'mootools'; // Закомментировать, если предыдущая строка раскомментирована

// В каких экшенах не производить замену стандартного редактора. По умолчанию это добавление/редактирование опросов и топиков-ссылок.
// формат - экшен1 => array( Ивент1=> true, Ивент2=> true, ..., ИвентN=> true), экшен2 => array( Ивент1=> true, Ивент2=> true, ..., ИвентN=> true), ...  экшенN => array( Ивент1=> true, Ивент2=> true, ..., ИвентN=> true);
$config['replace_forbidden'] = array (
	'question'=>array(
		'add'=>true,
		'edit'=>true
	),
	'link'=>array(
		'add'=>true,
		'edit'=>true
	),
);

return $config;
?>