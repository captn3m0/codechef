---
{"category_name":"hard","problem_code":"DOMSOL","problem_name":"Domino Solitaire","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"15-11-2014","tags":{"0":"dynamic","1":"easy","2":"inpr1501","3":"yogesh01"},"time":{"view_start_date":1422551177,"submit_start_date":1422551177,"visible_start_date":1422551127,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>In Domino Solitaire, you have a grid with two rows and N columns. Each square in the grid contains an integer A. You are given a supply of rectangular 2 × 1 tiles, each of which exactly covers two adjacent squares of the grid. You have to place tiles to cover all the squares in the grid such that each tile covers two squares and no pair of tiles overlap.</p>
<p>The score for a tile is the diﬀerence between the bigger and the smaller number that are covered by the tile. The aim of the game is to maximize the sum of the scores of all the tiles. </p>
<p>Here is an example of a grid, along with two different tilings and their scores.The score for Tiling 1 is 12 = (9 − 8) + (6 − 2) + (7 − 1) + (3 − 2) while the score for Tiling 2 is 6 = (8 − 6) + (9 − 7) + (3 − 2) + (2 − 1). There are other tilings possible for this grid, but you can check that Tiling 1 has the maximum score among all tilings. Your task is to read the grid of numbers and compute the maximum score that can be achieved by any tiling of the grid.</p>
<p><img src="/download/extimages/7a5dce34b65f397e0b2b7b4fc7eb78d0.png" /></p>
<p>Your task is to read the grid of numbers and compute the maximum score that can be achieved by any tiling of the grid.</p>
<h3><strong>Input</strong></h3>
<p>The ﬁrst line contains one integer N, the number of columns in the grid. This is followed by 2 lines describing the grid. Each of these lines consists of N integers, separated by blanks.</p>
<p> </p>
<h3><strong>Output</strong></h3>
<p>A single integer indicating the maximum score that can be achieved by any tiling of the given grid.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A</b> ≤ <b>10<sup>4<br />
<!--'sup--><!--'sup--><p></p></sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<p><b>Input:</b><br />
4<br />
8 6 2 3<br />
9 7 1 2<br />
<b>Output:</b><br />
12<font face="sans-serif, Arial, Verdana, Trebuchet MS"><span style="white-space: normal;"> </span></font></p>
