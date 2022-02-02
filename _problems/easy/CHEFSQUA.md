---
{"category_name":"easy","problem_code":"CHEFSQUA","problem_name":"Chef and Square","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shangjingbo","date_added":"3-04-2014","tags":{"0":"berezin","1":"easy","2":"geometry","3":"oct14"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSQUA","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/CHEFSQUA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/CHEFSQUA.pdf">Russian</a>.</h3>
<p>Chef loves squares! You are given <b>N</b> points with integers coordinates, Chef asks you to find out how many points he should add to these set of<b> N</b> points, so that one could create at least one square having its vertices from the points of the resulting set. Note that the square created need not to be parallel to the axis.</p>
<h3>Input</h3>
<p>The first line contains singe integer <b>N</b>. </p>
<p>Each of next <b>N</b> lines contains two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> denotine the coordinates of <b>i</b>-th point. </p>
<h3>Output</h3>
<p>In a single line print single integer - the minimal number of points Chef need to paint to receive at least one square. </p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>-10^6</b> ≤ <b>X<sub>i</sub>, Y<sub>i<sub></sub></sub></b> ≤ <b>10^6</b></li>
<li>There are NO coincided points</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
0 0
2 2
3 3

<b>Output:</b>
2

<b>Input:</b>
5
0 0
100 100
200 200
100 0
0 100

<b>Output:</b>
0
</pre><h3>Explanation</h3>
<p>For the first example Chef can add points <b>(2, 0), (0, 2)</b> or <b>(2, 3), (3, 2)</b></p>
<p>For the second example Chef already has square <b>(0, 0), (100, 0), (0, 100), (100, 100)</b>. </p>
