<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>micromarkdown.php</title>
  <link href="http://simonwaldherr.github.io/micromarkdown.js/mmd.css" rel="stylesheet" type="text/css">
  <link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body><div id="htmlexport" style="padding:15px;">
<?php
  require_once('micromarkdown.php');
  $input = "#![µmd.js](http://simonwaldherr.de/umd.png)

a tiny script to convert [markdown](http://en.wikipedia.org/wiki/Markdown) to [HTML](http://en.wikipedia.org/wiki/HTML) in under 5kb and under [MIT License](http://opensource.org/licenses/MIT).  

[Lorem ipsum](http://en.wikipedia.org/wiki/Lorem_ipsum) **dolor** sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea **commodo** consequat. Duis *aute **irure dolor** in* reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint **occaecat cupidatat** non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo ~~inventore~~ inventari veritatis et quasi ***architecto beatae vitae dicta*** sunt, explicabo.

1. At vero eos et accusamus et iusto odio dignissimos ducimus
1. Qui blanditiis praesentium voluptatum deleniti atque corrupti
  * Quos dolores et quas molestias excepturi sint
  * Obcaecati *cupiditate **non** provident*
  * Et harum quidem rerum facilis est et expedita distinctio
    1. Neque porro quisquam
    2. est qui dolorem ipsum
    3. quia dolor sit amet
    4. consectetur adipisci velit
1. Quis autem vel eum iure reprehenderit
1. qui in ea voluptate velit esse

Quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
The previous text is only a lorem ipsum **placeholder text** to demonstrate **µmarkdown.js**. You can take a look at the code at <https://github.com/SimonWaldherr/micromarkdown.js> or view some of my other projects on [my GitHub page](https://github.com/SimonWaldherr/).  

---

as an example of what you can do with markdown, here is a nice table:  

this | *left* | center   | right
-----|:-------|:--------:|------:
with | sample | content  | for
lorem| ipsum  | dolor    | sit
sit  | amet   | sed      | do
do   | eiusom | tempor   | with

you can also write down code-examples in markdown:  

```
var md   = document.getElementById(\"md\").value,
    html = micromarkdown.parse(md);

```

or include content from [other sources][source] *(this is only possible with micromarkdown)*:  

[source]: http://cdn.simon.waldherr.eu/projects/majaX/content/data.csv
<include csv from http://cdn.simon.waldherr.eu/projects/majaX/content/data.csv>

to include µmarkdown on your page add  

```
<script type=\"text/javascript\" 
src=\"http://simonwaldherr.github.io/micromarkdown.js/micromarkdown.js\">
</script>
```  

to your HTML Head and than use  

```
var input = document.getElementById('input').value,
outputEle = document.getElementById('outEle');

outputEle.innerHTML = micromarkdown.parse(input);
```  

to convert markdown to html.  

please take a look at some of my other projects:

* [selfCSS](http://selfcss.org/)
* [PodloveWebPlayer](http://podlove.org/podlove-web-player/)
* [Shownot.es](http://shownot.es/)
* [FAMOUS](http://famous-project.org/)
* and many more on [github.com](https://github.com/SimonWaldherr?tab=repositories)

you can find me on:

* App.net @SimonWaldherr@adn
* Twitter @SimonWaldherr@t
* GitHub @SimonWaldherr@gh
* Facebook @SimonWaldherr@fb
* Google+ @SimonWaldherr@gp

most markdown scripts also allow to include HTML:  

---
<span style=\"position:absolute;right:25px;\">micromarkdown.js</span>";

echo micromarkdown($input);

?>
</div><script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33526676-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
