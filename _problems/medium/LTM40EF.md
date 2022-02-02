---
{"category_name":"medium","problem_code":"LTM40EF","problem_name":"Chef and Words","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"12-09-2016","tags":{"0":"binary","1":"ltime40","2":"medium","3":"meet","4":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/LTM40EF","time":{"view_start_date":1474736400,"submit_start_date":1474736400,"visible_start_date":1474736400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40EF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/russian/LTM40EF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40EF.pdf">Vietnamese</a> as well.</h3>



<p>Chef likes problems related to learning new languages. He only knows first <b>N</b> letters of English alphabet. Also he explores all <b>M</b>-letter words formed by the characters he knows. Define cost for a given <b>M</b>-letter word <b>S</b>, cost(<b>S</b>) = <b>P<sub>1, S<sub>1</sub></sub>+P<sub>2, S<sub>2</sub></sub>+...+P<sub><b>M</b>, S<sub>M</sub></sub></b>, where <b>P<sub>i, j</sub></b> is <b>i, j</b>th entry of matrix <b>P</b>. Sort all the words by descending cost, if costs are equal, sort them lexicographically. You need to find <b>K</b>-th <b>M</b>-letter word in Chef's order.
</p>

<h3>Input</h3>
<p>First line contains three positive integer numbers <b>N</b>, <b>M</b> and <b>K</b>.</p>
<p>Next <b>M</b> lines contains <b>N</b> integers per line, denoting the matrix <b>P</b>.</p>

<h3>Output</h3>
<p>Output in a single line <b>K</b>-th <b>M</b>-letter in Chef's order.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 16 </li>
<li>1 ≤ <b>M</b> ≤ 10 </li>
<li>1 ≤ <b>K</b> ≤ <b>N<sup>M</sup></b></li>
<li>0 ≤ <b>P<sub>i, j</sub></b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (20 points)</b> 1 ≤ <b>K</b> ≤ <b>10000</b></li>
 <li><b>Subtask #2: (20 points)</b> 1 ≤ <b>M</b> ≤ <b>5</b></li>
 <li><b>Subtask #3: (60 points)</b> Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2 5 17
7 9
13 18
10 12
4 18
3 9</tt>

<b>Output:</b>
<tt>aaaba</tt>
</pre>