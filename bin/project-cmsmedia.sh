#!/bin/bash -e
clear
osascript &>/dev/null <<EOF
    tell application "iTerm"
        activate
        tell current window to set tb to create tab with default profile
        tell current session of current window to write text "cd ~/code/RealPageMediaServices"
        tell current session of current window to write text "gs"

        tell current window to set tb to create tab with default profile
        tell current session of current window to write text "cd ~/code/RealPageMediaServices"
        tell current session of current window to write text "npm run watch"

    end tell
EOF

cd ~/code/RealPageMediaServices
subl .
