## Synopsis

I started this project because I bought Easybulb lights with a wifi bridge and started to miss something like an actual lightswitch (after my phone battery died).
Found the library by ojarva (https://github.com/ojarva/python-ledcontroller), which can be used to control the lights.
Made a little website with mdbootstrap (https://mdbootstrap.com/). Change it all you like, or at least the name, it still has mine.
The website contains PHP to run the python script and javascript to react to button presses. 
This was my first real venture into the world of web development so this is all very basic and can probably be optimized and streamlined. 

## Motivation

I needed a lightswitch so I made this, made an android app (just a fullscreen webview of the website in this project) and I am running that app on my old Xperia Z2 I stuck to the wall.

## Installation

I put all the files in this repo in the /var/www/html folder of my Raspberry Pi 2 running an Apache server on Raspbian.
The website is made using mdbootstrap, but i can't include it in the repo because of their license. Download mdbootstrap and put their files in the same folder as these.
Remember to set the IP address in the lights.py file

## Tests

The python ledcontroller library should be working after you set the IP addres of your easybulb bridge in the lights.py file.
When the website is live, test it by pushing some buttons and see if your lightbulbs are responding.

## Contributors

Thanks to mdbootstrap for delivering such a good-looking library.
Thanks to ojarva for the python library.
Rest was done by me. If you have any questions, reach out to me on twitter @maximvanloo

## License

Use it any way you like, just don't resell it. This was meant for personal, open use. Will use a proper license later.
