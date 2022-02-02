---
{"category_name":"hard","problem_code":"DISCAREA","problem_name":"Black Discs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"triveni","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"acm17kgp","1":"convex","2":"geometry","3":"hard","4":"kgp17rol","5":"monte","6":"triveni"},"editorial_url":"https://discuss.codechef.com/problems/DISCAREA","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Consider the 2-d plane which is white. You are given <b>n</b> semi-discs on it which are colored black. They are placed on the x - axis at various positions, in such a way that its center is on the x-axis and the entire semi-disc is <b>on or above</b> the x-axis. By center of a semi-disc, we mean the center of the disc of which it is a part. For each semi-disc you know its radius and the coordinate of its center in the x-axis. There may be overlaps or one may be completely inside / outside another semi-disc.</p>

<p>There are <b>q</b> queries. In each query you will be given a circle with radius <b>r</b> and center C at coordinates (x, y). It is guaranteed that <i> y ≥ r</i> (meaning that no part of the circle is below the x-axis). You need to find the area within the circle <i>which is <b>black</b></i>. Meaning, area of the circle which is overlapping with some part of any semi-disc. 
</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, which denotes the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two space-separated integers: <b>n</b> and <b>q</b>, denoting the number of semi-discs and the number of queries respectively.</li>
<li>The i-th of the next <b>n</b> lines contains two space-separated integers: <b>x<sub>i</sub></b> and <b>r<sub>i</sub></b>, denoting that the i-th semi-disc has its center at (<b>x<sub>i</sub></b>, 0) and has radius <b>r<sub>i</sub></b>.</li>

<li>The i-th of the next <b>q</b> lines contains three space-separated integers: <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> and <b>r<sub>i</sub></b>, denoting that the i-th query circle has its center at (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>) and has radius <b>r<sub>i</sub></b>.</li>
</ul>


<h3>Output</h3>
<ul>
<li>For each query in a testcase, output a single line with the answer.</li>
<li>Your output will be considered correct if both these are true:
<ul>
<li>In each query, the absolute error is less than or equal to 0.02.</li>
<li>In a single testcase, the average of absolute error over all queries must be less than 0.01.</li>
</ul>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>n</b> ≤ 100000</li>
<li>20 ≤ <b>q</b> ≤ 200</li>
<li>1 ≤ all x and y coordinates in the input ≤ 100000</li>
<li>1 ≤ all radii in input ≤ 100000</li>
<li>Sum of <b>n</b> over all testcases ≤ 100000</li>
<li>Sum of <b>q</b> over all testcases ≤ 200</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
4 2
1 2
2 3
4 2
7 3
7 2 2
8 3 3

<b>Output:</b>
9.3204778956
10.2198951180
</pre>

<h3>Explanation</h3>
<p> Note that the example shown above has only two queries (for brief representation) and hence doesn't satisfy the 20 ≤ <b>q</b> constraint. However, in the original test data the constraints will be followed.</p>

<p>The black semi-discs have been colored with various colors for better understanding. And the dotted region represents the region whose area we want to find.</p>

<p><b>Query 1:</b> The figure below represents the scenario:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/DISCAREA.1.png" height="200"/>
</p>

<p><b>Query 2:</b> The figure below represents the scenario:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/DISCAREA.2.png" height="250"/>
</p>
