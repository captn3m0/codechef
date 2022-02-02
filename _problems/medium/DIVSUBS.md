---
{"category_name":"medium","problem_code":"DIVSUBS","problem_name":"Divisible Subset","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"stzgd","date_added":"25-04-2014","tags":{"0":"ltime12","1":"pigeonhole","2":"simple","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DIVSUBS","time":{"view_start_date":1401006600,"submit_start_date":1401006600,"visible_start_date":1401006600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/mandarin/DIVSUBS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/russian/DIVSUBS.pdf">Russian</a>.</h3>
<p>You are given a multiset of <b>N</b> integers. Please find such a nonempty subset of it that the sum of the subset's elements is divisible by <b>N</b>. Otherwise, state that this subset doesn't exist.</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br />
The first line of each test consists of a single integer <b>N</b> - the size of the multiset.<br /><br />
The second line of each test contains <b>N</b> single space separated integers - the multiset's elements.</p>
<h3>Output</h3>
<p>For each test case output:</p>
<ul>
<li><b>-1</b> if the required subset doesn't exist</li>
<li>If the required subset exists, output two lines. Output the size of the subset on the first line and output the list of indices of the multiset's element that form the required subset. Of course, any number can be taken in the subset no more than once.</li>
</ul>
<p>If there are several such subsets, you can output any.</p>
<h3>Constraints</h3>
<p><ul>
<li>1 &lt;= The sum of <b>N</b> over all the test cases &lt;= 10<sup>5</sup></li>
<li>Each element of the multiset is a positive integer, not exceeding 10<sup>9</sup>.</li>
<li>1 &lt;= <b>N</b> &lt;= 15 : 37 points. </li>
<li>1 &lt;= <b>N</b> &lt;= 1000 : 24 points.</li>
<li>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup> : 39 points. </li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
4 6 10

<b>Output:</b>
1
2

</pre><h3>Explanation</h3>
<p>We can pick {6} as the subset, then its sum is 6 and this is divisible by 3 - the size of the initial multiset.</p>
