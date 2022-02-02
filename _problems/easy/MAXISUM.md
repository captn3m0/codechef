---
{"category_name":"easy","problem_code":"MAXISUM","problem_name":"maximize the sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"6-02-2016","tags":{"0":"admin2","1":"march16","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MAXISUM","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/MAXISUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/MAXISUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/MAXISUM.pdf">Vietnamese</a> as well.</h3>
<p>You are given two integer arrays <b>A</b> and <b>B</b> each of size <b>N</b>. Let us define <em>interaction</em> of arrays <b>A</b> and <b>B</b> to be the sum of <b>A[i] * B[i]</b> for each <b>i</b> from <b>1</b> to <b>N</b>.
</p>
<p>
You want to maximize the value of <em>interaction</em> of the arrays. You are allowed to make at most <b>K</b> (possibly zero) operations of following kind.</p>
<ul>
<li>In a single operation, you can increase or decrease any of the elements of array <b>A</b> by <b>1</b>.</li>
</ul>

<p>
Find out the maximum value of <em>interaction</em> of the arrays that you can get.
</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>For each test case:
<ul>
<li>First line contains two space separated integers <b>N, K</b>.</li>
<li>Second line contains <b>N</b> space separated integers denoting array <b>A</b>.</li>
<li>Third line contains <b>N</b> space separated integers denoting array <b>B</b>.</li>
</ul>
</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single integer denoting the answer of the problem.
</li></ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>10</b></li>
<li>1 ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>0 ≤ <b>|A[i]|, |B[i]|</b> ≤ <b>10<sup>5</sup></b></li>
<li>0 ≤ <b>K</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (25 points)</b></p>
<ul>
<li>1 ≤ <b>N</b> ≤ <b>10</b></li>
<li>0 ≤ <b>|A[i]|, |B[i]|</b> ≤ <b>10</b></li>
<li>0 ≤ <b>K</b> ≤ <b>10</b></li>
</ul>

<p>
<b>Subtask #2 : (35 points)</b></p>
<ul>
<li>1 ≤ <b>N</b> ≤ <b>1000</b></li>
<li>0 ≤ <b>|A[i]|, |B[i]|</b> ≤ <b>1000</b></li>
<li>0 ≤ <b>K</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<p>
<b>Subtask #3 : (40 points)</b></p>
<ul>
<li>No additional constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
1 2
-2 3
3 5
1 2 -3
-2 3 -5

<b>Output:</b>
10
44
</pre><h3>Explanation</h3>
<p><b>In the first example</b>,<br />
you can increase value <b>A[2]</b> using two two operations. Now, <b>A</b> would be [1, 4]. The value of <em>interaction</em> will be 1 * -2 + 4 * 3 = -2 + 12 = 10.
</p>
