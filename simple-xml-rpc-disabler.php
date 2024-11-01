<?php
/*
Plugin Name: Simple XML-RPC Disabler
Plugin URI: https://wordpress.org/plugins/simple-xml-rpc-disabler
Description: This plugin completely disables the XML-RPC API which can be abused by hackers on a WordPress site, providing an easy and simple way to disable/enable the XML-RPC API.
Version: 1.1.0
Author: Vikash Chand
Author URI: http://vikash.ch
License: GPLv2 or later

@package Simple XML-RPC Disabler
*/

/*  
Copyright 2021  Vikash Chand  (http://vikash.ch/#contact/)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_filter( 'xmlrpc_enabled', '__return_false' );
?>