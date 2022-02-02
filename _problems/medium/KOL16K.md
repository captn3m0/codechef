---
{"category_name":"medium","problem_code":"KOL16K","problem_name":"Chef and Points","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"26-12-2016","tags":{"0":"mgch"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Today, you finally have a chance to compete with a famous coder like Chef and prove your mettle.</p>
<p>Chef has <b>n</b> distinct points in 2-D plane, i.e. there are never two points with both <b>x</b> and <b>y</b> coordinate equal and there are no two points with same <b>x</b> coordinate. Consider a subset of above <b>n</b> points which can be arranged as a sequence <b>p<sub>1</sub></b>,..<b>p<sub>k</sub></b>, such that <b>x<sub>p<sub>1</sub></sub></b>< <b>x<sub>p<sub>2</sub></sub></b> < ...< <b>x<sub>p<sub>k</sub></sub></b> and each point <b>p<sub>i</sub></b>, where <b>i</b> is in range between 3 and <b>k</b> (both inclusive) lies below or on the line passing between points <b>p<sub>i-1</sub></b> and <b>p<sub>i-2</sub></b>. Chef likes these kind of subsets. So he wants to find the size of largest of such subsets. </p>

<h3>Input</h3>
<p>First line of the input contains one integer <b>T</b> - number of tests. <b>T</b> tests follows.</p>
<p>First line of each test contains one integer <b>N</b> - number of points.</p>
<p>The next <b>N</b> lines of each test case contain integer point coordinates <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For a each test case, output a single integer in separate line corresponding to the largest subset size.</p>

<h3>Constraints</h3>
<ul>
 <li>1 ≤ <b>T, N</b>, sum over all <b>N</b> over all test cases ≤ 2000</li> 
 <li>1 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ 10<sup>9</sup></li> 
</ul>

<h3>Example</h3>
<pre>
 <b>Input:</b>
 3
 3
 1 1
 4 2
 9 3
 4
 1 1
 4 2
 5 2
 9 3
 4
 2 3
 4 1
 1 2
 3 2

 <b>Output:</b>
 3
 3
 4
</pre>
<h3>Explanation</h3>
<p><b>Explanation case 1.</b></p> We can get sequence (1, 1) - (4, 2) - (9, 3), point (9, 3) lies below line between point (1, 1) and (4, 2).</p>
<p><b>Explanation case 2.</b></p> We can get (1, 1) -(4, 2) - (9, 3)</p>
<p><b>Explanation case 3.</b></p> We can get (1, 2) -(2, 3) - (3, 2) - (4, 1)</p>