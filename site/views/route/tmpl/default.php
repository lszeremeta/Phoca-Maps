<?php defined('_JEXEC') or die('Restricted access');
echo '<div id="phocamapsprintroute">';
$id		= '';
$map	= new PhocaMapsMap();

echo $map->getIconPrintScreen();

$map->loadAPI('jsapi', (int)$this->t['load_api_ssl']);

echo $map->startJScData();
echo $map->addAjaxAPI('maps', '3.x', $this->t['params']);
echo $map->createDirection(1);
echo $map->setDirectionFunction();
echo $map->directionInitializeFunction($this->t['from'], $this->t['to']);
echo $map->endJScData();

echo '<div id="directionsPanel'.$id.'" ></div>';
echo PhocaMapsHelper::getInfo();
echo '</div>';


