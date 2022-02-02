---
{"category_name":"medium","problem_code":"PSHTRG","problem_name":"Pishty and Triangles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"12-12-2017","tags":{"0":"fekete","1":"march18","2":"medium","3":"mergesort","4":"segment","5":"triangle"},"editorial_url":"https://discuss.codechef.com/problems/PSHTRG","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/PSHTRG.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/PSHTRG.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/PSHTRG.pdf">Vietnamese</a> as well.</h3>

<p>
Pishty is a little boy who lives in Khust, an ancient town with a castle and smart bears. Right now, he wants you to help him with a programming problem.
</p>

<p>
You are given a sequence <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> and <b>Q</b> queries. There are two types of queries:
<ul>
<li>1 <b>pos</b> <b>val</b> — Set <b>A<sub>pos</sub></b> = <b>val</b>.</li>
<li>2 <b>l r</b> — Find the maximum possible perimeter of a triangle with non-zero area whose sides are elements of the subsequence <b>A<sub>l</sub>, A<sub>l+1</sub>, ..., A<sub>r</sub></b>. Note that each element of the subsequence can only be used as the length of at most one side, i.e. the sides of each valid triangle must be elements <b>A<sub>x</sub></b>, <b>A<sub>y</sub></b>, <b>A<sub>z</sub></b>, where <b>l ≤ x &lt; y &lt; z ≤ r</b>.</li>
</ul>
</p>

<p>
For each query of the second type, compute the maximum possible perimeter or determine that no valid triangle exists.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains two space-separated integers <b>N</b> and <b>Q</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li><b>Q</b> lines follow. Each of these lines describes one query in the following format:
<ul>
<li>1 <b>pos</b> <b>val</b> for a query of the first type</li>
<li>2 <b>l</b> <b>r</b> for a query of the second type</li>
</ul></li>
</ul>

<h3>Output</h3>
<p>For each query of the second type, print a single line containing one integer — the maximum perimeter or 0 if no triangle can be formed.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>val</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li>1 ≤ <b>pos</b> ≤ <b>N</b></li>
</ul>

<h3> Subtasks:</h3>
<p><b>Subtask #1 (5 pts):</b> 1 ≤ <b>N</b>, <b>Q</b> ≤ 100</p> 

<p><b>Subtask #2 (25 pts):</b> 1 ≤ <b>N</b>, <b>Q</b> ≤ 2000</p>

<p><b>Subtask #3 (70 pts):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

5 4
3 1 8 9 7
2 1 5
1 2 12
2 1 3
2 2 5

<b>Output:</b>

24
0
29
</pre>

<h3>Explanation</h3>
<p>The first query asks us to find the maximum perimeter of a triangle using some of the elements {3, 1, 8, 9, 7}. We can take the elements 7, 8, and 9 and construct a triangle using these three elements as side lengths. This triangle has perimeter 7 + 8 + 9 = 24, which is the maximum possible perimeter. Hence the answer is 24.</p>

<p>The second query asks us to change the second element to 12.</p>

<p>The third query asks us to find the maximum perimeter of a triangle using some of the elements {3, 12, 8}. These three elements do not form a triangle, hence the answer is 0.</p>

<p>The fourth query asks us to find the maximum perimeter of a triangle using some of the elements {12, 8, 9, 7}. We can take the elements 8, 9 and 12 and make a triangle using these three elements as side lengths. This triangle has perimeter 8 + 9 + 12 = 29, which is maximum possible. Hence the answer is 29.</p>
