---
{"category_name":"easy","problem_code":"BEARSEG","problem_name":"Bear and Segments","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"lg5293","date_added":"29-04-2017","tags":{"0":"admin2","1":"bst","2":"easy","3":"ltime47","4":"partial"},"time":{"view_start_date":1493485200,"submit_start_date":1493485200,"visible_start_date":1493485200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/mandarin/BEARSEG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/russian/BEARSEG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/vietnamese/BEARSEG.pdf">Vietnamese</a> as well.</h3>

<p>
Bear Limak has a sequence of <b>N</b> non-negative integers <b>A</b><sub>1</sub>, <b>A</b><sub>2</sub>, ..., <b>A<sub>N</sub></b>. He defines the score of a segment (consecutive subsequence) as its sum of elements modulo <b>P</b> (not necessarily prime). Find the maximum score of a non-empty segment, and also find the number of segments with this maximum score.
</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>For each test case, the first line of the input contains two space separated integers, <b>N</b> and <b>P</b>.</p>
<p>The second line contains <b>N</b> space separated integers denoting the sequence.</p>

<h3>Output</h3>
<p>For each test case, output two space separated integers denoting the maximum score of a segment and the number of segments with the score, respectively.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>P</b> ≤ 10<sup>9</sup></li>
<li>0 ≤ <b>A</b><sub>i</sub> ≤ 10<sup>9</sup></li>
</ul> </br>
	
<p>
<b>Subtask #1: (25 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
</ul>
</p>

<p>
<b>Subtask #2: (25 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
</ul>
</p>

<p>
<b>Subtask #3: (50 points)</b>
<ul>
<li>original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
4
2 3
1 2
3 5
2 4 3
3 100
1 3 5
4 3
1 2 3 4

<b>Output:</b>
2 1
4 2
9 1
2 2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are three segments - [1], [2] and [1, 2]. Sum of these segments are 1, 2 and 3 respectively. Sum of these segments modulo 3 will be 1, 2 and 0. Maximum score among these is 2. There is also only one segment with this score.</p>

<p><b>Example case 2.</b> There are six segments - [2], [4], [3], [2, 4], [4, 3] and [2, 4, 3]. Sum of these segments are 2, 4, 3, 6, 7, 9 respectively. Sum of these segments modulo 5 will be 2, 4, 3, 1, 2, 4. Maximum score among these is 4. And there are two segments with this score.</p>