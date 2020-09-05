# Introduction to Web Development (PHP)

Welcome to the course, this is an introdution to web development

# Table of Contents

- [Prepare the environment](#Prepare-the-environment)
- [Add your PHP to PATH environment variable](#add-your-PHP-to-PATH-environment-variable)
- [Run PHP Cli](#Run-PHP-Cli)
- [Intermediate PHP](210-PHP-Intermediate/README.md)
- [Tutorials](#Tutorials)

# Prepare the environment

- [Download & install GIT ](https://git-scm.com/downloads)
- [Download Visual studio code ](https://code.visualstudio.com/download)

- [Download PHP & unzip it ](https://www.php.net/downloads.php)
  - [Download PHP for windows ](https://windows.php.net/download#php-7.4)

# add your PHP to PATH environment variable

1. Right-click on the “Start menu”
2. Click “System”
3. Click “Advanced system settings”

!["Composer test"](/images/windows-10-system-properties.png)

4. Click “Environment Variables…”

!["Composer test"](/images/windows-10-system-variables-path.png).

5. Select the “Path” variable (in your user or in the system list)
6. Click “Edit…”.
7. Click “New”

8. Paste your PHP path

!["Composer test"](/images/windows-10-new-environment-variable-path.png)

    9. Click OK

!["Composer test"](/images/windows-10-php7-command-prompt.png)

> And voilà!

# Run PHP Cli

    1. Open a command prompt & type :

        - `php -S localhost:4000 -t . `

Go to your browser and type `localhost:4000` .

# Install composer

- Download and run [Composer-Setup.exe](https://getcomposer.org/download/) :

            - run  : `composer -V`

  > **Note**: Close your current terminal. Test usage with a new terminal: This is important since the PATH only gets loaded when the terminal starts

  !["Composer test"](/images/composer-windows-10-command-prompt.png)

# Tutorials

- [Learn php in (y) minutes ](https://learnxinyminutes.com/docs/php/)
- [Learn modern PHP](https://github.com/odan/learn-php)
- [PHP Apprentice](https://phpapprentice.com/)
- [PHP 7: Missing VCRUNTIME140.dll](https://stackoverflow.com/questions/30811668/php-7-missing-vcruntime140-dll)

## Thanx
