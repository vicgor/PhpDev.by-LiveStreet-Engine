<?php
/*-------------------------------------------------------
*
*   Loginza
*   Author: Sergey Arsenichev
*   Contact e-mail: sergey@arsenichev.ru
*   ICQ: 465745
*
*--------------------------------------------------------
*
*   Official site: http://loginza.ru
*   Contact e-mail: sergey@loginza.ru
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
$config = array();
/**
 * Используемые таблицы БД
 */
// хранение loginza identity
$config['table']['identities'] = '___db.table.prefix___loginza_identities';

/**
 * Роутинг
 */
Config::Set('router.page.loginza_login', 'PluginLoginza_ActionLogin');
Config::Set('router.page.loginza_settings', 'PluginLoginza_ActionSettings');
/**
 * Общие настройки виджета
 */
/*
 * Требовать email (если не передан от провайдера авторизации, то будет запрошен его ввод на промежуточном шаге).
 */
$config['mail_required'] = false;

// настройки виджета Loginza
/*
 * Язык в виджете: eng, ukr, rus и тп. Если пусто, то авто определение языка
 */
$config['widget']['lang'] = 'rus';
/*
 * Набор провайдеров через запятую которые будут показаны в виджете.
 * Порядок в списке соответствует порядку в виджете.
 */
$config['widget']['providers'] = 'facebook,twitter,google,livejournal,yandex,mailruapi,openid,flickr,vkontakte';

/**
 * Настройки безопастности авторизации Loginza
 * Требуются для более безопастной проверки token loginza (защита от подмены)
 */
/*
 * ID виджета (доступен после регистрации сайта в личном кабинете на http://loginza.ru)
 * Если пусто, то защита не используется
 */
$config['loginza']['id'] = '13125';
/*
 * Секретный ключ (доступен после регистрации сайта в личном кабинете на http://loginza.ru)
 */
$config['loginza']['skey'] = 'ed30cc0aa60605b63e28f1643374e476';


return $config;
?>
