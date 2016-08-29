<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
$sMetadataVersion = '1.1';
$aModule = array(
    'id'            => 'ecs_newssubscribed',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>NewsSubscribed</i>',
    'description'   => array(
                    'de' => 'Fuer Newsletterabonnenten wird die Option "Newsletter abonnieren" bei der Bestellung nicht angezeigt.',
    ),
    'version'       => '1.1',
    'thumbnail'     => 'ecomstyle.png',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'info@ecomstyle.de',
    'url'           => 'http://ecomstyle.de',
    'extend'        => array(
    ),
    	 'blocks' => array(
            array('template' => 'form/fieldset/order_newsletter.tpl', 'block'=>'user_billing_newsletter', 'file'=>'/views/blocks/user_billing_newsletter_ecs.tpl'),
	)
);
?>
