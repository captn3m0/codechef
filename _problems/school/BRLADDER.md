---
{"category_name":"school","problem_code":"BRLADDER","problem_name":"Bear and Ladder","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"kingofnumbers","date_added":"24-03-2017","tags":{"0":"cakewalk","1":"errichto","2":"ltime46"},"editorial_url":"https://discuss.codechef.com/problems/BRLADDER","time":{"view_start_date":1490461200,"submit_start_date":1490461200,"visible_start_date":1490461200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/mandarin/BRLADDER.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/russian/BRLADDER.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/vietnamese/BRLADDER.pdf">Vietnamese</a> as well.</h3>


<p>Bearland has infinitely many cities, numbered starting from 1.
Some pairs of cities are connected with bidirectional roads:</p>

<ul>
  <li>There are roads 1-2, 3-4, 5-6, 7-8, and so on (there is a road between cities 2*i+1 and 2*i+2 for every non-negative integer i).</li>
  <li>There are roads 1-3, 3-5, 5-7, 7-9, ... (between every two consecutive odd numbers).</li>
  <li>There are roads 2-4, 4-6, 6-8, 8-10, ... (between every two consecutive even numbers).</li>
</ul>

<p>This is how the first few cities and roads between them look like:</p>

<p><img src="https://codechef_shared.s3.amazonaws.com/uploads/2017/03/LTIME46/BRLADDER.png" /></p>

<p>
You are given <b>Q</b> queries.
In each query, for the given pair of different cities <b>a</b> and <b>b</b>, you should check if there is a road between them.
For each query, print "YES" or "NO" accordingly.
</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>Q</b>, denoting the number of queries.</p>

<p>Each of the following <b>Q</b> lines contains two distinct integers <b>a</b> and <b>b</b>, denoting two cities in one query.</p>

<h3>Output</h3>

<p>For each query, output a single line containing the answer — "YES" if there is a road between the given cities <b>a</b> and <b>b</b>, and "NO" otherwise (without the quotes).</p>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>Q</b> ≤ 1000</li>
<li>1 ≤ <b>a</b>, <b>b</b> ≤ 10<sup>9</sup></li>
<li><b>a</b> ≠ <b>b</b></li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
7
1 4
4 3
5 4
10 12
1 3
999999999 1000000000
17 2384823

<b>Output:</b>
NO
YES
NO
YES
YES
YES
NO
</pre>

<h3>Explanation</h3>

<p>In the example test, the answer is "YES" for pairs (4, 3), (10, 12), (1, 3) and (999999999, 1000000000).
Roads 3-4 and 1-3 you can see on the drawing in the statement.</p>

<p>The answer is "NO" for example for a pair (1, 4), because there is no road between cities 1 and 4.</p>