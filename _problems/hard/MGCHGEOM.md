---
{"category_name":"hard","problem_code":"MGCHGEOM","problem_name":"Misha and Geometry","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"iscsi","date_added":"6-05-2016","tags":{"0":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/MGCHGEOM","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/MGCHGEOM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/MGCHGEOM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/MGCHGEOM.pdf">Vietnamese</a> as well.</h3>
<p>
Misha is an expert in geometry, so he knows a lot about various geometrical objects. Recently, he learned the definition of a convex polygon and invented too many new problems involving it. Please help him solve one such problem.
</p>
<p>
You are given <b>N</b> queries, queries can be one of the following two types:</p>
<li><b>+ x y</b> - Add point (<b>x</b>, <b>y</b>) into multiset of points.
</li>
<li><b>- x y</b> - Erase exactly <b>one</b> point (<b>x</b>, <b>y</b>) from multiset. It's guaranteed that point (<b>x</b>, <b>y</b>) exists in multiset.
</li>

<p>
After each query, Misha should find the area of the convex hull of all points which are in the multiset. Initially, multiset of points is empty. Please help him to solve this problem.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>For each test case, first line contains an integer <b>N</b> denoting number of queries.</p>
<p>Each of the next <b>N</b> lines contains one character - type of operation, followed by two space-separated integers - <b>x</b> and <b>y</b>.</p>
<h3>Output</h3>
<p>After each query, print the area of the convex hull of points which are in multiset. Your answer should be correct with exactly 1 digit after decimal point.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>|x|</b>, <b>|y|</b> ≤ 10<sup>7<sup></sup></sup></li>
<li>Sum of <b>N</b> over all the test cases in a single test file doesn't exceed 10<sup>5</sup> </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1: (10 pts)</b> Sum of <b>N</b> over all test cases in a single test file will not exceed  100.
</li>
<li><b>Subtask #2: (20 pts)</b> Sum of <b>N</b> over all test cases in a single test file will not exceed 5000.
</li>
<li><b>Subtask #3: (70 pts)</b> Original constraints.
</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>1
6
+ 0 0
+ 0 4
+ 4 0
+ 2 2
+ 4 4
- 0 0
</tt>
<b>Output:</b>
<tt>0.0
0.0
8.0
8.0
16.0
8.0</tt>
</pre>