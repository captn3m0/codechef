---
{"category_name":"medium","problem_code":"ZUBGOLD","problem_name":"B - Get The Gold","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"10-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A man in his death-bed told his lazy son that throughout his life he had worked very hard. With the money he saved he has bought gold. This gold is hidden in a forest which is represented by a 2 dimensional plane in 3 dimensional space. There are two special trees <b>A</b> and <b>B</b> in the forest. The son needs to find these trees, and a special stone <b>S</b>. He must walk from <b>S</b> to <b>A</b> along the plane representing the forest, and then take a right turn and walk the same distance (ie. walk perpendicular to <b>SA</b>), to get to a point <b>C</b>. He must then come back to <b>S</b>. Next, he should walk from <b>S</b> to <b>B</b>, take a left turn and then walk that distance again to reach the point <b>D</b>. Half way between <b>C</b> and <b>D</b> is the place where the gold is hidden.</p>

<p>The forest is a plane defined by the points <b>S(x<sub>0</sub>,y<sub>0</sub>,z<sub>0</sub>)</b>, <b>A(x<sub>1</sub>,y<sub>1</sub>,z<sub>1</sub>)</b> and <b>B(x<sub>2</sub>,y<sub>2</sub>,z<sub>2</sub>)</b>. <b>S, A</b>, and <b>B</b> will not be collinear. You need to find the coordinates of the gold. Each input set consists of the coordinates of the points <b>S, A</b> and <b>B</b> in separate lines. It is guaranteed that the origin <b>O</b>(0,0,0) will always be above the forest surface. That is, you standing on the forest surface, if you look up, (0, 0, 0) will be in the sky.
</p>

<h3>Input</h3>
<ul>
<li>The first line contains one integer, <b>T</b>, the number of test cases. The description of each test case follows:</li>

<li>Three lines will be printed for each test case.</li> 

<li>The first line will contain three space-separated numbers <b>x<sub>0</sub>, y<sub>0</sub>, z<sub>0</sub></b>.</li>

<li>The second line will contain three space-separated numbers <b>x<sub>1</sub>, y<sub>1</sub>, z<sub>1</sub></b>. </li>

<li>The third line will contain three space-separated numbers <b>x<sub>2</sub>, y<sub>2</sub>, z<sub>2</sub></b>.</li>

<li>An empty line will be printed after each test case.</li>

<li>All the numbers will have two digits after the decimal point.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print three real numbers, <b>x y z</b>, in a new line where <b>(x,y,z)</b> are the coordinates of the gold. Your answer will be considered correct if the absolute error is less than 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100000 </li>
<li>-10<sup>6</sup> ≤ <b>x<sub>0</sub>, y<sub>0</sub>, z<sub>0</sub>, x<sub>1</sub>, y<sub>1</sub>, z<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub>, z<sub>2</sub></b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
0.00 0.00 -1.00
0.00 1.00 -1.00
2.00 1.00 -1.00

-8.00 4.65 5.72
-6.14 -3.43 -3.87
-5.50 1.56 8.60

<b>Output:</b>
1.00000000 2.00000000 -1.00000000
-2.29963939 -6.31303751 4.33640147
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b> The figure below shows the scenario:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBGOLD/ZUBGOLD.png" height="400"/>
</p>


<p>The plane represented by the three input points is the plane z = -1. We have <b>S</b>(1.00, 1.00, -1.00). Going from <b>S</b> to <b>A</b>, taking a right turn, and going the same distance as <b>SA</b> will take you to the point <b>C</b>(1.00, 1.00, -1.00). Going from <b>S</b> to <b>B</b>, taking a left turn, and going the same distance as <b>SB</b> will take you to the point <b>D</b>(1.00, 3.00, -1.00). The gold is at the midpoint of segment <b>CD</b>, which is (1.00, 2.00, -1.00).</p>