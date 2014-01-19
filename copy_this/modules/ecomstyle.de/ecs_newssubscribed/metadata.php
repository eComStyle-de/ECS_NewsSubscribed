<?php

$aModule = array(
    'id'           => 'ecsnewssubscribed',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>NewsSubscribed</i>',
    'description'  => array(
        'de' => 'Fuer Newsletterabonnenten wird die Option "Newsletter abonnieren" bei der Bestellung nicht angezeigt.
                <br><iframe frameborder="no" width="600px" height="400px" src="http://tinyurl.com/m23ozfo"></iframe>',
    ),
    'thumbnail'    => 'ecomstyle.png',
    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'        => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
    'extend'       => array(
       
    ),
    	 'blocks' => array(
            array('template' => 'form/fieldset/order_newsletter.tpl', 'block'=>'user_billing_newsletter', 'file'=>'user_billing_newsletter_ecs.tpl'),
	 )

);
?>