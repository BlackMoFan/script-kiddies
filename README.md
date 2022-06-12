# Script Kiddies
[![Typing SVG](https://readme-typing-svg.herokuapp.com?font=Comic+Neue&color=7380ec&center=true&lines=Employee+Management+System+%7C+Script+Kiddies)](https://git.io/typing-svg)

---
An Employee Management System (EMS) using PHP and MySQL

---
https://github.com/BlackMoFan/script-kiddies/blob/main/assets/examples/example-light.png?raw=true


https://github.com/BlackMoFan/script-kiddies/blob/main/assets/examples/example-dark.png?raw=true

---
## Requirements

Git and XAMPP

## How to Download
### Windows
1. **Download**. Download [XAMPP for Windows](https://www.apachefriends.org/download.html) and follow the installation instructions on that page.

2. Alternatively, you can follow the instruction [here](https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/).

### macOS
1. **Download** [XAMPP for Mac OS](https://www.apachefriends.org/download.html) and follow the installation instructions on that page. Or you can install via terminal by:
    
    - Open the terminal (`command + space` button and type "Terminal" then press return/enter key)
    - Run the following command in terminal to install brew cask
    
           ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)" < /dev/null 2> /dev/null ; brew install caskroom/cask/brew-cask 2> /dev/null
       
    - Now install XAMPP with the following command
    
           brew install --cask xampp
      
    - XAMPP is installed and ready to use!

### Linux
#### Debian-based distros
1. **Download.** Download the XAMPP package for linux [here](https://www.apachefriends.org/index.html). The Downloaded XAMPP package will be saved to your Downloads directory.
2. **Make the installation package executable.** Open your terminal and enter the following:

    Go to the Downloads directory
    
       $ cd ~/Downloads
    Make the package executable. Replace the package name accordingly.
    
       $ chmod 755 xampp-linux-x64-7.2.10-0-installer.run
    If you need to verify the execute permission for the packages, use the following command in Terminal:
    
       $ ls -l
    The –rwxr in the above output indicates the user can execute the package.

3. **Launch the Setup Wizard.** Now launch the XAMPP installation wizard by using the following syntax in Terminal:

    Replace the package name accordingly.

       $ sudo ./xampp-linux-7.4.1-1-installer.run
    Next, just follow along the installation and choose the defaults.   

#### Arch-based distros
1. Clone the [AUR package](https://aur.archlinux.org/packages/xampp) for XAMPP: 

       $ git clone https://aur.archlinux.org/xampp.git
2. Change directory to the cloned repository.

       $ cd xampp

3. Install the package

       $ makepkg -sri

4. XAMPP (LAMPP in the case of Linux) is installed and now ready to use!

## Clone the repo
Locate where XAMPP/LAMPP is installed in your system and find the directory named **htdocs**. This is where we will clone the repository to be able to open it in our localhost.
    
   HTTPS
    
    $ git clone https://github.com/BlackMoFan/script-kiddies.git
   
   SSH
   
    $ git clone git@github.com:BlackMoFan/script-kiddies.git
       
   Github CLI
       
    $ gh repo clone BlackMoFan/script-kiddies
       
## Open the system in your local machine

1. **Dashboard.**

    Open your favorite browser and type in `localhost` in the url address bar to open the XAMPP dashboard.

2. **Database.** 

    From the dashboard, go to phpMyAdmin by clicking at it on the uppermost right corner or by entering `http://localhost/phpmyadmin/` in your url address bar.

3. **Import the initial database file**

    Import the database file *login_sample_db.sql* from the `~/assets/database/` directory of the cloned repo.
    
4. **Open the system**

    You can now then access the system by entering `localhost/script-kiddies` in the url address bar.
    
You can also view the hosted website by visiting this link - http://dishevelled-title.000webhostapp.com/utilities/login.php
