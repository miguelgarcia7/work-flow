#!/bin/bash -e
clear
echo "============================================"
echo "Start Installing Project Starter"
echo "============================================"

# git project starter from GitHub
git clone https://github.com/miguelgarcia7/project-starter.git
# change directory to project-starter
cd project-starter
# delete .git folder before copying files over to parent
rm -rf .git
# copy files to parent directory
cp -rf . ..
#move back to parent directory
cd ..
#remove project-starter folder
rm -R project-starter

echo "========================="
echo "Installation Complete."
echo "========================="

# open in sublime text
subl .