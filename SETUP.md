# Setting Up CodeIgniter 4 with Composer, Apache NetBeans, and XAMPP

This guide will assist you in setting up a CodeIgniter 4 project using Composer for dependency management, along with Apache NetBeans and XAMPP for a comprehensive development environment.

## Prerequisites

Before proceeding, ensure you have the following installed:

- XAMPP: A free and open-source cross-platform web server solution stack package developed by Apache Friends.
- Apache NetBeans: An integrated development environment (IDE) for developing with PHP, HTML, JavaScript, and other web technologies.
- Composer: A dependency manager for PHP.

## Step 1: Install XAMPP

1. Download XAMPP(8.2.12 / PHP 8.2.12) from the [official website](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download).
2. Follow the installation instructions for your operating system.


### Setup XAMPP/Enabling PHP Extensions in XAMPP

To ensure that your XAMPP environment is fully configured for CodeIgniter 4 development, you need to enable several PHP extensions. Follow the steps below to.

#### Step 1: Enable `intl` and `mbstring` Extension

1. Navigate to the `c:\\xampp\php` directory within your XAMPP installation folder.
2. Open the `php.ini` file using a text editor.
3. Uncomment the line `;extension=intl` by removing the semicolon (`;`) at the beginning of the line.
4. Uncomment the line `;extension=mbstring` by removing the semicolon (`;`) at the beginning of the line.
5. Save the `php.ini` file

#### Step 2: Check `json`, `xml`, `mysqlnd` extensions

1. Start apache server in xampp control panel
2. Navigate to `c:\\xampp\htdocs`
3. Create a `test.php` file and open it in a text editor
4. Write,
    <?php 
        echo phpinfo();
    ?>
5. Open a browser and enter  localhost/test.php
6. Search these extensions to check if they are enabled, generally they are enabled in this pHp 8 version,
    `json`, `xml`, `mysqlnd`
7. Make sure that they are enabled and stop apache server in xampp control panel

#### Step 3: Check/setup libssh2.dll file

1. Navigate to c://xampp/apache/bin and check libssh2.dll file
2. Make sure the file is present

After completing these steps, the required extensions will be enabled in your XAMPP PHP environment, allowing you to work seamlessly with your CodeIgniter 4 project.


## Step 2: Install Apache NetBeans

1. Download Apache NetBeans from the [official website](https://dlcdn.apache.org/netbeans/netbeans-installers/21/Apache-NetBeans-21-bin-windows-x64.exe).
2. Follow the installation instructions for your operating system.
3. Launch Apache NetBeans.

## Step 3: Install Composer

1. Download and install Composer from the [official website](https://getcomposer.org/Composer-Setup.exe).
2. Follow the installation instructions for your operating system.
3. Verify that Composer is installed by running `composer --version` in your terminal or command prompt.

## Step 4: Create a New CodeIgniter 4 Project

1. Open your terminal or command prompt.
2. Navigate to c://xampp/htdocs
3. Run the following Composer command to create a new CodeIgniter 4 project:
    composer create-project codeigniter4/appstarter project-name

## Step 5: Run the project

1. Start the Apache from the XAMPP Control Panel.
2. Open browser and enter `localhost/project-name/public/`
3. This should open a Welcome page showing codeigniter4

