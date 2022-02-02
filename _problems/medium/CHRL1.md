---
{"category_name":"medium","problem_code":"CHRL1","problem_name":"Chef and Shop","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"12-01-2014","tags":{"0":"cakewalk","1":"combinatorics","2":"furko","3":"ltime08"},"editorial_url":"http://discuss.codechef.com/problems/CHRL1","time":{"view_start_date":1390725000,"submit_start_date":1390725000,"visible_start_date":1390725000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL1.pdf">Russian</a> also.</h3>
<p>Chef likes shopping, and especially he likes to buy oranges. But right now he is short of money. He has only <b>k</b> rubles. There are <b>n</b> oranges. The <b>i-th</b> one costs <b>cost<sub>i</sub></b> rubles and has weight equal to <b>weight<sub>i</sub></b>. Chef wants to buy a set of oranges with the maximal possible weight. Please help him, and tell him this weight.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>  denoting the number of test cases. The first line of each test case contains two numbers <b>n</b> and <b>k</b>. The following <b>n</b> lines contain two numbers <b>cost<sub>i</sub></b> and <b>weight<sub>i</sub></b> respectively. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing maximal weight among all the affordable sets of oranges. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 250 </b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b> 100000000 </b></li>
<li><b>1</b> ≤ <b>weight<sub>i</sub></b> ≤ <b> 100000000 </b></li>
<li><b>1</b> ≤ <b>cost<sub>i</sub></b> ≤ <b> 100000000 </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 3
2 2
3 4
2 1
2 2
3 5

<b>Output:</b>
2
5
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (30 points): All the oranges' weights equals to 1.<br /><br />
Subtask 2 (30 points):  <b> N = 5  </b><br /><br />
Subtask 2 (40 points):  See the constraints <br /></p>
