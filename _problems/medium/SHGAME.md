---
{"category_name":"medium","problem_code":"SHGAME","problem_name":"A Game With a Sheet of Paper","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko‎","date_added":"8-03-2014","tags":{"0":"easy","1":"ltime10","2":"nim","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SHGAME","time":{"view_start_date":1396168200,"submit_start_date":1396168200,"visible_start_date":1396168200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SHGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SHGAME.pdf">Russian</a>.</h3>
<p>Yuuko and Nagi like to play the following game:</p>
<p>Initially they take a checkered sheet of paper of the size of <b>N</b> x <b>M</b> cells. Then, one cell, let's call this cell (<b>X</b>, <b>Y</b>) is marked. Then, they take the moves alternately. A move consists of making a long horizontal or vertical cut. This cut should coincide with one of the lines that divide the sheet into cells. Then, a part that doesn't contain a marked cell is thrown away and another player takes her turn. A player who is unable to make a turn because after the opponent's turn the dimensions of the sheet became equal to <b>1</b> x <b>1</b> loses. Yuuko plays first.</p>
<p>Yuuko and Nagi have played a lot of games together so now they both know the optimal strategy and always use it. Today girls are going to play a game on a <b>N</b> x <b>M</b> cells sheet of paper, but they haven't yet decided, what is the cell (<b>X</b>, <b>Y</b>) to be marked. Yuuko is interested, in how many ways it's possible to choose this cell so the she can become a winner, regardless of Nagi's moves.</p>
<h3>Input</h3>
<p>The first line of input consists of an integer <b>T</b> - the number of test cases. Then, <b>T</b> lines describing the test cases follow. The <b>i</b>-th such line contains two integers <b>N</b> and <b>M</b>, separated by a single space.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the number of ways to choose the marked cell in order to ensure Yuuko's win.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 8
6 7

<b>Output:</b>
40
42
</pre><h3>Scoring</h3>
<p><b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 10 : 25 points.<br /><br />
<b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 1000 : 36 points.<br /><br />
<b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 10<sup>6</sup> : 39 points.</p>
