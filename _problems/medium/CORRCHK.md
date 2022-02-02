---
{"category_name":"medium","problem_code":"CORRCHK","problem_name":"Statements Checking","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko‎","date_added":"8-03-2014","tags":{"0":"cakewalk","1":"ltime10","2":"numeral","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/CORRCHK","time":{"view_start_date":1396168200,"submit_start_date":1396168200,"visible_start_date":1396168200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/CORRCHK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/CORRCHK.pdf">Russian</a>.</h3>
<p>Run has given you a list of statements of the form "A+B=C", where A, B and C consist only of decimal digits and small latin letters from 'a' to 'f'. Moreover, the first symbol of <b>A</b>, <b>B</b>, <b>C</b> is always not a zero and the length of <b>A</b>, <b>B</b>, <b>C</b> is not greater than 8.  How many statements have an integer <b>Q</b> in the range [2; 16] such that <b>A</b>+<b>B</b> equals to <b>C</b> in the base <b>Q</b>?</p>
<h3>Input</h3>
<p>The first line of input consists of an integer <b>T</b> - the number of statements. Then, <b>T</b> statements in the form "A+B=C" (without any spaces) follow, each on a separate line.</p>
<h3>Output</h3>
<p>Output an answer to the problem of the first line of output.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2+2=10
1+2=a
3+5=8

<b>Output:</b>
2
</pre><h3>Scoring</h3>
<p><b>T</b> = 10<sup>5</sup>, Every statement is either true in the base 10, either false in all the bases : 50 points.<br /><br />
<b>T</b> = 10<sup>5</sup>, No additional constraints : 50 points. </p>
