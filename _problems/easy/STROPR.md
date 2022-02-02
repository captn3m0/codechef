---
{"category_name":"easy","problem_code":"STROPR","problem_name":"Chef and Strange Operations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"iscsi","date_added":"23-01-2015","tags":{"0":"antoniuk1","1":"combinatorics","2":"easy","3":"feb16","4":"maths"},"editorial_url":"http://discuss.codechef.com/problems/STROPR","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/STROPR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/STROPR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/STROPR.pdf">Vietnamese</a> as well.</h3>

<p>Chef has an array <b>A</b> consisting of <b>N</b> integers (1-based indexing). He asks you to perform the following operation <b>M</b> times:</p>
<p>
<code>
<pre>	<b>for</b> i = 2 to <b>N</b>:
		<b>A</b><sub>i</sub> = <b>A</b><sub>i</sub> + <b>A</b><sub>i-1</sub>
</pre>
</code> 
</p>
<p>Your task is to find the <b>x<sup>th</sup></b> element of the array (i.e., <b>A<sub>x</sub></b>) after performing the above operation <b>M</b> times. As the answer could be large, please output it modulo 10<sup>9</sup> + 7.</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains three space-separated integers — <b>N</b>, <b>x</b>, and <b>M</b> — denoting the size of the array, index of the element you need to find, and the amount of times you need to repeat operation before finding the element, respectively. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, …, <b>A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer: <b>A<sub>x</sub></b> modulo 10<sup>9</sup> + 7. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>18<sup> </b></li>
<li><b>1</b> ≤ <b>A<sub>i<sub> </b> ≤ <b>10<sup>18<sup></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask 1 (8 points):</b>
<ul>
<li><b>1 ≤ x ≤ min{2, N}</b></li>
</ul> 
<b>Subtask 2 (24 points):</b>
<ul>
<li><b>1 ≤ N * M ≤ 10<sup>6</sup></b></li>
</ul>
<b>Subtask 3 (68 points): </b> No additional constraints</b>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 2 3
1 2 3
3 3 3 
1 2 3

<b>Output:</b>
5
15
</pre>

<h3>Explanation</h3>
<p>Values in the array <b>A</b>:</p>
<ul>
<li>Before the operations: <b>[1, 2, 3]</b></li>
<li>After the first operation: <b>[1, 3, 6]</b></li>
<li>After the second operation: <b>[1, 4, 10]</b></li>
<li>After the third operation: <b>[1, 5, 15]</b></li>
</ul>
</p>
<p><b>Since input file can be fairly large (about 8 MB), it's recommended to use fast I/O (for example, in C++, use scanf/printf instead of cin/cout).</b></p>