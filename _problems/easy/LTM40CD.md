---
{"category_name":"easy","problem_code":"LTM40CD","problem_name":"Chef and Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"12-09-2016","tags":{"0":"ad","1":"easy","2":"geometry","3":"ltime40","4":"math","5":"mgch"},"time":{"view_start_date":1474736400,"submit_start_date":1474736400,"visible_start_date":1474736400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/mandarin/LTM40CD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/russian/LTM40CD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME40/vietnamese/LTM40CD.pdf">Vietnamese</a> as well.</h3>


<p>Chef likes problems on geometry a lot. Please help him to solve one such problem.</p>

<p>Find all possible triangles with integer sides which has the radius of <a href="http://www.mathwords.com/i/inscribed_circle.htm">inscribed circle (also known as incircle)</a> equal to <b>R</b>.</p>

<p>Two triangles are said to be different if they have at least one different side lengths. Formally, let there be two triangles <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>. Let <b>a, b, c</b> denote the sides of triangle <b>T<sub>1</sub></b>, such that <b>a ≤ b ≤ c</b>. Similarly, Let <b>d, e, f</b> denote the sides of triangle <b>T<sub>2</sub></b>, such that <b>d ≤ e ≤ f</b>. Then <b>T<sub>1</sub></b> will said to be different from <b>T<sub>2</sub></b> if either <b>a ≠ d</b>, or <b>b ≠ e</b> or <b>c ≠ f</b>.</p>

<h3>Input</h3>
<p>There is a single test case per test file.</p>
<p>The only line of input contains an integer <b>R</b>.</p>

<h3>Output</h3>
<p>Output in first line single number - number of triangles satisfying statement.</p>
<p>Order the sides of triangles in non-decreasing order. Output all triangles in non-decreasing order, i.e. order first by smallest sides, otherwise by second smallest sides, if first and second sides equal, then by third.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>R</b> ≤ 100 </li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (20 points) </b> 1 ≤ <b>R</b> ≤ 3</li>
 <li><b>Subtask #2: (30 points) </b> 1 ≤ <b>R</b> ≤ 20</li>
 <li><b>Subtask #3: (50 points) </b> Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2</tt>

<b>Output:</b>
<tt>5
5 12 13
6 8 10
6 25 29
7 15 20
9 10 17</tt>
</pre>