---
{"category_name":"hard","problem_code":"AMPUZZLE","problem_name":"Sliding Puzzle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"23-12-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Famous company Strange Puzzles Inc. has designed a brand new series of puzzles aimed at students who are fond of competitive programming. In this problem we are going to consider one of them named "Sliding Windows".
</p>

<p>
The puzzle consists of an infinite two-dimensional plane and <b>n</b> rectangles located in it. Each of the rectangles has its sides parallel to the coordinate axes. The puzzle is considered to be solved if for any two rectangles it is true that at least one of them is <i>covered</i> by the other one. Formally, rectangle i <i>covers</i> rectangle j if and only if for any point of the plane (x, y) which lies inside rectangle j, it also lies inside rectangle i.
</p>

<p>
The only action that you are allowed to perform is to shift the rectangles up, down, left or right. In one unit of time you can take one of the rectangles and shift it exactly by 1 unit in one of these four directions.
</p>

<p>
As a true competitive programmer you wonder what the minimum number of time units required to solve the puzzle is (if it can be solved at all).
</p>

<h3>Input</h3>
<ul>
	<li>The first line of the input contains a single integer <b>T</b>  — the number of test cases in the given input. Then follow <b>T</b> descriptions of individual tests. </li>
	<li>The first line of teach testcase contains a single integer, <b>n</b>  — the number of rectangles.</li>
	<li>The i<sup>th</sup> of the next <b>n</b> lines contains four integers <b>l<sub>i</sub></b>, <b>b<sub>i</sub></b>, <b>r<sub>i</sub></b> and <b>u<sub>i</sub></b> — this signifies that (<b>l<sub>i</sub></b>, <b>b<sub>i</sub></b>) is the lower left corner and (<b>r<sub>i</sub></b>, <b>u<sub>i</sub></b>) is the upper right corner of the i<sup>th</sup> rectangle.</li>
</ul>


<h3>Output</h3>
<ul>
	<li>If the puzzle can not be solved for the given set of rectangles print  -1 in the only line of the output. Otherwise print a single integer equal to the minimum number of time units required to solve the puzzle.</li>
</ul>

<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>T</b> ≤ 200000</li>
	<li>1 ≤ <b>n</b> ≤ 200000</li>
	<li> - 10<sup>9</sup> ≤ <b>l<sub>i</sub></b> &lt; <b>r<sub>i</sub></b> ≤ 10<sup>9</sup></li>
       <li> - 10<sup>9</sup> ≤ <b>b<sub>i</sub></b> &lt; <b>u<sub>i</sub></b> ≤ 10<sup>9</sup></li>
	<li>It's guaranteed that the sum of <b>n</b> over all test cases in one test file won't exceed 1000000.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
0 -1 1 2
-1 0 2 1
3
0 0 4 1
-1 1 1 2
2 1 5 2

<b>Output:</b>
-1
4
</pre>

<h3>Explanation</h3>
<p><b>Testase 1:</b> No matter how we move the rectangles, one rectangle cannot  cover the other rectangle. Hence the answer is -1.</p>

<p><b>Testcase 2:</b> One of the optimal solutions is to shift the first rectangle up by 1 unit, second rectangle right by 1 unit and third rectangle left by 2 units. This takes a total of 4 time units and hence that is the answer.</p>