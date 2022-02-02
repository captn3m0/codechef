---
{"category_name":"easy","problem_code":"SIGNWAVE","problem_name":"Sign Wave","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chandubaba","problem_tester":"laycurse","date_added":"6-01-2015","tags":{"0":"chandubaba","1":"march15","2":"simple","3":"trigonometry"},"editorial_url":"http://discuss.codechef.com/problems/SIGNWAVE","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/SIGNWAVE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/SIGNWAVE.pdf">Russian</a>.</h3>
<p>There are <b>S</b> sine functions and <b>C</b> cosine functions as following:<br /><br />
<div style="margin-left: 3em;"><b>a<sub>i</sub> sin(2<sup>i</sup> x)</b>, <b>0 ≤ x ≤ 2π</b>, for <b>i = 0, 1, ..., S−1</b>,</div>
</p><p><br />
<div style="margin-left: 3em;"><b>b<sub>j</sub> cos(2<sup>j</sup> x)</b>, <b>0 ≤ x ≤ 2π</b>, for <b>j = 0, 1, ..., C−1</b>,</div>
</p><p><br />where <b>a<sub>i</sub>, b<sub>j</sub></b> are some positive constants (and note that the answer of this problem does not depend on <b>a<sub>i</sub></b> and <b>b<sub>j</sub></b>).</p>
<p>For example, the following figures show the case of <b>S = 2, C = 0</b> and the case of <b>S = 3, C = 2</b>.</p>
<p><img width="432" height="256" src="/download/extimages/0925419993d0d4519b81b105a340b150.png" alt="" /></p>
<p>This figure shows the case of <b>S = 2, C = 0</b>. There are two sine functions <b>a<sub>1</sub> sin(x)</b> denoted by the red line, and <b>a<sub>2</sub> sin(2x)</b> denoted by the blue line.</p>
<p><img width="432" height="256" src="/download/extimages/f27db527f73499f44c46093b0758836d.png" alt="" /></p>
<p>This figure shows the case of <b>S = 3, C = 2</b>. There are five functions <b>a<sub>1</sub> sin(x)</b>, <b>a<sub>2</sub> sin(2x)</b>, <b>a<sub>3</sub> sin(4x)</b>, <b>b<sub>1</sub> cos(x)</b> and <b>b<sub>2</sub> cos(2x)</b>. In the figure, three sine functions are denoted by blue lines, and two cosine functions are denoted by red lines.</p>
<p>Chef wants to find the number of the points on the <b>x</b>-axis such that at least <b>K</b> functions through the points.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>Each test case contains one line. The line contains three space-separated integers <b>S, C, K</b>.</p>
<h3>Output</h3>
<p>For each test case, print the number of the points on the <b>x</b>-axis such that at least <b>K</b> functions through the points.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ T ≤ 200</b></li>
</ul>
<p></p>
<p><b>Subtask 1: 15 points</b></p>
<ul>
<li><b>0 ≤ S ≤ 12</b></li>
<li><b>0 ≤ C ≤ 12</b></li>
<li><b>1 ≤ K ≤ 25</b></li>
</ul>
<p></p>
<p><b>Subtask 2: 30 points</b></p>
<ul>
<li><b>0 ≤ S ≤ 50</b></li>
<li><b>C = 0</b></li>
<li><b>1 ≤ K ≤ 50</b></li>
</ul>
<p></p>
<p><b>Subtask 3: 25 points</b></p>
<ul>
<li><b>0 ≤ S ≤ 50</b></li>
<li><b>0 ≤ C ≤ 50</b></li>
<li><b>K = 1</b></li>
</ul>
<p></p>
<p><b>Subtask 4: 30 points</b></p>
<ul>
<li><b>0 ≤ S ≤ 50</b></li>
<li><b>0 ≤ C ≤ 50</b></li>
<li><b>1 ≤ K ≤ 100</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 0 1
2 0 2
3 2 1
3 2 3

<b>Output:</b>
5
3
9
5
</pre><h3>Explanation</h3>
<p><b>Example 1.</b> This is the case of <b>S = 2, C = 0</b>. So the situation is the same as the first figure in the statement. There are <b>5</b> points on the <b>x</b>-axis such that at least <b>1</b> function through the points. That is, <b>x = 0, π/2, π, 3π/2, 2π</b>.</p>
<p><b>Example 2.</b> This is also the case of <b>S = 2, C = 0</b>. So the situation is the same as the first figure in the statement. There are <b>3</b> points on the <b>x</b>-axis such that at least <b>2</b> functions through the points. That is, <b>x = 0, π, 2π</b>.</p>
<p><b>Example 3.</b> This is the case of <b>S = 3, C = 2</b>. So the situation is the same as the second figure in the statement. There are <b>9</b> points on the <b>x</b>-axis such that at least <b>1</b> function through the points. That is, <b>x = 0, π/4, π/2, 3π/4, π, 5π/4, 3π/2, 7π/4, 2π</b>.</p>
<p><b>Example 4.</b> This is the case of <b>S = 3, C = 2</b>. So the situation is the same as the second figure in the statement. There are <b>5</b> points on the <b>x</b>-axis such that at least <b>3</b> functions through the points. That is, <b>x = 0, π/2, π, 3π/2, 2π</b>. For example, three sine function through the point <b>x = 0</b>, and two sine functions and one cosine function through the point <b>x = π/2</b>.</p>
