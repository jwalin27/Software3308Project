Organization of files:
All HTML and PHP files required to run are located in the 'Mask' folder
Assets of this code are stored in nested folders within 'Mask'
These assets are sorted into a 'css' folder, a 'js' folder (javascript), and two separate 'fonts' folders.
Our autodocumenter is stored in the main directory, just above the Mask directory.

Deployment:
Mask code can be run on any server utilizing apache2 in conjunction with mysql and php
To deploy, follow these steps:
1. Setup an apache web server on localhost (or another port of your choosing)
2. Move directory 'Mask' into index directory of your localhost apache server
3. Setup mysql databases by running 'masK_Part2.sql' on your local machine
4. Configure user sql 'hostname', 'username', and 'password' at the top of each *.php file (default is 'localhost', 'root', 'root')
5. Open 'Home.html' in your web browser
6. Sign Up by creating an account on the main page
7. Enjoy Mask!