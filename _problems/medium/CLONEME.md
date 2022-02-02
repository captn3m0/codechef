---
{"category_name":"medium","problem_code":"CLONEME","problem_name":"Cloning","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"10-05-2017","tags":{"0":"sidhant007"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/CLONEME.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/CLONEME.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/CLONEME.pdf">Vietnamese</a> as well.</h3>

<p>Given an array <b>A</b> consisting of <b>N</b> integers, you have to execute <b>Q</b> queries on it. These queries ask you to determine whether the two sub-arrays <b>a</b> to <b>b</b> and <b>c</b> to <b>d</b>, which are of equal length, are <i>similar</i> or not. The two sub-arrays <b>a</b> to <b>b</b> and <b>c</b> to <b>d</b> are said to be <i>similar</i>, if, after being sorted individually and then compared element by element, they have at most one mismatch. The output should be YES or NO for each query.</b>

<p> Note - The two sub-arrays can intersect each other and during the query process they will not affect each other in any way. </p>

<h3>Input</h3>
<p>The first line of the input contains <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers: <b>N</b> and <b>Q</b>, denoting the number of elements in the array and the number of queries respectively.</p>
<p>The second line contains <b>N</b> space-separated integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the input array <b>A</b>. </p>
<p>The next <b>Q</b> lines contain the queries.</p>
<p>The queries are given as "<b>a b c d</b>" (without the double quotes) where <b>a</b> and <b>b</b> are the left and right end point of the first sub-array and <b>c</b> and <b>d</b> are the left and right end point of the second sub-array. Both end points are included in a sub-array.</p>

<h3>Output</h3>
<p>For each query output "YES" or "NO" (without the double quotes) depending on whether the two sub-arrays given in that query are <i>similar</i> or not.</p>


<h3>Constraints</h3>
<p><b>a</b>, <b>b</b>, <b>c</b> and <b>d</b> for the queries will always be in the range from <b>1</b> to <b>N</b> where <b>a</b> ≤ <b>b</b>, <b>c</b> ≤ <b>d</b></p> and <b>b</b> - <b>a</b> = <b>d</b> - <b>c</b></p>
<p><b>Time limit = 2 seconds </b></p>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>10<sup>3</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #2 (20 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #3 (70 points):</b>
<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ <b>N, Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A[i]</b> ≤ 10<sup>5</sup></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
6 3
1 3 4 2 3 4
1 3 4 6
1 2 5 6
3 5 2 4

<b>Output:</b>
YES
NO
YES
</pre>

<h3>Explanation</h3>
<p>In the first query the first sub-array looks like [1, 3, 4] on sorting and the second sub-array looks like [2, 3, 4] on sorting. These two sub-arrays only differ at first position so they are <i>similar</i>.</p>
<p>In the second query the first sub-array on sorting looks like [1, 3] on sorting and the second sub-array looks like [3, 4] on sorting. These two sub-arrays differ at both the positions so they are not <i>similar</i>.</p>
<p>In the third query the first sub-array look like [2, 3, 4] on sorting and the second sub-array also looks like [2, 3, 4] on sorting. Since these two sub-arrays don't differ at any position so they are <i>similar</i>.</p>