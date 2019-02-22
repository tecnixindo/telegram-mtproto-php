<?php

//---------------------------------------------------------
//
//  Usage: run this file
//  
//  =====================
//  Give me enthusiasm to continue the development with a little donation to:
//  BTC	1AEdAhje16RSeUMvYLQ4rzu9i5ZcHP9uDn
//  BCH	bitcoincash:qpfs5k3v73ness44qvxeqaauknyem0uv0uwv0thvhu
//  BTG	GfzmgESHyogYGt3UMc8Zp6wyB4wovpeuJn
//  DASH	XwYEp7DbaPechDyEvcdfkNt99htVK3vmC5
//  DOGE	DHKufkhPXbmgbCTpMGYNeGCQD4Zb6uAMsg
//  ETC	0x310ac05f20b75f175711a9e20d778ff3fa4a4221
//  ETH	0x3483a47d0962853a292f88cc008635be15630095
//  LTC	LXaz5trQTZ6YMTfvPEi9EhsMb3KLAyCsKo
//  XZC	Zzv5V8o5jiygAu85jYihsBNwLykT71isbd
//
//---------------------------------------------------------

if (!file_exists('madeline.phar')) {
    copy('https://github.com/tecnixindo/telegram-mtproto-php/raw/master/madeline.phar', 'madeline.phar');
}
require_once 'madeline.phar';

$MadelineProto = new \danog\MadelineProto\API('session.mtproto.php');

$MadelineProto->start();

	$login = $MadelineProto->get_self();

	print_r($login);
