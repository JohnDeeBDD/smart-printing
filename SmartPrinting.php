<?php
/*
 Plugin Name: Smart Printing
 Plugin URI: https://generalchicken.net/smart-printing/
 Description: A plugin for Smart Printing
 Version: 1.0
 Author: John Dee
 Author URI: https://generalchicken.net
 */

namespace SmartPrinting;

require_once 'src/smart-printing/autoloader.php';

$Plugin = new SmartPrintingPlugin;

$Plugin->loadInventoryDataFromRemoteSource("alphabroder");
$Plugin->putInventoryDataIntoWooCommerce();