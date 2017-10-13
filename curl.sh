#!/bin/sh

#  Sample command line script

#  'Authorization: key=app-key',   # Sender's key of the Spot app

#  'head' => 'Title of message', 
#  'text' => 'Short description of message', 
#  'link' => 'Link to site or element (image, video, other) (or empty)',   # Appropriate app will be started to view / follow this link
#  'icon' => 'Link to icon, which is displayed with message (or empty)',
#  'shot' => 'Link to image file, which will be displayed underneath the message text (or empty)',
#  'user' => 'User identifier' # Recipient's key of the Spot app

curl -H "Authorization: key=app-key" -H "Content-Type: application/json" -d '{"head":"Title of message","text":"Short description of message","user":"User identifier"}' https://spot.barubox.com/messagesSpot


