---
{"category_name":"easy","problem_code":"DEVJERRY","problem_name":"Devu and his mouse Jerry","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"1-06-2015","tags":{"0":"admin2","1":"snck151c"},"editorial_url":"http://discuss.codechef.com/problems/DEVJERRY","time":{"view_start_date":1433700900,"submit_start_date":1433700900,"visible_start_date":1433700900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/mandarin/DEVJERRY.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/russian/DEVJERRY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/vietnamese/DEVJERRY.pdf">Vietnamese</a></h3>


<p>Devu loves to play with his dear mouse Jerry.  One day they play a game on 2 dimensional grid of dimensions <b>n * n</b> (<b>n</b> ≥ 2). Jerry is currently at coordinates <b>(s<sub>x</sub>, s<sub>y</sub>)</b> and wants to move to location <b>(e<sub>x</sub>, e<sub>y</sub>)</b> where cheese is placed by Devu. Also Devu is very cunning and has placed a bomb at location <b>(b<sub>x</sub>, b<sub>y</sub>)</b>. All these three locations are distinct. </p>

<p>
In a single move, Jerry can go either up, down, left or right in the grid such that it never goes out of the grid. Also, it has to avoid the bomb. Find out minimum number of moves Jerry needs. It is guaranteed that it is always possible to do so.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows."</li>
<li>The first line of each test case contains seven space separated integers <b>n, s<sub>x</sub>, s<sub>y</sub> , e<sub>x</sub>, e<sub>y</sub>, b<sub>x</sub>, b<sub>y</sub></b>. 
</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer corresponding to minimum number of moves Jerry needs.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>2</b> ≤ <b>n</b> ≤ <b>20</b></li>
<li><b> 1 ≤ s<sub>x</sub>, s<sub>y</sub> , e<sub>x</sub>, e<sub>y</sub>, b<sub>x</sub>, b<sub>y</sub> ≤ n </b></li>
<li>No two or more poitns in the three points are same.
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 1 1 2 2 1 2
3 1 1 1 3 1 2

<b>Output:</b>
2
4
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> ...</p>
Jerry will move directly (1, 1) to (2, 1) and then to (2, 2) in total 2 moves.
<p><b>Example case 2.</b> ...</p>

<img src="http://discuss.codechef.com/upfiles/jerry_grid.png" height="250"/>
