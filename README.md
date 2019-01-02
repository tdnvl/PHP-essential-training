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

+ Concatenation through `.`
+ `<?php echo "Hello" . ", world!"; ?>`

### Operational trail (request-response cycle)

![PHP request-response cycle](https://github.com/tdnvl/PHP-essential-training/blob/master/img/request-response-cycle.jpg)

### Code comments

Single line comments are:

```
<?php
    // This is a single line comment
?>
```

Multi-line comments are:

```
<?php
/*  This is a multi-line
    comment. Great if you want
    to type a bunch of stuff.
*/
?>
```

Not output, not processed.

## Data types

### Variables

+ start with a `$`
+ followed by a letter or an underscore
+ Can contain letter, numbers, underscores, or dashes
+ No spaces
+ Case sensitive

Stay away from single or multiple initial underscores.
Avoid dashes as separators: `$this-variable` could be read as this _minus_ variable.
See the [list of PHP reserved keywords.](http://php.net/manual/en/reserved.php#reserved)

Assignment: `$var1 = 10;`

### Strings
Defined in single or double quotation marks.

### String functions

`.=` is the concatenation equivalent of `+=` or `-=`.
