---
{"category_name":"easy","problem_code":"ASP","problem_name":"Almost Sorted Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.2,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":null,"date_added":"10-10-2015","tags":{"0":"ad","1":"cook63","2":"shangjingbo","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ASP","time":{"view_start_date":1445193000,"submit_start_date":1445193000,"visible_start_date":1445193000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/mandarin/ASP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/russian/ASP.pdf">Russian</a> as well.</h3>
<p>
Given a sequence of <b>n</b> <b>distinct</b> numbers <b>a</b>[<b>1</b>..<b>n</b>], we want to sort them in an ascending order.
</p>
<p>
An interesting property of some sequences is that all numbers are almost at their correct position! More formally, the distance between the current position of any value is at most 1 from its correct position in a sorted order.
</p>
<p>
Now, you want to verify whether the input sequence has such a property.
</p>
<p>
Note that the time limit for this problem is 0.2 seconds. Please try to write a very efficient algorithm and implementation.
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the total number of test cases.</p>
<p>For each test case, the first line contains a single integer <b>n</b>, and the second line contains <b>a</b>[<b>1</b>..<b>n</b>] as a single space-separated list.</p>
<h3>Output</h3>
<p>For each test case, output "YES" or "NO" (without quotes) to indicate whether the input sequence has such a property.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10^6</b></li>
<li><b>1</b> &lt;= <b>a</b>[<b>i</b>] &lt;= <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
5
2 4 1 3 5
<b>Output:</b>
YES
NO
</pre>