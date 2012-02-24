<?php

/* ---------------------------------------------------------------------------
 * @Plugin Name: reformal
 * @Description: Add widget from reformal.ru
 * @Author URI: http://pgsha.info
 * @LiveStreet Version: 0.5.1
 * @Plugin Version:	1.0.0
 * ----------------------------------------------------------------------------
 */

$config = array();

$config['project_id']       = 54518;  // ID проекта на reformal.ru
$config['project_host']     = 'phpdevby.reformal.ru'; // поддомен проекта на reformal.ru или собственном домене
$config['tab_orientation']  = 'left'; // расположение виджета: left, right, top-left, top-right, bottom-left, bottom-right
$config['tab_indent']       = 300; // отступ в пикселях 
$config['tab_bg_color']     = '#F08200'; // цвет фона
$config['tab_border_color'] = '#FFFFFF'; // цвет текста
$config['tab_image_url']    = 'http://tab.reformal.ru/0JrQvdC40LPQsCDQvtGC0LfRi9Cy0L7QsiDQuCDQv9GA0LXQtNC70L7QttC10L3QuNC5/FFFFFF/dcd11cd3393a4956cb9dffe891d9112e'; // изображение для виджета
$config['tab_border_width'] = 2; //толщина рамки [0-2]

return $config;
