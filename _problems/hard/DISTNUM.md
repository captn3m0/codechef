---
{"category_name":"hard","problem_code":"DISTNUM","problem_name":"Simple Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"laycurse","date_added":"17-07-2015","tags":{"0":"2d","1":"aug15","2":"fenwick","3":"mgch","4":"range","5":"segment","6":"sqrt","7":"super"},"editorial_url":"http://discuss.codechef.com/problems/DISTNUM","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/DISTNUM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/DISTNUM.pdf">Russian</a>.</h3>
<p>Given an array <b>A</b> consisting of <b>N</b> positive integers, and <b>Q</b> queries on it. The queries can be of five types: </p>
<ul>
<li><b>1 l r</b> - let <b>S</b> - sorted set of elements with indices between <b>l</b> and <b>r</b>. You need to find: </li>
<p><img width = "380" height = "100" src="http://www.codechef.com/download/AUG15/DISTNUM.png" /></p>
<li><b>2 x y</b> - assign the value <b>y</b> to element at position <b>x</b>. </li>
<li><b>3 x</b> - delete element at position <b>x</b> from array. </li>
<li><b>4 z y</b> - insert <b>y</b> after element at position <b>z</b>. If <b>z</b> equal 0 then <b>y</b> should insert before the first element. </li>
<li><b>5 l r</b> - count the number of distinct numbers in array between indices <b>l</b> and <b>r</b>. </li>
</ul>
<p></p>
<p>All the indices in the queries are 1-based.</p>
<p>Array always contains at least one element.</p>
<h3>Input</h3>
<p>The first line of input contains two integers <b>N</b> and <b>Q</b> denoting the number of elements in <b>A</b>, and the number of queries to be executed. The second line of input contains <b>N</b> integers denoting the array <b>A</b>. Each of the next <b>Q</b> lines contains one query.</p>
<h3>Output</h3>
<p>For each query of <b>type 1</b> or <b>type 5</b>, output the answer to the query in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub>, <b>y</b> ≤ <b>10<sup>9</sup> + 6</b></li>
<li><b>1</b> ≤ <b>x </b> ≤ <b>|A|</b></li>
<li><b>1</b> ≤ <b>l </b> ≤ <b> r </b> ≤ <b>|A|</b></li>
<li><b>0</b> ≤ <b>z </b> ≤ <b>|A|</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 8
1 2 3 2 1
1 1 3
5 1 5
2 2 4
1 2 4
3 3
4 0 5
1 1 2
1 1 5

<b>Output:</b>
6
3
24
0
78

<b>Input:</b>
10 15
5 4 3 5 4 1 5 4 3 1
2 8 580347
4 6 503576
1 2 5
5 8 11
1 2 6
4 7 565239
3 6
3 11
3 3
2 9 674360
1 1 6
2 2 589693
4 5 236488
1 8 9
5 2 7


<b>Output:</b>
60
4
107
788510349
0
6

</pre><h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> <b>Q</b>*<b>N </b>≤ 2*10<sup>7</sup>. <b>Points - 10</b></li>
<li><b>Subtask 2:</b> Queries are of type 5 only. <b>Points - 5</b></li>
<li><b>Subtask 3:</b> Queries are of type 1 only. <b>Points - 10</b></li>
<li><b>Subtask 4:</b> Queries are of types 2, 5 only. <b>Points - 15</b></li>
<li><b>Subtask 5:</b> Queries are of types 1, 2, 5 only. <b>N, Q</b> ≤ 50000 <b>Points - 15</b></li>
<li><b>Subtask 6:</b> Queries are of types 2, 3, 4 only. <b>Points - 5</b></li>
<li><b>Subtask 7:</b> <b>N, Q</b> ≤ 50000. <b>Points - 10</b></li>
<li><b>Subtask 8:</b> Original constraints. <b>Points - 30</b></li>
</ul>
<h3>Explanation</h3>
<p><b>Query 1</b> Sorted set of elements with positions between 1 and 3 is S = {1, 2, 3}, ans = 1 * 2 * 3 = 6.</p>
<p><b>Query 2</b> Set of elements with positions between 1 and 5 is S = {1, 2, 3}, ans = |S| = 3.</p>
<p><b>Query 3</b> After this query A = {1, 4, 3, 2, 1}.</p>
<p><b>Query 4</b> Sorted set of elements with positions between 2 and 4 is S = {2, 3, 4}, ans = 2 * 3 * 4 = 24.</p>
<p><b>Query 5</b> After this query A = {1, 4, 2, 1}.</p>
<p><b>Query 6</b> After this query A = {5, 1, 4, 2, 1}.</p>
<p><b>Query 7</b> Sorted set of elements with positions between 1 and 2 is S = {1, 5}, ans = 0.</p>
<p><b>Query 8</b> Sorted set of elements with positions between 1 and 5 is S = {1, 2, 4, 5}, ans = 1 * 2 * 4 + 1 * 2 * 5 + 2 * 4 * 5 + 1 * 4 * 5 = 78.</p>
