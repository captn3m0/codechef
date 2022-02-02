---
{"category_name":"medium","problem_code":"ONEKING","problem_name":"One Dimensional Kingdoms","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":"shiplu","date_added":"2-12-2014","tags":{"0":"easy","1":"greedy","2":"jan15","3":"nssprogrammer"},"editorial_url":"http://discuss.codechef.com/problems/ONEKING","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/ONEKING.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/ONEKING.pdf">Russian</a>.</h3>
<p><b>N</b> one dimensional kingdoms are represented as intervals of the form <b>[a<sub>i</sub> , b<sub>i</sub>]</b> on the real line.<br />
A kingdom of the form <b>[L, R]</b> can be destroyed completely by placing a bomb at a point <b>x</b> on the real line if <b>L<br />
≤ x ≤ R</b>.
</p>
<p>
Your task is to determine minimum number of bombs required to destroy all the one dimensional kingdoms.</p>
<h3>Input</h3>
<ul>
<li>
First line of the input contains <b>T</b> denoting number of test cases.
</li>
<li>
For each test case, first line contains <b>N</b> denoting the number of one dimensional kingdoms.<br />
</li>
<li>
For each next <b>N</b> lines, each line contains two space separated integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>.
</li>
</ul>
<h3>Output</h3>
<p>For each test case , output an integer denoting the minimum  number of bombs required.</p>
<h3>Constraints</h3>
<p>Subtask 1 (20 points) : <b>1 ≤ T ≤ 100 , 1 ≤ N ≤ 100 , 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤500 </b> </p>
<p>Subtask 2 (30 points) : <b>1 ≤ T ≤ 100 , 1 ≤ N ≤ 1000 , 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤ 1000  </b> </p>
<p>Subtask 3 (50 points) : <b>1 ≤ T ≤ 20 , 1 ≤ N ≤ 10<sup>5</sup>, 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤ 2000</b> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 3
2 5
6 9

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>There are three kingdoms [1,3] ,[2,5] and [6,9]. You will need at least 2 bombs<br />
to destroy the kingdoms. In one of the possible solutions, you can place two bombs at x = 2 and x = 6 . </p>
