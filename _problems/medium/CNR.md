---
{"category_name":"medium","problem_code":"CNR","problem_name":"Combinatorial Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vineetpaliwal","problem_tester":null,"date_added":"6-10-2013","tags":{"0":"arithmetic","1":"big","2":"binary","3":"combinations","4":"easy","5":"ltime05","6":"permutations","7":"vineetpaliwal"},"editorial_url":"http://discuss.codechef.com/problems/CNR","time":{"view_start_date":1382862600,"submit_start_date":1382862600,"visible_start_date":1382862600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CNR_1.pdf">here</a></h3>
<p>Chef has a special affection for sets of binary strings of equal length which have same numbers of <b>1's</b>. Given three integers <b>n</b>, <b>k</b> and <b>m</b>, your task is to find the the lexicographically  <b>m<sup>th</sup></b> smallest string among strings  which have length n and have <b>k</b> <b>1's</b>. If no such string exists output <b>-1</b>. </p>
<h3>Tips: </h3>
<p> To see what lexicographic order means . See <a href="http://en.wikipedia.org/wiki/Lexicographical_order">http://en.wikipedia.org/wiki/Lexicographical_order</a></p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first and only line of each test case contains three space separated integers <b>N</b> , <b> K </b> and <b> M </b>
</li></ul>
<h3>Output</h3>
<p>For each test case output the answer on a separate line .</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>350</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 2 2

<b>Output:</b>
101
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The set of strings in lexicographic order is "011", "101", and "110" </p>
<h3> Scoring </h3>
<p><b>Subtask 1 (41 point):</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>
</p><p><b>Subtask 2 (59 points):</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>350</b></li>
</ul>
</p>
