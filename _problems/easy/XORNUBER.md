---
{"category_name":"easy","problem_code":"XORNUBER","problem_name":"Chef and the XORed Number ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"iscsi","date_added":"31-07-2015","tags":{"0":"basic","1":"bitwise","2":"cook61","3":"rustinpiece","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/XORNUBER","time":{"view_start_date":1440357600,"submit_start_date":1440357600,"visible_start_date":1440357600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/mandarin/XORNUBER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/russian/XORNUBER.pdf">Russian</a> as well.</h3>
<p>Given an integer <b>N</b>, Chef wants to find the smallest positive integer <b>M</b> such that the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise XOR</a> of <b>M</b> and <b>M+1</b> is <b>N</b>. If no such <b>M</b> exists output <b>-1</b>.</p>
<h3>Input</h3>
<p>The first line of input contain an integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contains an integer <b>N</b> for that test case.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number <b>M</b> or <b>-1</b> as described above.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2<sup>30</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p><b>First Example : </b> <b>M</b> desired in the problem would be 1. As bitwise XOR of 1 and 2 is equal to 3. </p>
