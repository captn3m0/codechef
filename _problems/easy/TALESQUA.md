---
{"category_name":"easy","problem_code":"TALESQUA","problem_name":"A Tale of Three Squares","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"19-12-2017","tags":{"0":"admin2","1":"gwr17rol","2":"simple"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There are three squares, each with side length <b>a</b> placed on the x-axis. The coordinates of centers of these squares are (<b>x<sub>1</sub></b>, <b>a</b>/2), (<b>x<sub>2</sub></b>, <b>a</b>/2) and (<b>x<sub>3</sub></b>, <b>a</b>/2) respectively. All of them are placed with one of their sides resting on the x-axis.</p>

<p>You are allowed to move the centers of each of these squares along the x-axis (either to the left or to the right)  by a distance of at most <b>K</b>. Find the maximum possible area of intersections of all these three squares that you can achieve. That is, the maximum area of the region which is part of all the three squares in the final configuration.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>a, K</b> denoting side length of the squares, and the maximum distance that you can move the center of any square.</li>
<li>The second line contains three space separated integers <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>x<sub>3</sub></b></li>
</ul>

<h3>Output</h3>
<p>For each test case, output a real number corresponding to the maximum area of the intersection of the three squares that you can obtain. Your answer will be considered correct if it has an absolute error of less than or equal to 	10<sup>-2</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>a</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>K</b> ≤ 10<sup>6</sup></li>
<li>-10<sup>6</sup> ≤ <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>x<sub>3</sub></b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
1 0
1 2 3
1 1
1 2 3
1 1
1 4 6

<b>Output</b>
0.000000
1.0000
0.0
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: The figure below shows the three squares:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/TALESQUA.png" height="300"/>
</p> 
<p>Since <b>K</b> = 0, they cannot be moved, and since there is no region which belongs to all three squares, the answer is 0.</p>

<p><b>Testcase 2</b>: The starting configuration is the same as above, but now each of the squares can move 1 unit. So we can move the first square 1 unit to the right and the third square one unit to the left, and have all the three squares at x-coordinate = 2. Thus the entire square is part of all three squares, and the answer is 1.</p>
