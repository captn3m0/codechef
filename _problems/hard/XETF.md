---
{"category_name":"hard","problem_code":"XETF","problem_name":"Euler Totient Function Extended","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL"},"max_timelimit":"4 - 6","source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"karanaggarwal","date_added":"21-03-2015","tags":{"0":"easy","1":"inclusn","2":"ltime23","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/XETF","time":{"view_start_date":1430037000,"submit_start_date":1430037000,"visible_start_date":1430037000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/mandarin/XETF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/russian/XETF.pdf">Russian</a>.</h3>
<p>Euler totient function (denoted by <b>phi(N)</b>) for a positive integer <b>N</b> is defined as number of positive integers less than or equal  <b>N</b> that are coprime to <b>N</b></p>
<p>Let's generalize this concept of Euler totient function. For positive integer <b>N</b> let's write out the integers that are less than or equal to <b>N</b> and are coprime to <b>N</b>. We'll get a list of integers of the form <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>M</sub></b>, where <b>M = phi(N)</b>. Let's denote <b>E<sub>K</sub>(N) = A<sub>1</sub><sup>K</sup> + A<sub>2</sub><sup>K</sup>+...+A<sub>M</sub><sup>K</sup></b>. This way we obtain something more general version of Euler totient function, in particular, <b>E<sub>0</sub>(N) = phi(N)</b> for every positive integer <b>N</b>.</p>
<p>Your task is to calculate <b>E<sub>K</sub>(N)</b>. As answer could be large, print your answer modulo <b>10<sup>9</sup>+7</b> </p>
<h3>Input</h3>
<p> The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the problem i.e. the value of <b>E<sub>K</sub>(N)</b> modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>128</b></li>
</p>
</ul>
<p>Subtask 1 (7 points):</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p>Subtask 2 (10 points):</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>12</sup></b></li>
<li><b>K</b> = <b>0</b></li>
</ul>

<p>Subtask 3 (28 points):</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>12</sup></b></li>
<li><b>K</b> = <b>1</b></li>
</ul>

<p>Subtask 4 (55 points):</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>12</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>256</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
10 1
7 0

<b>Output:</b>
20
6
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The numbers that are coprime to <b>10</b> are <b>1, 3, 7, 9</b>. Their sum is <b>20</b>.</p>
<p><b>Example case 2.</b> <b>7</b> is a prime number, so any integer that is less than <b>7</b> is coprime to it.</p>
