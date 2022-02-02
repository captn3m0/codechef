---
{"category_name":"easy","problem_code":"TRICHEF","problem_name":"Chef and Triangles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"8-12-2017","tags":{"0":"easy","1":"geometry","2":"gwr17rol","3":"usaxena95"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has come to a 2 dimensional garden in which there are <b>N</b> points. Each point has coordinates <b>(x, y)</b>, where <b>x</b> can either be <b>1</b> or <b>2</b> or <b>3</b>. Chef will now choose every triplet of these <b>N</b> points and make a triangle from it. You need to tell the sum of areas of all the triangles the Chef makes.</p> 

<p>Note that some of the triplets might not form proper triangles, and would end up as a line or a point (ie. degenerate), but that is fine because their area will be zero.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>T</b>, the number of test cases. The description of each testcase follows.</li>

<li>The first line of each test case contains an integer <b>N</b> denoting the number of points on the plane.</li>

<li>The next <b>N</b> lines contain 2 space separated integers <b>x</b> and <b>y</b> denoting the coordinates of the points. </li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer. Your answer will be considered correct if the absolute error is less than or equal to 10<sup>-2</sup>.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>N</b> ≤ 2000</li>
<li>1 ≤ <b>x</b> ≤ 3</li>
<li>1 ≤ <b>y</b> ≤10<sup>6</sup></li>
<li>All (<b>x</b>, <b>y</b>) pairs are distinct</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 1
2 1
3 3
4
1 1
2 2
2 1
3 3

<b>Output:</b>
1.0
2.0
</pre>

<h3>Explanation:</h3>
<p>Test Case 1: There is only one triangle which has non-zero area, and it's area is 1, hence the output.</p>
<p>Test Case 2: Let the points be A(1,1), B(2,2), C(2,1), D(3,3). There are 3 non degenerate triangles possible. 
<li> area ABC = 0.5</li>
<li> area BCD = 0.5</li>
<li> area ACD = 1</li>
Total area = 2
</p>