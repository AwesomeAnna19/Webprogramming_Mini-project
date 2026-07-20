# Setup of the local server

To set up the local server to run my website, you need to do these steps first.

## Download the XAMPP platform

You download XAMPP platform here, with choosing the newest version: https://www.apachefriends.org/download.html

## Download this repository's code

As the title says, download it and then unpack the ZIP folder.

## Find the XAMPP folder 

To find it, you open up your File Explorer, navigate to the tab called “This PC”
(usually in the very bottom of all tabs on the very left side) and double click on it.

When you have entered that tab, you double click on your driver to open it
(usually called “Windows (:C)”) and find the folder called “xampp”.
- If you have more than one driver, then click on any of those and look for
the same folder as mentioned

## Find the "htdocs" folder

When you have found the “xampp” folder, you open it up and find the folder called
“htdocs”. When that one is found you open it up.

## Drag and drop the repository's code/the unpacked ZIP folder into the “htdocs” folder

**IMPORTANT!** You need to make sure that you drag the WHOLE ZIP folder
“Webprogramming_Mini-project-main” into the “htdocs” folder.

## Open up the XAMPP platform

Now open the XAMPP platform up and press the “Start” button on both Apache and MySQL. Wait a bit until they show that they are active, which is when they light up green around their names.

## When Apache and MySQL is active

When they are active, you open up your browser and type “localhost/Webprogramming_Mini-project-main” in the search field.

When the website you just typed in the search field shows up, click on the folder called
“Webprogramming_Mini-project-main” that is showed on the website, and then find the file called “main.php” and click on it.

When clicked, you have arrived to my website! :D

-------------------------------------------------------------------------------------------------------------

# Setup of the database

To set up the database to be able to create and login to your profile, you need to have done
step 1, 2, 3, 4 and 5 from before. When you have done that, you can proceed to
these steps below.

## When Apache and MySQL are active

When active, you open up your browser and type “localhost/phpmyadmin” in the search field.

Then you arrive into a website called “phpMyAdmin”

## In phpMyAdmin

Click on the tab called “New” that is located on the very left side a little below the title
“phpMyAdmin”.

When clicked, you name your new database ”all_users” and click on “Create”.

Then you call the table ”users” and choose to have 4 rows. After that you see a table. In each of the rows you write and input the things shown in the table below.

**IMPORTANT!** All the rows with whitespace/nothing inputted means you should
leave them as they were when the table was created at first


| Name     | Type    | Length/... | Default | Collision | Attributes | Null | Index               | A_I | Comments |
| -------- | ------- | ---------- | ------- | --------- | ---------- | ---- | ------------------- | --- | -------- |
| id       | INT     |            | None    |           | UNSIGNED   |      | PRIMARY PRIMARY     | ✓   |          |
| name     | VARCHAR | 255        | None    |           |            |      |                     |     |          |
| email    | VARCHAR | 255        | None    |           |            |      | UNIQUE email_unique |     |          |
| password | VARCHAR | 255        | None    |           |            |      |                     |     |          |

When you are done writing and inputting everything into the table, you save it.

Now you can go to the website by typing “localhost/Webprogramming_Mini-project-main” in the search field. Proceed doing step 7, 8 and 9 from before.


