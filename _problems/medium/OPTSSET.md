---
{"category_name":"medium","problem_code":"OPTSSET","problem_name":"Optimal Subset","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"melfice","date_added":"21-09-2017","tags":{"0":"chemthan","1":"chemthan","2":"ltime53","3":"maths","4":"medium","5":"optimization"},"editorial_url":"https://discuss.codechef.com/problems/OPTSSET","time":{"view_start_date":1509210000,"submit_start_date":1509210000,"visible_start_date":1509210000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/mandarin/OPTSSET.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/russian/OPTSSET.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/vietnamese/OPTSSET.pdf">Vietnamese</a> as well.</h3>

<p>Problem description.</p>
<p>You are given a convex polygon of <b>n</b> vertices <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>n</sub></b> (in counter-clock or clock order). Each vertex is assigned with a weight <b>w<sub>i</sub></b>.</p>
<p>Find a subset of vertices that <b>includes vertex 1</b>.</p>
<p><b>1 = i<sub>1</sub> < i<sub>2</sub> < ... < i<sub>k</sub> ≤
 n</b> that maximizes ratio:</p>
<p><b>(dist(i<sub>1</sub>, i<sub>2</sub>) + dist(i<sub>2</sub>, i<sub>3</sub>) + ... + dist(i<sub>k</sub>, i<sub>1</sub>)) / (w<sub>i<sub>1</sub></sub> + w<sub>i<sub>2</sub></sub> + ... + w<sub>i<sub>k</sub></sub>)</b>.</p>
<p>Where <b>dist(i, j)</b> refers to Euclidean distance between two points <b>P<sub>i</sub>, P<sub>j</sub></b>.</p>
<p> </p>


<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denotes the number of test cases. Each test case is describes as follow: </p>
<p>An integer <b>n</b> on a single line.</p>
<p><b>n</b> next lines, each line contains two integers, that is coordinates of <b>i</b>-th vertex</b>
<p>The last line contains <b>n</b> space-seperated integer, denotes weight of vertex.</p>
<p> </p>

<h3>Output</h3>
<p>Each testcase output the maximum ratio can reach on a single line.</p>
<p>Your answer will be considered correct if it has an absolute error less then <b>10<sup>-6</sup></b>.</p>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>3 ≤ n ≤ 10<sup>5</sup></b></li>
<li> The sum of <b>n</b> over all test cases is at most <b>2.10<sup>5</sup></b></li>
<li><b>0</b> ≤ all coordinates ≤ <b>10<sup>9</sup></b></li>
<li><b>1 ≤ w<sub>i</sub> ≤ 10<sup>5</sup></b></li>
</ul>
<p></p>
<p>Subtask:</p>
<ul>
<li>Subtask #1 (10 points): <b>n ≤ 15</b></li>
<li>Subtask #2 (30 points): <b>n ≤ 1000</b></li>
<li>Subtask #3 (60 points): original constrains</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
0 0
1 5
2 9
4 4 20
4
0 0
1 5
2 7
3 6
12 15 12 11
5
0 0
1 5
2 8
3 9
4 8
12 11 18 2 7

<b>Output:</b>
1.274754878
0.606675824
1.355261854
</pre>