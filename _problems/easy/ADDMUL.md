---
{"category_name":"easy","problem_code":"ADDMUL","problem_name":"Addition and Multiplication","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"mugurelionut","date_added":"6-05-2014","tags":{"0":"devuy11","1":"july15","2":"lazypropagation","3":"medium","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/ADDMUL","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/ADDMUL.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/ADDMUL.pdf" target="_blank">Russian</a>.</h3>
<p>You are given a one dimensional integer array <b>A</b> of length <b>N</b>. You need to maintain the array under <b>Q</b> queries of the following four types. Assume 1-based indexing and M = 10<sup>9</sup> + 7.</p>
<p><b>Query 1</b> : 1 x y v <br /><br /> This implies adding v to array <b>A</b> to all the indices from x to y, i.e.,<br /> <code></code></p>
<pre>for (i = x; i &lt;= y; i++)	
	<b>A</b><sub>i</sub> += v;
	<b>A</b><sub>i</sub> %= M; 
</pre>
<p> </p>
<p><b>Query 2</b> : 2 x y v <br /> This implies multiplying the scalar v with the array <b>A</b> for all the indices from x to y, i.e.,<br /> <code></code></p>
<pre>for (i = x; i &lt;= y; i++)	
        <b>A</b><sub>i</sub> *= v
        <b>A</b><sub>i</sub> %= M
</pre>
<p> </p>
<p><b>Query 3</b> : 3 x y v <br /> This implies initializing the array <b>A</b> at all the indices from x to y with the value v, i.e.,<br /> <code></code></p>
<pre>for (i = x; i &lt;= y; i++)	
	<b>A</b><sub>i</sub> = v 
</pre>
<p> </p>
<p><b>Query 4</b> : 4 x y<br /><br /> This is a report query which needs to find the sum of the values in <b>A</b> from x to y, i.e.,<br /> <code></code></p>
<pre>sum = 0;
for (i = x; i &lt;= y; i++)
	sum += <b>A</b><sub>i</sub>
	sum %= M
Output sum.
</pre>
<p> </p>
<p><b>Note:</b> a%b represents the remainder of a when divided by b.</p>
<h3>Input</h3>
<ul>
<li>First line contains two space separated integers <b>N</b>, <b>Q</b>.</li>
<li>Next line contains <b>N</b> space separated integers denoting the array <b>A</b>.</li>
<li>Next <b>Q</b> lines contain queries which can be of any of the above four types.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each query of type 4, output a single integer corresponding to the answer in a single line.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ Initial value of <b>A</b><sub>i</sub> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>v</b> ≤ 10<sup>9</sup></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> <b>Subtask 1</b>: Queries are of type 1, 3 and 4. <b>Points - 5</b>.</li>
<li> <b>Subtask 2</b>: Queries are of type 2, 3 and 4. <b>Points - 5</b>.</li>
<li> <b>Subtask 3</b>: Queries are of type 1, 2 and 4. <b>Points - 30</b>.</li>
<li> <b>Subtask 4</b>: All the queries are present. <b>Points - 60</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 4
1 2 3 4
4 1 4
1 1 3 10
2 2 4 2
4 1 4

<b>Output:</b>
10
69

</pre>
<h3>Explanation</h3>
<p>Initial <b>A</b> : [1, 2, 3, 4]<br /> Result of first query : 1 + 2 + 3 + 4 = 10<br /> <b>A</b> after second query: [ 11, 12, 13, 4]<br /> <b>A</b> after third query : [ 11, 24, 26, 8]<br /> Result of fourth query : 11 + 24 + 26 + 8 = 69</p>