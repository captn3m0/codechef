---
{"category_name":"hard","problem_code":"PERMUTE","problem_name":"Just Some Permutations 3","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"tuananh93","date_added":"27-03-2013","tags":{"0":"ad","1":"june13","2":"medium","3":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/PERMUTE","time":{"view_start_date":1371462262,"submit_start_date":1371462262,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Given two integers <b>N</b> and <b>M</b>, find how many permutations of <b>1, 2, ..., N</b> (first <b>N</b> natural numbers) are there where the sum of <b>every two adjacent</b> numbers is at most <b>M</b>.</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> which is the number of test cases. Each of the following <b>T</b> lines contain two integers <b>N</b> and <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case output a single one line containing number of such permutations modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000(10<sup>5</sup>)</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000000(10<sup>6</sup>)</b></li>
<li><b>N</b> &lt; <b>M</b> &lt; <b>2*N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 5
5 8
<b>Output:</b>
4
72
</pre><h3>Explanation</h3>
<p>For the 1st case all permutations are:  {2,3,1,4},    {3,2,1,4}, {4,1,2,3}  and {4,1,3,2}.</p>
