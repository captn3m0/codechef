---
{"category_name":"school","problem_code":"TRICOIN","problem_name":"Coins And Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"19-04-2016","tags":{"0":"binary","1":"cakewalk","2":"implementation","3":"ltime35","4":"ma5termind","5":"mathematics","6":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/TRICOIN","time":{"view_start_date":1462036200,"submit_start_date":1462036200,"visible_start_date":1462036200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/mandarin/TRICOIN.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/russian/TRICOIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/vietnamese/TRICOIN.pdf">Vietnamese</a> as well.</h3>

<p>Chef belongs to a very rich family which owns many gold mines. Today, he brought <b>N</b> gold coins and decided to form a triangle using these coins. Isn't it strange?</p>

<p>Chef has a unusual way of forming a triangle using gold coins, which is described as follows:</p>
<ul>
<li>He puts <b>1</b> coin in the <b>1<sup>st</sup></b> row.</li>
<li>then puts <b>2</b> coins in the <b>2<sup>nd</sup></b> row.</li>
<li>then puts <b>3</b> coins in the <b>3<sup>rd</sup></b> row.</li>
<li> and so on as shown in the given figure.</li>
</ul>

<img src="https://s3.amazonaws.com/hr-challenge-images/15909/1461147954-8b9f4b7d27-A.png" title="A.png" />

<p>Chef is interested in forming a triangle with maximum possible height using at most <b>N</b> coins. Can you tell him the maximum possible height of the triangle?</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. </p>
<p>The first and the only line of each test case contains an integer <b>N</b> denoting the number of gold coins Chef has.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the maximum possible height of the triangle that Chef can get.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ N ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (48 points) : <b>1 ≤ N ≤ 10<sup>5</sup></li></b>
<li>Subtask 2 (52 points) : <b>1 ≤ N ≤ 10<sup>9</sup></li></b>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
<tt>3
3
5
7</tt>

<b>Output</b>
<tt>2
2
3</tt>
</pre>

<h3>Explanation</h3>
<ul>
<li><b>Test 1:</b> Chef can't form a triangle with height > 2 as it requires atleast 6 gold coins.</li>
<li><b>Test 2:</b> Chef can't form a triangle with height > 2 as it requires atleast 6 gold coins.</li>
<li><b>Test 3:</b> Chef can't form a triangle with height > 3 as it requires atleast 10 gold coins.</li>
</ul>