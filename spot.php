<?php

    # Send messages to an individual recipient
		
    $data = array (
        'head' => 'Title of message', 
        'text' => 'Short description of message', 
        'link' => 'Link to site or element (image, video, other) (or empty)',	# Appropriate app will be started to view / follow this link
        'icon' => 'Link to icon, which is displayed with message (or empty)',
	'shot' => 'Link to image file, which will be displayed underneath the message text (or empty)',
	'user' => 'User identifier'	# Recipient's key of the Spot app
    );     
	
    $headers = array (
	'Authorization: key=app-key',	# Sender's key of the Spot app
	'Content-Type: application/json'
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://spot.barubox.com/messagesSpot');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    curl_exec($ch);

    curl_close($ch);

?>
