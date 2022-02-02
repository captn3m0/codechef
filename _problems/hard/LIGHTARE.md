---
{"category_name":"hard","problem_code":"LIGHTARE","problem_name":"Find Lighted Area","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"18-12-2017","tags":{"0":"admin2","1":"geometry","2":"gwr17rol","3":"med"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a square with side length 2*<b>L</b>. The coordinates of its vertices are at (-<b>L</b>, -<b>L</b>), (<b>L</b>, -<b>L</b>), (<b>L</b>, <b>L</b>) and (-<b>L</b>, <b>L</b>). You are also given <b>N</b> disks (each disk is opaque, and light rays cannot pass through them) each of radius <b>R</b>. The centers of each of the disks are at a fixed distance <b>D</b> from origin (0, 0). This distance <b>D</b> is strictly greater than <b>R</b>. It is guaranteed that all the disks lie entirely inside the square.</p>

<p>Suppose, there is a light source at the origin. Find the area of the region of the square that will be lit by this light source. A point inside the square will be lit if the line segment between the origin and the point don't intersect or touch any of the discs.</p>

<p>All distances mentioned are Euclidean distances.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains four integers: <b>N</b>, <b>R, D, L</b>. </p>
<p>Each of the next <b>N</b> lines contain two space separated real numbers denoting the x and y coordinates of the center of the i-th disk. Each real number may contain up to 16 digits after the decimal point. These coordinates will satisfy all the conditions mentioned in the statement, i.e.
 they will be at distance exactly <b>D</b> from the origin.</p>

<h3>Output</h3>
<p>For each test case, output a real number representing the illuminated area. Your answer will be considered correct if the absolute or relative error of the answer doesn't exceed 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>2 ≤ <b>D</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>R</b> < <b>D</b></li>
<li>R + D < <b>L</b> ≤ 3 * 10<sup>5</sup></li>
<li>-10<sup>6</sup> ≤ <b>x</b>, <b>y</b> ≤ 10<sup>6</sup></li>
<li>Sum of <b>N</b> over all the test cases in a single file would be at most 4 * 10<sup>5</sup></li> 
<li>For any two centers of disks, it is guaranteed that the distance between them is ≥ 10<sup>-6</sup>.
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
1 1 2 4
2 0
2 1 2 4
2 0
-2 0
3 1 2 4
2 0
-2 0
0 2
4 1 2 4
2 0
-2 0
0 2
0 -2

<b>Output</b>
55.4472489493382673
46.8944978986765346
38.3417468480148019
29.7889957973530693
</pre>

<h3>Explanation</h3>
<p>More examples are given in the webpage, but not printed here. Please check them as well.</p>

<p>The image below shows the scenario for testcase 1:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/LIGHTARE.png" height="450"/>
</p>

<p>ABCD represents the square, which has coordinates according to <b>L</b> = 4. The only circle is at coordinates (2, 0). Notice that the distance of the center from the origin is 2, which is <b>L</b>. Its radius is <b>R</b> = 1. The light source is at (0, 0).</p>

<p>The grayed area along with the circle represents the area which is not lit by the light source. The area of the whole square with this area subtracted is the answer.</p>