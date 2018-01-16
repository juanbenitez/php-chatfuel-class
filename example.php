<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use juno_okyo\Chatfuel;

$chatfuel = new Chatfuel(TRUE);
$chatfuel->sendText('Hello, World!');

// $chatfuel->createQuickReply('Quick Replies', array(
//   $chatfuel->createQuickReplyButton('Test', ['block', 'block 2'])
// ));

// Text card with button URL to a webview 
$chatfuel = new Chatfuel(true); //use true only for debugging 
$chatfuel->sendTextCard('Hello world', 
    array(
        $chatfuel->createButtonToURL('Open webview', $url_to_webview, null,
                               array('webview_height_ratio' => Chatfuel::WV_HEIGHT_RATIO_TALL,
                                     'webview_share_button' => Chatfuel::WV_SHARE_BUTTON_HIDE
                                     )
                              )
    )
);

//Returns a text card with quick reply button 
$chatfuel->createQuickReply('Hello Chatfuel', 
    array(
         $chatfuel->createQuickReplyButton('test button1', array('block-name'))
    )
);