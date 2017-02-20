#!/usr/bin/python
import getopt, sys
import ledcontroller

controller_ip = '192.168.1.30'
led = ledcontroller.LedController(controller_ip, port=8899, repeat_commands=3, pause_between_commands=0.1)


def lights_on(groups=None):
    print "lights_on: %r " % groups
    if groups is None or len(groups) == 0:
        led.on()
    else:
        try:
            for group in groups:
                led.on(int(group))
        except:
            pass


def lights_off(groups=None):
    if groups is None or len(groups) == 0:
        led.off()
    else:
        try:
            for group in groups:
                led.off(int(group))
        except:
            pass
    print "lights_off: %r " % groups


def lights_night_mode(groups=None):
    print "lights_night_mode: %r " % groups
    if groups is None or len(groups) == 0:
        led.nightmode()
    else:
        try:
            for group in groups:
                led.nightmode(int(group))
        except:
            pass


def set_brightness(percent=50, groups=None):
    print "set_brightness: %r %r " % (percent, groups)
    if groups is None or len(groups) == 0:
        led.set_brightness(percent)
    else:
        try:
            for group in groups:
                led.set_brightness(percent, int(group))
        except:
            pass


def warmer(groups=None):
    print "warmer: %r %r " % (groups)
    if groups is None or len(groups) == 0:
        led.warmer()
    else:
        try:
            for group in groups:
                led.warmer(int(group))
        except:
            pass


def brightness_down(groups=None):
    if groups is None or len(groups) == 0:
        led.brightness_down()
    else:
        try:
            for group in groups:
                led.brightness_down(int(group))
        except:
            pass


def brightness_up(groups=None):
    if groups is None or len(groups) == 0:
        led.brightness_up()
    else:
        try:
            for group in groups:
                led.brightness_up(int(group))
        except:
            pass


def set_color(color= "yellow_orange", groups=None):
    print "set_color: %r %r " % (color, groups)
    if groups is None or len(groups) == 0:
        led.set_color(color)
    else:
        try:
            for group in groups:
                led.set_color(color, int(group))
        except:
            pass


def usage():
    print "usage: "


def main():
    try:
        opts, args = getopt.getopt(sys.argv[1:], "a:e:g:", ["argument=", "exec=", "group="])
    except getopt.GetoptError as err:
        # print help information and exit:
        print str(err) # will print something like "option -a not recognized"
        usage()
        sys.exit(2)
    argument = None
    group = None
    command = None
    for option, arg in opts:
        if option in ("-a", "--argument"):
            argument = arg
        elif option in ("-g", "--group"):
            group = arg.split(',')
        elif option in ("-e", "--exec"):
            command = arg
        else:
            assert False, "unhandled option"
    print "Should run %s with %s %s" % (command, group, argument)
    try:
        if command == 'lights_on':
            lights_on(groups=group)
        if command == 'lights_off':
            lights_off(groups=group)
        if command == 'lights_night_mode':
            lights_night_mode(groups=group)
        if command == 'set_brightness':
            set_brightness(groups=group, percent=int(argument))
        if command == 'warmer':
            warmer(groups=group)
        if command == 'brightness_down':
            brightness_down(groups=group)
        if command == 'brightness_up':
            brightness_up(groups=group)
        if command == 'set_color':
            set_color(groups=group, color=argument)
    except:
        pass

if __name__ == "__main__":
    main()
