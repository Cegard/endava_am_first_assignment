# Install and Configuration steps

### Apache install and configuration.

  1. **Install c++ redistributable visual studio 2017**

   Download for [x64](https://aka.ms/vs/15/release/VC_redist.x64.exe) or [x32](https://aka.ms/vs/15/release/VC_redist.x86.exe) processor architectures. After installation the pc will need to restart

  2. **Install Apache Server**

   Download the windows compiled files from [apachelounge](http://www.apachelounge.com) for [x64](www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win64-VC15.zip) or [x32](www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win32-VC15.zip) processor architectures.

  3. **Move files**

   Unzip the files in a folder like **C:/Apache24**.

  4. **Run Apache server**

   Open a cmd terminal window, move to the folder where you moved your Apache server files with cd, move to the bin directory and run

   `htpd.exe -k install -n "Apache2.4"`

   This will install apache as a service on windows named **Apache2.4**. After this, run the command

   `net start Apache2.4`

   Now we have Apache running as a windows service.

  5. **Test installation**

   Open a new browser window and go to [localhost:80](localhost:80) An you'll see an **It works!** message.

### Mysql install and configuration.

  1. Download the .msi file according to your SO version from [dev.mysql.com/downloads/mysql/](https://dev.mysql.com/downloads/mysql/), After download is completed run the .msi file and follow the wizard steps. It's suggested to put a user and password other than root.

### PHP install and configuration.

  1. Download the PHP files from [windows.php.net](http://windows.php.net/) according to the version you want to use.

  2. Extract the files in a safe location like **C:\PHP**.

  3. In the folder with the extracted files select one of the php.ini files (there's one for development and other for production environments) and rename it to be **php.ini**.

  4. Move to the folder **C:/Apache24/conf** and open the file **httpd.conf** in this file put the next line at the end of the LoadModule section:

  LoadModule php**X**\_module "C:/PHP/php**X**apache2_4.dll"  and replace the **X** with the version of PHP you've installed previously. 

  Put the next line into the IfModule tag:

  
  AddType application/x-httpd-php .php

 Put the next line at the end of the file 

  PHPIniDir "C:/PHP" 

 Make sure to use the folder where you've installed PHP.

  5. Now you can test your installation, in the folder **C:/Apache24/htdocs** create a file called **info.php** into this file put

 `<?php phpinfo(); ?>`


  After this open a new window on your browser and go the address 127.0.0.1/info.php and you should see a page with with your php installation info.
