---
{"category_name":"medium","problem_code":"NONOVSEG","problem_name":"Non Overlapping Segments","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"12-12-2017","tags":{"0":"acm17kgp","1":"admin2","2":"dynamic","3":"kgp17rol","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/NONOVSEG","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given <b>N</b> horizontal segments each of length <b>R</b>. You are given the x-coordinates of their left end-points: the i-th segment has the left end point at <b>x<sub>i</sub></b>. You can see that the right end point will be at <b>x<sub>i</sub> + R</b>.</p>

<p>You want to move the segments such that they lie entirely in the range <b>[0, L]</b>. After the movements, no two segments should overlap, however, they are allowed to touch each other.</p>


<p>Find out the minimum number of segments that you need to move to achieve this. In other words, you want to maximize the number of segments that are left untouched. It's guaranteed that the sum of the lengths of the segments is such that they all can fit in <b>[0, L]</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space-separated integers <b>N, L, R</b>.</li>
<li>The second line of each test case contains <b>N</b> space-separated integers. The i-th integer denotes the coordinate of the left end point of i-th segment, i.e. <b>x<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum number of segments that you need to move.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 2500</li>
<li>1 ≤ <b>N</b> ≤ 500</li>
<li>1 ≤ <b>L, R</b> ≤ 10<sup>9</sup></li>
<li>-10<sup>9</sup> ≤ <b>x<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>Sum of <b>N</b> over all test cases in a single test file won't exceed 2500.</li>
<li><b>L</b> ≥ <b>R * N</b>, i.e. all the segments can fit inside the range.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
4 4 1
0 1 2 3
4 4 1
-1 2 3 5
4 4 1
2 2 2 2

<b>Output</b>
0
2
3
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. All the segments lie in the range [0, <b>L</b>]. None of the segments overlap with each other. Hence, we don't need to move any segment at all.</p>

<p><b>Example 2</b>. You can move the first segment to [0, 1]. You can also move the fourth segment to [1, 2]. After this movement, you can see that the all the segments lie in the range [0, <b>L</b>] and none of the segments overlap with each other. Overall, we moved 2 segments. There is no way to achieve this by moving less than 2 segments.</p>
