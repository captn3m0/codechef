---
{"category_name":"easy","problem_code":"CHEFSEG","problem_name":"Chef and Segment Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"12-03-2014","tags":{"0":"ad","1":"berezin","2":"nov14","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSEG","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/CHEFSEG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/CHEFSEG.pdf">Russian</a>.</h3>
<p> </p>
<p>Chef loves to play games. Now he plays very interesting game called "Segment". At the beginning Chef has segment <b>[0, X]</b> and no points on it. On each step Chef chooses the subsegment of maximal length possible such as it contains <b>no</b> points on it. If there are more than one such subsegment Chef chooses the one with the minimal left coordinate. Once Chef chosed the subsegment he put the point in it's middle and the step is over.</p>
<p>Help Chef to define the coordinate of the point he will put on the <b>K</b>-th step. </p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line contains integer <b>T</b> - number of test cases. </li>
<li>Each of next <b>T</b> lines contains two integers <b>X</b> and <b>K</b>. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case in a single line print single double number - the coordinate of the <b>K</b>-th point Chef will put. Answer will be considered as correct if absolute difference between the answer and correct answer is less or equal <b>10^(-6)</b>. </li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10^12</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>1</b>: <b>T</b> ≤ <b>10</b>; <b>X, K</b> ≤ <b>20</b>. Points: <b>15</b> </li>
<li>Subtask <b>2</b>: <b>T</b> ≤ <b>10</b>; <b>X</b> ≤ <b>10^6</b>, <b>K</b> ≤ <b>2*10^5</b>. Points: <b>25</b></li>
<li>Subtask <b>3</b>: <b>T</b> ≤ <b>10^5</b>; X ≤ <b>10^9</b>, <b>K</b> ≤ <b>10^12</b>. Points: <b>60</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
10 1
10 2
10 3
1000000000 1234567
<b>Output:</b>
5.0000
2.5000
7.5000
177375316.6198730500000000
</pre><p> </p>
<h3>Explanation</h3>
<p>You can see the points coordinates for the third sample from first two samples. </p>
