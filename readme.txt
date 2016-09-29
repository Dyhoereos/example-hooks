Here are several examples of a display override hook, part of a lab from a couple of years ago.

There are both classes and functions.
Three of the approaches use regular expressions, while the fourth uses a DOM to process the output.

Of the four, the "russia" solution (using DOM) is the best example, in my opinion.
The tokyo and ucleulet approaches have merit too.

The fine print...

These do not all work perfectly! (russia ends up with a bazillion extra <element> elements)
They do not all have good commenting style! (tokyo was written by "user" and doesn't have java/php-docs)
They do not all follow the CodeIgniter conventions, especially with regard to case sensitivity! (ucleulet is best)
