---
{"category_name":"medium","problem_code":"RESTPERM","problem_name":"Restore the Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"mgch","date_added":"5-10-2016","tags":{"0":"divide","1":"ltime41","2":"recursion","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/RESTPERM","time":{"view_start_date":1477760400,"submit_start_date":1477760400,"visible_start_date":1477760400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/mandarin/RESTPERM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/russian/RESTPERM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/vietnamese/RESTPERM.pdf">Vietnamese</a> as well.</h3>

<p>Alex, Kostya, Andrew and Sergey have recently attended the famous Russian competitive programming camp.</p>

<p>One day, during the excursion they've became bored. Especially Sergey. So he asked Alex for some nice problem they can think about to dispel the boredom. And Alex told the following problem:</p>

<p>There is an <b>1</b>-indexed permutation <b>A</b> of the first <b>N</b> positive integers, which is not known. You can ask two following kinds of queries:
<ul>
<li><b>1 X Y D</b> : is it true that |<b>A<sub>X</sub> - A<sub>Y</sub></b>| is divisible by <b>D</b> without remainder?</li>
<li><b>2 X Y</b> : is it true that <b>A<sub>X</sub> < A<sub>Y</sub></b></li>
</ul>
The task was to restore the permutation <b>A</b> by asking the queries of the following form. There are limits on the amount of queries of each type you can ask.
</p>

<p>Andrew and Kostya came up with the solution very quickly. But Sergey was really puzzled with this task. However, after thinking for some time, he came up with a solution too.</p>

<p>And then he figured out that he actually misheard the original problem that was a really easy one. </p>

<p>First Sergey got upset because of spending time for solving the non-existing problem, but then he realized that he can give this problem in a contest.</p>

<p>So he proposes to solve his version of the problem. :)</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first (and only) line of each test case contains a single integer <b>N</b> denoting the number of numbers in the permutation.</p>

<h3>Output</h3>
<p>For each test case, output <b>Q</b> lines.</p>

<p>On every of these <b>Q</b> output first the type of the query, then the parameters, separated with single spaces. There can be three possible query types: the first two with the same format from the statement and the following one:<ul>
<li><b>3 A<sub>1</sub> A<sub>2</sub> ... A<sub>N</sub></b> denoting the resulting permutation.</li>
</ul>
There should always be only one query of the third type per test case -- the last one.</p>
<p>For the queries (types <b>1</b> and <b>2</b>) you output, you will receive a feedback. The judge program will output "Yes" or "No" (both without quotes), denoting the answer to the corresponding query.</p>
<p>In a test case, you can ask no more than <b>13 × N</b> queries of the first type and no more than <b>N-1</b> queries of the second type. It is guaranteed that it will be possible to restore the permutation under the given constraints.</p>
<p>Please flush output buffer anytime you output a query.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1 ≤</b> sum of <b>N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤</b> <b>X, Y, D</b> ≤ <b>N</b></li>
<li>Subtask 1 (16 points): <b>1 ≤</b> <b>N ≤ 3</b></li>
<li>Subtask 2 (25 points): <b>1 ≤</b> <b>N ≤ 13</b></li>
<li>Subtask 3 (30 points): <b>1 ≤</b> <b>N ≤ 100</b></li>
<li>Subtask 4 (29 points): <b>1 ≤</b> <b>N ≤ 10<sup>4</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2
2</tt>

<b>Output:</b>
<tt>2 1 2
> (FEEDBACK) No
3 2 1
2 1 2
> (FEEDBACK) Yes
3 1 2</tt>
</pre>
<p> </p>
