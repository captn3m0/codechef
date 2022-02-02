---
{"category_name":"medium","problem_code":"KCONNECT","problem_name":"Chef And A Complete Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"pushkarmishra","date_added":"25-10-2015","tags":{"0":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/KCONNECT","time":{"view_start_date":1448785800,"submit_start_date":1448785800,"visible_start_date":1448785800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/mandarin/SVNTR.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/russian/SVNTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/vietnamese/SVNTR.pdf">Vietnamese </a> as well.</h3>


<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/mandarin/KCONNECT.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/russian/KCONNECT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME30/vietnamese/KCONNECT.pdf"> Vietnamese</a></h3>


<p>Chef loves to play with graphs. Today, Chef has a <a href="https://en.wikipedia.org/wiki/Complete_graph">complete graph</a> <b>G</b> consisting of <b>N</b> vertices and he is eager to count the number of non-empty subsets of the edge set
 of <b>G</b> such that the removal of any chosen subset separates the graph into exactly <b>K</b> connected components. Chef is unable to solve this task on his own and has, therefore, requested your assistance. Please help him.</p>

<p>Since the required answer can be very large, Print it modulo <b>M</b>.</p>

<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. First and the only line of each test case contains <b>3</b> space separated integers — <b>N</b>, <b>K</b> and <b>M</b> — denoting the number of vertices in the graph <b>G</b>, required number of connected components, and the modulus.</p>

<h3>Output:</h3>
<p>For each test case, output the required answer.</p>

<h3>Constraints:</h3>
<ul>
<b><li>1 ≤ T ≤ 50</li></b>
<b><li>1 ≤ N ≤ 100</li></b>
<b><li>1 ≤ K ≤ N</li></b>
<b><li>1 ≤ M ≤ 10<sup>9</sup></li></b>
</ul>

<h3>Subtasks:</h3>
<ul>
<b><li>Subtask 1: 1 ≤ N ≤ 6 ( 25 pts )</li></b>
<b><li>Subtask 2: 1 ≤ N ≤ 50 ( 25 pts )</li></b>
<b><li>Subtask 3: 1 ≤ N ≤ 100, M is prime ( 25 pts )</li></b>
<b><li>Subtask 4: Original Constraints ( 25 pts ) </li></b>
</ul>

<h3>Example:</h3>
<pre>
<b>Input:</b>
5
2 2 3
3 1 5
4 3 7
4 2 11
5 1 10

<b>Output:</b>
1
3
6
8
7

</pre>

<h3>Explanation:</h3>
<img src="https://s3.amazonaws.com/hr-challenge-images/3194/1448608384-4e93622266-final_image.png" title="final_image.png" />