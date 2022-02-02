---
{"category_name":"easy","problem_code":"CHEFA","problem_name":"Chef and easy problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"stzgd","date_added":"17-09-2014","tags":{"0":"cakewalk","1":"furko","2":"ltime16","3":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/CHEFA","time":{"view_start_date":1411893000,"submit_start_date":1411893000,"visible_start_date":1411893000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFA.pdf">Russian</a>.</h3>

<p>
Chef and Roma are playing a game. Rules of the game are quite simple.<br />
Initially there are <b>N</b> piles of stones on the table.<br />
In each turn, a player can choose one pile and remove it from the table.<br />
Each player want to maximize the total number of stones removed by him.<br />
Chef takes the first turn.
</p>
<p>
Please tell Chef the maximum number of stones he can remove assuming that both players play optimally.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of piles.</p>
<p>The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the number of stones in each pile.</p>
<h3>Output</h3>
<p>For each test case, output a single line containg the maximum number of stones that Chef can remove.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>Subtask 1 (35 points): <b>T</b> = 10, 1 ≤ <b>N</b> ≤ 1000</li>
<li>Subtask 2 (65 points): <b>T</b> = 10, 1 ≤ <b>N</b> ≤ 10<sup>5 </sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
3
1 2 1

<b>Output:</b>
4
3
</pre>
