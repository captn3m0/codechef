---
{"category_name":"easy","problem_code":"DISTCODE","problem_name":"Distinct Codes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"pavel1996","date_added":"3-11-2015","tags":{"0":"basic","1":"basics","2":"cakewalk","3":"constructions","4":"language","5":"ltime31","6":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DISTCODE","time":{"view_start_date":1451205000,"submit_start_date":1451205000,"visible_start_date":1451205000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/mandarin/DISTCODE.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/russian/DISTCODE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/vietnamese/DISTCODE.pdf">Vietnamese</a> as well.</h3>

<p>Sergey recently learned about <b>country codes</b> - two letter strings, denoting countries. For example, <b>BY</b> stands for Belarus and <b>IN</b> stands for India. Mesmerized by this new discovery, Sergey now looks for country codes everywhere!</p>

<p>Sergey has recently found a string <b>S</b> consisting of uppercase Latin letters. He wants to find the number of different country codes that appear in <b>S</b> as contiguous substrings. For the purpose of this problem, consider that every <b>2</b>-letter uppercase string is a valid country code.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first and only line of each test case contains a string <b>S</b>, consisting of uppercase Latin letters.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number of different country codes appearing in the given string.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>Subtask 1 (35 points): <b>2</b> ≤ <b>|S|</b> ≤ <b>3</b></li>
<li>Subtask 2 (65 points): <b>2</b> ≤ <b>|S|</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
INBY
BYBY</tt>

<b>Output:</b>
<tt>3
2</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The codes are <b>IN</b>, <b>NB</b> and <b>BY</b>.</p>
<p><b>Example case 2.</b> The codes are <b>BY</b> and <b>YB</b>.</p>