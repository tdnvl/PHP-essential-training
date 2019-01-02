# PHP essential training

## PHP overview

PHP is designed for use with HTML: it can be embedded in HTML and it will return HTML to the browser.

Similar syntax as C, Java, and Perl.

## First steps

### Embed PHP code on a page

+ The syntax is `<?php  ?>` We're telling Apache to turn on and turn off PHP filtering as it's going through the document.
+ ASP is Microsoft's version of PHP.
+ PHP doesn't care about white space.
+ Close executable statements with semicolons `;`
+ A file with mixed html and PHP should have the `.php` extension for Apache to parse the PHP!

### Serve a PHP page through localhost

1. Open terminal.
2. Navigate to the folder (directory) containing the file you want to serve.
3. `php -S localhost:8080`
4. Go to http://localhost:8080 in the browser.

(Answer by Zachary Russell Heineman at [https://superuser.com/a/878026](https://superuser.com/a/878026))

### Output dynamic text





