---
{"category_name":"school","problem_code":"ZUBTRCNT","problem_name":"D - Triangle Count","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"19-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
You are given an equilateral triangle <b>ΔABC</b> with the side <b>BC</b> being the base. Each side of the triangle is of length <b>L</b>. There are <b>L-1</b> additional points on each of the sides dividing the sides into equal parts of unit lengths. Points on the sides of the triangle are called <i>major</i> points. Joining these points with lines parallel to the sides of <b>ΔABC</b> will produce some more equilateral triangles. The intersection points of these parallel lines are called <i>minor</i> points. 
</p>

<p>
Look at the picture below. It contains 
<ul>
<li>Major points: <b>A, B, C, P<sub>1</sub>, P<sub>2</sub>, Q<sub>1</sub>, Q<sub>3</sub>, R<sub>1</sub>, R<sub>4</sub>, S<sub>1</sub>, S<sub>2</sub>, S<sub>3</sub></b> (note that we consider <b>A, B, C</b> as major points as well)</li>
<li></i>Minor</i> points: <b>Q<sub>2</sub>, R<sub>2</sub>, R<sub>3</sub></b></li>
<li>Equilateral triangles <b>ΔP<sub>1</sub>Q<sub>1</sub>Q<sub>2</sub>, ΔQ<sub>2</sub>S<sub>1</sub>S<sub>3</sub></b>, etc</li>
</ul>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBTRCNT/triangle_count.png"/><br/>
We consider an equilateral triangle to be valid if
<ul>
<li>Each of its vertices is either a major or a minor point, <i>and</i></li>
<li>The distance from its base (the base of a triangle is the side parallel to <b>BC</b>) to <b>BC</b> is less than the distance from the other vertex of the triangle (i.e. opposite vertex that doesn't lie on the base of triangle) to <b>BC</b>.</li>
</ul>

In the figure above, <b>ΔQ<sub>2</sub>P<sub>1</sub>P<sub>2</sub></b> is not a valid triangle but <b>ΔQ<sub>2</sub>R<sub>2</sub>R<sub>3</sub></b> is a valid triangle.
</p>

<p>
You will be given <b>L</b>, the length of the original triangle <b>ΔABC</b>. You need to find out the number of valid equilateral triangles with side length exactly <b>K</b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of each testcase follows.</li>

<li>Each test case has one line containing two space-separated integers: <b>L</b> and <b>K</b>.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 500</li>
<li> 1 ≤ <b>L, K</b> ≤ 5000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 3
4 4

<b>Output:</b>
Case 1: 3
Case 2: 1
</pre>

<h3>Explanation</h3>
<p>
The figure presented in the problem description is a triangle with side length 4.</p>

<p>In <b>testcase 1</b>, the valid triangles are <b>ΔAR<sub>1</sub>R<sub>4</sub>, ΔP<sub>1</sub>BS<sub>3</sub>, ΔP<sub>2</sub>S<sub>1</sub>C</b><br/>
In <b>testcase 2</b>, the only valid triangle is <b>ΔABC</b>
</p>