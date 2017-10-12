#!/bin/bash -e
clear
osascript &>/dev/null <<EOF
    tell application "iTerm"
        activate
        tell current window to set tb to create tab with default profile
        tell current session of current window to write text "cd ~/Sites/kigo.net"
        tell current session of current window to write text "gs"

        tell current window to set tb to create tab with default profile
        tell current session of current window to write text "cd ~/Sites/kigo.net/resources/themes/kigo"
        tell current session of current window to write text "gulp watch"

    end tell
EOF
