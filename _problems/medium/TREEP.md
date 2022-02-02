---
{"category_name":"medium","problem_code":"TREEP","problem_name":"Period on tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 4","source_sizelimit":50000,"problem_author":"tehnar","problem_tester":"iscsi","date_added":"22-09-2015","tags":{"0":"bit","1":"decomposition","2":"fenwick","3":"hashing","4":"lca","5":"medium","6":"nov15","7":"tehnar"},"editorial_url":"http://discuss.codechef.com/problems/TREEP","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/TREEP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/TREEP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/TREEP.pdf">Vietnamese</a> as well.</h3>
<p>
You are given an undirected tree of <b>N</b> vertices, each of which edges is marked with some lowercase Latin letter between <b>a</b> and <b>z</b>.</p>
<p>
It's easy to notice that, if you select some distinct vertices <b>u</b> and <b>v</b> and write down a sequence of characters on the shortest path from <b>u</b> to <b>v</b>, you will get a lowercase string corresponding to this path.</p>
<p>
Let's call any string <b>t</b> a period of some string <b>s</b> if <b>s</b> can be obtained by concatenating the string <b>t</b> to itself one or more times.</p>
<p>
Your task is to process, on a given tree, the following two types of queries: </p>
<ul>
<li> <b>1 u v</b> - output the length of the <b>shortest</b> period of the string corresponding to the path from <b>u</b> to <b>v</b>.</li>
<li> <b>2 u v c</b> - replace the character marked on the edge between <b>u</b> and <b>v</b> with the character <b>c</b>.</li>
</ul>

<h3>Input</h3>
<p>
The first line of each test case contains a single integer <b>T</b> denoting the number of tests in input. The description of <b>T</b> test cases follows.<br />
The first line of a test case contains an integer <b>N</b> — the number of vertices in the tree.<br />
The next <b>N - 1</b> lines contains 2 space-separated entities: integer <b>u<sub>i</sub>, integer v<sub>i</sub></b> and a character c<sub>i</sub> denoting the edge between <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> marked with character <b>c<sub>i</sub></b> on it.<br />
The next line contains one integer <b>M</b> denoting the number of queries.<br />
Each of the next <b>M</b> lines contains three space-separated integers <b>type<sub>i</sub>, v<sub>i</sub>, u<sub>i</sub></b>.<br />
If <b>type<sub>i</sub>=2</b>, then character <b>c<sub>i</sub></b> follows these integers.
</p>
<h3>Output</h3>
<p>For each query of type 1 you should output minimal period of string corresponding to this query.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>u<sub>i</sub> ≠ v<sub>i</sub></b>, 1 ≤ v<sub>i</sub>, u<sub>i</sub>,≤ <b>N</b></li>
<li>For each query of second type, it is guaranteed that <b>u<sub>i</sub></b> is adjacent to <b>v<sub>i</sub></b></li>
<li>Sum of N over all test cases in a single file will not be greater then <b>5*10<sup>5</sup></b></li>
<li>Sum of M over all test cases in a single file will not be greater then <b>5*10<sup>5</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><i>Subtask 1 (15 points):</i> <b>N, M</b> ≤ <b>1*10<sup>4</sup></b>, sum of <b>N ≤ 5*10<sup>4</sup></b>, sum of <b>M ≤ 5*10<sup>4</sup></b> in a single file.<br />
<i>Subtask 2 (25 points):</i> <b>N, M</b> ≤ <b>5*10<sup>4</sup></b>, sum of <b>N ≤ 10<sup>5</sup></b>, sum of <b>M ≤ 10<sup>5</sup></b> in a single file.<br />
All the queries in this subtask have the first type<br />
<i>Subtask 3 (60 points):</i> Original constraints</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 a
1 3 b
4
1 1 2
1 2 3
2 1 3 a
1 2 3
4
1 2 a
2 3 b
3 4 a
3
1 1 4
2 2 3 a
1 1 4
<b>Output:</b>
1
2
1
3
1
</pre><h3>Explanation</h3>
<p>
In first test case, period of strings "a", "aa" is "a", and period of "ab" is "ab". <br />
In second test case, the only period of string "aba" is "aba" itself. Note that not "ab" is not a period, as "aba" is a prefix of "abab", but is not the same.
</p>
<p><b>Since input file can be fairly large (about 15 MB), it's recommended to use fast I/O (for example, in C++, use scanf/printf instead of cin/cout).</b></p>
