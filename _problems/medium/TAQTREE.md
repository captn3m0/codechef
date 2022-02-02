---
{"category_name":"medium","problem_code":"TAQTREE","problem_name":"Queries On Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"stzgd","date_added":"6-12-2014","tags":{"0":"dfs","1":"hld","2":"ltime19","3":"medium","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAQTREE","time":{"view_start_date":1419755400,"submit_start_date":1419755400,"visible_start_date":1419755400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TAQTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TAQTREE.pdf">Russian</a>.</h3>
<p>You are given a tree of <b>N</b> nodes numbered from <b>1</b> to <b>N</b>.<br />
The <b>i</b><sup>th</sup> edge connecting node <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> has a weight of <b>w<sub>i</sub></b>.
</p>
<p>
Your target is to handle the queries of the following two types:</p>
<ul>
<li>
  <b>"1 i c"</b> : Update the weight of <b>i</b><sup>th</sup> edge with the new weight <b>c</b>.<br />
  (1 represents the query type).</li>
<p> </p>
<li>
  <b>"2 u v"</b> : Find the length of the path from node <b>u</b> to <b>v</b>. (2 represents the query type).</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>N</b>.</li>
<li>Each of the next <b>N - 1</b> lines contains three integers <b>u v w</b>, representing an edge<br />
  between <b>u</b> and <b>v</b> with the weight of <b>w</b>.</li>
<li>The next line contains a single integer <b>Q</b> representing the number of queries</li>
<li>Each of the next <b>Q</b> lines contains three integers representing a query as described above.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each query of type 2, output the answer in a single line.</li>
</ul>
<h3>Constraints</h3>
<p><b>All test:</b></p>
<ul>
<li><b>1</b> ≤ <b>i</b> &lt; <b>N</b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b>; <b>u</b> ≠ <b>v</b></li>
<li><b>1</b> ≤ <b>w, c</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p><b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>3</sup></b></li>
</ul>

<p><b>60 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 2
2 3 4
4 2 3
5 4 1
3
2 5 3
1 3 1
2 5 3

<b>Output:</b>
8
6

</pre><h3>Explanation</h3>
<p>The path from 5 to 3 is 5 -> 4 -> 2 -> 3. Initially this path has the length of 1 + 3 + 4 = 8.<br />
After the weight of the edge connect 4 and 2 was changed to 1, the new length of the path is 1 + 1 + 4 = 6.</p>
