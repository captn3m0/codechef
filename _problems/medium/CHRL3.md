---
{"category_name":"medium","problem_code":"CHRL3","problem_name":"Chef and Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"15-01-2014","tags":{"0":"dynamic","1":"easy","2":"furko","3":"ltime08"},"editorial_url":"http://discuss.codechef.com/problems/CHRL3","time":{"view_start_date":1390725000,"submit_start_date":1390725000,"visible_start_date":1390725000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL3.pdf">Russian</a> also.</h3>
<p>Chef plays with the sequence of <b>N</b> numbers. During a single move Chef is able to choose a non-decreasing subsequence of the sequence and to remove it from the sequence. Help him to remove all the numbers in the minimal number of moves. </p>
<h3>Input</h3>
<p>The first line of each test case contains a single <b>N</b> denoting the number of integers in the given sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given sequence</p>
<h3>Output</h3>
<p>Output a single line containing the minimal number of moves required to remove all the numbers from the sequence.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000.</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>100000.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 
1 2 3

<b>Output:</b>
1

</pre><pre><b>Input:</b>
4
4 1 2 3

<b>Output:</b>
2

</pre><h3>Scoring</h3>
<p>Subtask 1 (10 points):  <b> N = 10  </b> <br /><br />
Subtask 2 (40 points):  <b> N = 2000  </b> <br /><br />
Subtask 2 (50 points):  <b> N = 100000  </b> <br /></p>
