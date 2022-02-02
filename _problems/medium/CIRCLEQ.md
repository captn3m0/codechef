---
{"category_name":"medium","problem_code":"CIRCLEQ","problem_name":"The New Restaurant","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"amrmahmoud","problem_tester":"dpraveen","date_added":"17-06-2016","tags":{"0":"amrmahmoud","1":"medium","2":"sept16"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/CIRCLEQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/CIRCLEQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/CIRCLEQ.pdf">Vietnamese</a> as well.</h3>

<p>Chef decided to open a new restaurant in the town. The town already has <b>N</b> restaurants, each of which operates in an area of circular shape with its center at <b>x<sub>i</sub>, y<sub>i</sub></b> and radius <b>r<sub>i</sub></b>. For any point, there is at most one restaurant operating there.</p>

<p>Chef wants to build his restaurant in a strategic place. That's why he asks you some questions - find the total area covered by restaurants in the rectangle defined by the points <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub></b> where <b>(x<sub>1</sub>, y<sub>1</sub>)</b> is the lower left corner and <b>(x<sub>2</sub>, y<sub>2</sub>)</b> is the upper right corner. Chef is not that good in answering these questions, so he asked you to help him in this.</p>

<h3>Input</h3>
<p>There is a single test case.</p>
<p>The first line of input contains two integers <b>N, Q</b>, denoting number of restaurants and number of questions Chef asks.</p>
<p>Each of the next <b>N</b> lines contains three space separated integers <b>x, y, r</b> denoting <b>x</b> and <b>y</b> coordinate of center, and the radius of the restaurant, respectively.</p>
<p>Each of the next <b>Q</b> lines contains four space separated integers <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub></b> denoting a question as defined in the statement.</p>

<h3>Output</h3>
<p>Output <b>Q</b> lines, the <b>i-th</b> line contains the total area covered by restaurants in the rectangle defined by the <b>i-th</b> query.
The answer will be considered correct if its absolute or relative error does not exceed <b>10<sup>-6</sup></b> </p>

<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50 000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100 000</b></li>
<li><b>0</b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>50 000</b></li>
<li><b>1</b> ≤ <b>r<sub>i</sub></b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>x<sub>i1</sub></b> &lt; <b>x<sub>i2</sub></b> ≤ <b>50 000</b></li>
<li><b>0</b> ≤ <b>y<sub>i1</sub></b> &lt; <b>y<sub>i2</sub></b> ≤ <b>50 000</b></li>
<li>No two circles touch or intersect each other.</li>
</ul></p>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 pts)</b><ul>
<li><b>N</b> = <b>1</b></li>
</ul></p>
<p><b>Subtask #2 (10 pts)</b><ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>x<sub>i1</sub></b> &lt; <b>x<sub>i2</sub></b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>y<sub>i1</sub></b> &lt; <b>y<sub>i2</sub></b> ≤ <b>1000</b></li>
</ul></p>
<p><b>Subtask #3 (10 pts)</b><ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>1000</b></li>
</ul></p>
<p><b>Subtask #4 (20 pts)</b><ul>
<li>Original constraints with <b>r<sub>i</sub> = 1 </b></li>
</ul>
<p><b>Subtask #5 (50 pts)</b><ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2 4
5 5 2
2 2 1
2 2 5 5
1 1 7 7
2 3 8 4
1 3 2 4

<b>Output:</b>
3.926990816987241
15.707963267948966
2.456739397217513
0.000000000000000
</pre>