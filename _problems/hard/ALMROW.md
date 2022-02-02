---
{"category_name":"hard","problem_code":"ALMROW","problem_name":"Bear and Almost Row","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2.5 - 7","source_sizelimit":50000,"problem_author":"errichto","problem_tester":"kingofnumbers","date_added":"24-03-2017","tags":{"0":"errichto","1":"floyd","2":"hard","3":"ltime46","4":"shortest"},"time":{"view_start_date":1490461200,"submit_start_date":1490461200,"visible_start_date":1490461200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/mandarin/ALMROW.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/russian/ALMROW.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/vietnamese/ALMROW.pdf">Vietnamese</a> as well.</h3>


<p>Bearland has <b>N</b> cities, numbered 1 through <b>N</b>.
For every i between 1 and <b>N</b>-1 inclusive, there is a road between cities i and i+1.
There <b>K</b> extra roads: the i-th of them connects two different cities <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub>.
So, there are <b>N</b>-1+<b>K</b> roads in total.
All roads are bidirectional.</p>

<p>You can assume that every two cities are connected by at most one road.</p>

<p>Let f(s, t) denote the distance between cities s and t, i.e. the minimum possible number of roads needed to get from one city to the other.</p>

<p>Your task is to find the sum of f(s, t) over all pairs of cities (s, t) such that s < t.</p>





<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The first line of each test case contains an integer <b>N</b> denoting the number of cities.
</p>

<p>
The second line contains an integer <b>K</b> denoting the number of extra roads.
Note the unusual constraint for <b>K</b> (in the constraints section below).
</p>

<p>The i-th of the following <b>K</b> lines contains two different integers <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub>, denoting cities connected by the i-th road.
All <b>N</b>-1+<b>K</b> roads will be distinct.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing one integer — the sum of f(s, t) over all pairs (s, t) such that s < t.
For the given constraints, it can be proved that the answer fits in the 64-bit signed type.</p>


<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>2 ≤ <b>N</b> ≤ 10<sup>6</sup></li>
<li>0 ≤ <b>K</b> ≤ 10</li>
<li>1 ≤ <b>a</b><sub>i</sub>, <b>b</b><sub>i</sub> ≤ <b>N</b></li>
<li><b>a</b><sub>i</sub> ≠<b>b</b><sub>i</sub></li>
<li>All <b>N</b>-1+<b>K</b> roads will be distinct.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (15 points): 2 ≤ <b>N</b> ≤ 40</li>
<li>Subtask #2 (35 points): The sum of <b>N</b> in all test cases won't exceed 200,000.</li>
<li>Subtask #3 (15 points): 0 ≤ <b>K</b> ≤ 1</li>
<li>Subtask #4 (35 points): Original constraints.</li>
</ul>




<h3>Example</h3>

<pre><b>Input:</b>
4
4
2
1 3
4 1
5
1
2 5
20
3
1 7
3 12
17 19
1000000
0

<b>Output:</b>
7
16
891
166666666666500000
</pre>



<h3>Explanation</h3>

<p>The provided example test contains <b>T</b> = 4 test cases.
The following drawings show the situation for the first two test cases (extra roads are red):</p>

<p><img src="https://codechef_shared.s3.amazonaws.com/uploads/2017/03/LTIME46/ALMROW.png" /></p>

<p>In the first test case, there are 4 cities and 2 extra roads 1-3 and 4-1.
So we have 5 roads in total: 1-2, 1-3, 1-4, 2-3, 3-4 (see the left drawing).
The sought values are:</p>

<ul>
<li>f(1, 2) = f(1, 3) = f(1, 4) = f(2, 3) = f(3, 4) = 1</li>
<li>f(2, 4) = 2</li>
</ul>

<p>The answer is 1 + 1 + 1 + 1 + 1 + 2 = 7.</p>