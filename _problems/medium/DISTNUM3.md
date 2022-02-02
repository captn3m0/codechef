---
{"category_name":"medium","problem_code":"DISTNUM3","problem_name":"Primitive Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 6","source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"24-05-2016","tags":{"0":"mgch"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/DISTNUM3.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/DISTNUM3.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/DISTNUM3.pdf">Vietnamese</a> as well.</h3>

<p>Given a tree <b>T</b> consisting of <b>N</b>  nodes and <b>Q</b> queries on it. Each node <b>v</b> have some value <b>C<sub>v</sub></b> assigned to it. The queries can be of two types: </p>
<ul>
<li><b>1 u v</b> - find number of distinct numbers on path between <b>u</b> and <b>v</b> </li>
<li><b>2 v y</b> - assign the value <b>y</b> to the node with index <b>v</b>. </li>
</ul>
<br />
<p>All the indices in the queries are 1-based.</p>

<h3>Input</h3>
<p>The first line of input contains two integers <b>N</b> and <b>Q</b> denoting the number of elements in <b>T</b>, and the number of queries to be executed.</p>
<p>The second line of input contains <b>N</b> integers denoting the assigned values <b>C</b> to <b>T</b>. </p>
<p>Each of the next <b>N - 1</b> lines contains two integers<b>u</b> and <b>v</b> nodes which connected by edge.</p>
<p>Each of the next <b>Q</b> lines contains one query. All the numbers in input are integers. </p>

<h3>Output</h3>
<p>For each query of <b>type 1</b>, output the answer to the query in a single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>C</b><sub>i</sub>, <b>y</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>u, v </b> ≤ <b>N</b></li>
</ul>


<h3>Subtasks</h3>
<ul>
 <li><b>Subtask 1:</b> <b>Q</b>x<b>N </b>≤ 2*10<sup>7</sup>,  <b>Points - 23, TL = 2 sec</b></li>
 <li><b>Subtask 2:</b> Original constraints. <b>Points - 77, TL = 6 sec</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6 7
1 2 3 4 5 6
1 2
1 3
2 4
2 5
3 6
1 5 6
2 5 6
1 1 5
1 5 6
2 1 6
1 5 6
1 2 6

<b>Output:</b>
5
3
4
3
3
</pre>
