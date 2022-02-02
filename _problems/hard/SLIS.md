---
{"category_name":"hard","problem_code":"SLIS","problem_name":"Second LIS","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":null,"date_added":"9-10-2015","tags":{"0":"cook63","1":"medium","2":"segment","3":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/SLIS","time":{"view_start_date":1445193000,"submit_start_date":1445193000,"visible_start_date":1445193000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/mandarin/SLIS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/russian/SLIS.pdf">Russian</a> as well.</h3>
<p>
Given a sequence of <b>n</b> numbers <b>A</b>[<b>1</b>..<b>n</b>], a length-<b>k</b> increasing subsequence (IS) is <b>A</b>[<b>i</b><sub>1</sub>], <b>A</b>[<b>i</b><sub>2</sub>], ..., <b>A</b>[<b>i</b><sub>k</sub>] such that both the indices <b>i</b> and values are strictly increasing. Among all possible IS's, denote the maximum length as <b>L</b>. Now we are interested in finding how many length-<b>(L-1)</b> IS's are there.
</p>
<p>
Two IS's are different if and only if their indices are different.
</p>
<p>
Since the answer could be very large, you are just required to output its remainder with <b>10^9 + 7</b>.
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the total number of test cases.</p>
<p>For each test case, the first line contains a single integer <b>n</b>, and the second line contains the space-separated sequence <b>A</b>[<b>1</b>..<b>n</b>].</p>
<h3>Output</h3>
<p>For each test case, output the answer per line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10^5</b></li>
<li><b>1</b> &lt;= <b>A</b>[<b>i</b>] &lt;= <b>10^9</b></li>
<li><b>1</b> &lt; <b>L</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
1 1 2
5
6 8 1 2 3
5
2 3 1 6 8
<b>Output:</b>
3
4
5
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>L</b> = 2. There are 3 different length-1 IS's.</p>
