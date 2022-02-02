---
{"category_name":"school","problem_code":"CHRL2","problem_name":"Chef and String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"12-01-2014","tags":{"0":"chrl3","1":"dynamic","2":"easy","3":"furko","4":"ltime08"},"editorial_url":"http://discuss.codechef.com/problems/CHRL2","time":{"view_start_date":1390725000,"submit_start_date":1390725000,"visible_start_date":1390725000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL2.pdf">Russian</a> also.</h3>
<p>Chef likes playing with strings. The most interesting game are named "CHEF in string". The move of the game consists of the following: Chef takes a <b>subsequence</b> of string's letters that form the word "CHEF" and then he removes that symbols. The goal of the game is to make the maximal number of moves. Please, help Chef and tell him the maximal possible number of moves that he is able to make for the given string <b>S</b>.</p>

<h3>Input</h3>
<p> The first line of each test case contains a given string. This string consists of uppercase letters from the set {"C", "H", "E", "F"}. </p>

<h3>Output</h3>
<p>Output a single line containing the maximal possible number of moves.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 </b> ≤ <b>|S|</b> ≤ <b>100000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
CHEFCHEFFFF

<b>Output:</b>
2

</pre>
<pre><b>Input:</b>
CHHHEEEFFCC

<b>Output:</b>
1

</pre>

<h3>Scoring</h3>
Subtask 1 (25 points): <b>|S|</b> ≤ 2000 <br>
Subtask 2 (75 points):  See the constraints. <br>