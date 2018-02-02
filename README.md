# Install and Configuration steps

### Apache install and configuration.

  1. **Install c++ redistributable visual studio 2017**

   Download for [x64](https://aka.ms/vs/15/release/VC_redist.x64.exe) or [x32](https://aka.ms/vs/15/release/VC_redist.x86.exe) processor architectures. After installation the pc will need to restart

  2. **Install Apache Server**

   Download the windows compiled files from [apachelounge](http://www.apachelounge.com) for [x64](www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win64-VC15.zip) or [x32](www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win32-VC15.zip) processor architectures.

  3. **Move files**

   Unzip the files in a computers location, it's suggested to unzip 'em in **C:/Apache24**.

  4. **Run Apache server**

   Open a cmd terminal window, move to the folder where you moved your Apache server files with cd, move to the bin directory and run

   `htpd.exe -k install -n "Apache2.4"`

   This will install apache as a service on windows named **Apache2.4**. After this, run the command

   `net start Apache2.4`

   Now we have Apache running as a windows service.

  5. **Test installation**

   Open a new browser window and go to [localhost:80](localhost:80) An you'll see an **It works!** message.

### Mysql install and configuration.

  1. Download the .msi file according to your SO version from [dev.mysql.com/downloads/mysql/](https://dev.mysql.com/downloads/mysql/), After download is completed run the .msi file and 