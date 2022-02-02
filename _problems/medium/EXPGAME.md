---
{"category_name":"medium","problem_code":"EXPGAME","problem_name":"Exponential Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"vineetpaliwal","problem_tester":"Rubanenko","date_added":"16-10-2013","tags":{"0":"easy","1":"game","2":"impartial","3":"ltime05","4":"sprague","5":"vineetpaliwal","6":"zero"},"editorial_url":"http://discuss.codechef.com/problems/EXPGAME","time":{"view_start_date":1382862600,"submit_start_date":1382862600,"visible_start_date":1382862600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/EXPGAME.pdf">here</a></h3>
<p> Little Chef is trying to learn exponents. He is especially interested in a number raised to the power of itself. Head Chef being his mentor has decided to give him a two player game to play. The game is as follows: You are given n piles of stones. The piles have <b>a_1, a_2 .. a_n</b> number of stones . Each player on his/her turn can remove <b>x</b> number of stones where <b>x</b> = <b>n^n</b> (for some natural number <b>n > 0</b>) from any one pile. The player who is unable to move loses. Head Chef is playing this game with the Little Chef and being senior he gives the first move to the Little Chef . </p>
<h3>Input</h3>
<p>Input Description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of piles. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the number of stones in each pile. </li>
</ul>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single line containing the string "Head Chef" if Head Chef will win the game or the string "Little Chef" is Little Chef will win the game (assuming optimal play by both players). </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>a_i</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
1
4

<b>Output:</b>
Little Chef
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Little Chef can remove all the four stones and Head Chef will lose. </p>
<h3> Scoring </h3>
<p> <b> Subtask 1 (16 points): </b> <b> N = 1 </b>  <br /><br />
<b> Subtask 2 (24 points): </b> <b> N = 2 </b> <br /><br />
<b> Subtask 3 (60 points):</b> <b> See constraints </b> <br />
</p>
