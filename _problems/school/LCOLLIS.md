---
{"category_name":"school","problem_code":"LCOLLIS","problem_name":"Collisions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"karanaggarwal","date_added":"11-06-2016","tags":{"0":"basic","1":"cakewalk","2":"ltime37","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/LCOLLIS","time":{"view_start_date":1466874000,"submit_start_date":1466874000,"visible_start_date":1466874000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/mandarin/LCOLLIS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/russian/LCOLLIS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME37/vietnamese/LCOLLIS.pdf">Vietnamese</a> as well.</h3>


<p>Once <b>N</b> boys and <b>M</b> girls attended a party. You are given a matrix <b>A</b> of <b>N</b> rows and <b>M</b> columns where <b>A<sub>ij</sub></b> is <b>1</b> if the <b>i-th</b> boy likes the <b>j-th</b> girl, otherwise it will be 0. Note that it is not necessary that if a boy <b>x</b> likes girl <b>y</b>, then girl <b>y</b> should like boy <b>x</b>.</p>

<p>You know that if there are two different boys <b>x</b> and <b>y</b>, who both like girl <b>z</b>, then there will be a collision.
Can you calculate the number of different collisions at this party? Note that order of boys in the collision doesn't matter.</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space separated integers <b>N</b>, <b>M</b> denoting the number of boys and girls, respectively.</p>
<p>Each of the following <b>N</b> lines contain <b>M</b> characters, each of them is either <b>'0'</b> or <b>'1'</b>.</p>

<h3>Output</h3>
<p>For each test case output a single line containing an integer corresponding to the number of collisions at the party.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 3
111
100
110
000
2 2
10
01

<b>Output:</b>
4
0
</pre>

<h3>Explanation</h3>
<p><b>Example Case 1.</b> All three boys like the first girl, so there are <b>(1, 2, 1), (1, 3, 1), (2, 3, 1)</b> collisions with her. Boys <b>1</b> and <b>3</b> both like the second girl so this is one more collision. Only one boy likes the third girl, so there are no collisions with her and thus we have <b>4</b> collisions total.</p>

<p><b>Example Case 2.</b> For each girl there is only one boy who likes her, so there are no collisions at all.</p>