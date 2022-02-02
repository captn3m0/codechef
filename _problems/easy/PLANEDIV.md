---
{"category_name":"easy","problem_code":"PLANEDIV","problem_name":"Plane Division","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"xcwgf666","date_added":"19-09-2015","tags":{"0":"cenadar","1":"dec15","2":"euclidean","3":"gcd","4":"parallel","5":"sets","6":"simple","7":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/PLANEDIV","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/PLANEDIV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/PLANEDIV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/PLANEDIV.pdf">Vietnamese</a> as well.</h3>


<p>Chef is working with lines on a 2-D plane.</p>
<p>He knows that every line on a plane can be clearly defined by three coefficients <b>A</b>, <b>B</b> and <b>C</b>: any point <b>(x, y)</b> lies on the line if and only if <b>A * x + B * y + C = 0</b>.</p>
<p>Let's call a set of lines to be <i>perfect</i> if there does not exist a point that belongs to two or more distinct lines of the set.</p>
<p>He has a set of lines on a plane and he wants to find out the size of the largest <i>perfect</i> subset of this set.</p>

<h3>Input</h3>
<p>The first line of input contains one integers <b>T</b> denoting the number of test cases.</p>
<p>Each test case consists of one integer <b>N</b> denoting number of lines.</p>
<p>Next <b>N</b> lines contain <b>3</b> space-separated integers each denoting coefficients <b>A</b>, <b>B</b> and <b>C</b> respectively.</p>

<h3>Output</h3>
<p>For each test case output the cardinality of the largest perfect subset in a single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>N<sub>max</sub></b></li>
<li>Sum over all <b>N</b> for all test cases ≤ <b>NS<sub>max</sub></b></li>
<li><b>|A|, |B|, |C|</b> ≤ <b>10<sup>9</sup></b></li>
<li>For a line with coefficients <b>A</b>, <b>B</b> and <b>C</b> either <b>A</b> or <b>B</b> is not zero.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [35 points]: N<sub>max</sub> = 5000, NS<sub>max</sub> = 50000</b></li>
<li><b>Subtask #2 [65 points]: N<sub>max</sub> = NS<sub>max</sub> = 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
5
1 0 0
1 2 3
3 4 5
30 40 0
30 40 50</tt>

<b>Output:</b>
<tt>2</tt>
</pre>

<h3>Explanation</h3>
<p>Lines <b>3*x + 4*y + 5 = 0</b> and <b>30*x + 40*y + 0 = 0</b> form a biggest perfect subset.</p>
