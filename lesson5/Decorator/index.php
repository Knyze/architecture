<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});


$decorator = new MailSender('gb.mail.ru',
                new TwitterSender('twitter',
                    new SMS_Sender('+79005555555',
                        new Sender())));

$decorator->send();