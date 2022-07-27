# xoarmor-kyte-api

## Getting started

1. Create a new EC2 instance on AWS that has network access to a MySQL/MariaDB instance.

2. Install `git` on the ec2 instance by running the following command:
`yum install git -y`

3. Clone the following utility script to get the instance staged for Kyte
`git clone https://github.com/keyqcloud/kyte-ec2-init.git`

4. Once cloned, run the scipt:
`sh ec2init.sh`

5. Clone this repo into the `/var/www/html` and install dependencies
```
git clone https://github.com/keyqcloud/kyte-example-api.git /var/www/html
cd /var/www/html
composer install
```

6. Copy the default config file
`cp /var/www/html/vendor/keyqcloud/kyte-php/sample-config.php /var/www/html/config.php`

7. Edit the config file with your editor of choice and add db connection info
`vi /var/www/html/config.php`

8. Setup gust by running gust and following the onscreen prompt
```
$ gust
Thank you for installing Gust to get your Kyte application up in to the sky.
First, we need some information to configure your Gust environment.

Where is your Kyte application located? (/var/www/html/): /var/www/html/


Excellent, next what is the DB engine? (InnoDB): InnoDB


Perfect, and one last, what is the charset? (utf8): utf8mb4
```

9. Use gust to setup your database, tables, and utility scripts
`gust init db`

8. Create a root account and user with default roles and permissions. Remember to replace the placeholders below!
A random password was autogenerated from the `ec2init.sh` script which can be used for your convenience.
`gust init account [Account Name] [User's Name] [email] [password]`

Note down the output as this will contain the account number, public and private keys, and identifier code that are required to access the API endpoint.
