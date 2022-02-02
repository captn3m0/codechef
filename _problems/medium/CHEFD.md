---
{"category_name":"medium","problem_code":"CHEFD","problem_name":"Chef and medium problem 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"stzgd","date_added":"17-09-2014","tags":{"0":"bit","1":"furko","2":"ltime16","3":"medium","4":"sets"},"editorial_url":"http://discuss.codechef.com/problems/CHEFD","time":{"view_start_date":1411893000,"submit_start_date":1411893000,"visible_start_date":1411893000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFD.pdf">Russian</a>.</h3>

<p>Chef has an array containing <b>N</b> integers. You have to make <b>M</b> queries. Each query has one of the two types:</p>
<p><ul>
<li><b>1 l r p</b> - Select all the numbers having indices between <b>l</b> and <b>r</b> (inclusive) that are divisible by <b>p</b> and divide them by <b>p</b>,<br />
  where <b>p</b> is in set {2, 3, 5}.</li>
<li><b>2 l d</b> - Modify the <b>l</b>-th number in the array to <b>d</b>.</li>
</ul>
</p>
<p>
Please help Chef in finding out the array after all the <b>M</b> queries.
</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b> denoting the number of integers in given array. </p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array.</p>
<p>Next line contains a single integer <b>M</b> denoting the number of queries.</p>
<p>Each of the following <b>M</b> lines describes a single query in the format given in the statement.</p>
<h3>Output</h3>
<p> Output a single line containing <b>N</b> integers denoting the array after all the <b>M</b> queries.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>In each query of first type, <b>p</b> is in set {2, 3, 5} </li>
<li>Subtask 1 (20 points): 1 ≤ <b>N</b> ≤ 100</li>
<li>Subtask 2 (35 points): 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, there is no query of second type</li>
<li>Subtask 3 (45 points): 1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2 3
5
1 2 2 2
1 2 2 2
2 2 3
1 2 3 3
2 1 5

<b>Output:</b>
5 1 1
</pre>
