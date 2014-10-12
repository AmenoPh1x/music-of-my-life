Music of my life
==============
Have you ever imagined the music of your life? Now you will be able to hear it

This is an experimental PHP webapp that connects to FitBit API to take user's activity and perform it into music.

Feel free to contribute or use or modify this code for your projects.

Requirements
==============
- PHP 5.3+ (Developed into 5.5.15)

- PHP OAuth extension
    INSTRUCTIONS IN OSX With XAMPP:
    * Install autoconf with brew:
        > brew install autoconf
    * Stop your XAMPP server
    * Add XAMPP binary directory in front of the others in your PATH modify .bash_profile in your user profile folder like so:
        PATH="/Applications/XAMPP/bin:${PATH}"
        export PATH
    * Intall via pecl in command line: 
        > sudo pecl install oauth
    * Add oauth extension in the php.ini file (/Application/XAMPP/etc/php.ini):
        extension="oauth.so"
    * Start the servers

- FitBit account and create an APP

- PHP FitBit Library (fitbitphp.php)
    * Modified just adding the followin after OAuth creation:
        $this->oauth->disableSSLChecks();

- Be an athlete! Well this is not a must, but the more you run the more you will animate the music of your life!

Installation
==============



Use
==============


