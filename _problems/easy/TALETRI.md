---
{"category_name":"easy","problem_code":"TALETRI","problem_name":"A Tale of Two Right Angled Triangles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"19-12-2017","tags":{"0":"admin2","1":"easy","2":"gwr17rol"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given two right angled triangles. You are given their side lengths. The first triangle is ABC, where side AB is the hypotenuse. Length of AB is <b>c</b>, that of AC is <b>b</b>, and that of BC is <b>a</b>. Similarly, the second triangle is DEF, where DE is the hypotenuse. Length of DE is <b>f</b>, that of DF is <b>e</b>, and that of EF is <b>d</b>.</p>

<p>First we define <i>minimum area enclosing axis-parallel rectangle</i> of some figures. It will be a rectangle which is axis parallel (i.e. each of its sides should be parallel to x or y axis) that encloses all the figures and has the minimum possible area. By enclosing, we mean that all the figures should be inside the rectangle.</p>

<p>You have to find a set of coordinates to assign to the points A, B, C, D, E, F such that the <i>minimum area enclosing axis-parallel rectangle</i> of the two triangles has sides <b>L</b> and <b>R</b>, i.e. one side is of length <b>L</b>, and the other is of length <b>R</b>. Also, each of the sides AC, BC, DF, EF should be parallel to either x or y axis. If it is not possible to assign the coordinates, output -1.</p> 

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case contains eight space separated integers denoting the lengths <b>a, b, c, d, e, f, L, R</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, either output -1 if it is impossible to assign the coordinates. Otherwise, output six lines each containing two space separated integers corresponding to the coordinates of points A, B, C, D, E, F in that order. You can output any possible coordinates that have their absolute values less than or equal to 10<sup>9</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>a, b, c, d, e, f, L, R</b> ≤ 10<sup>8</sup></li>
<li><b>a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></b></li>
<li><b>d<sup>2</sup> + e<sup>2</sup> = f<sup>2</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
3 4 5 3 4 5 4 4
3 4 5 3 4 5 2 4

<b>Output</b>
2 5
5 1
2 1
2 4
6 1
6 4
-1
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: The output corresponds to the image shown below:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/TALETRI-1.png" height="300"/>
</p>  

<p>Notice that all the 6 side lengths are maintained, and the sides AC, BC, DF, EF are all axis-parallel. The <i>minimum area enclosing axis-parallel rectangle</i> of these two triangles is shown in the next image:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/TALETRI-2.png" height="300"/>
</p>  

<p>Notice that this is a rectangle with side lengths 4 and 4, just as we wanted.  Hence this is a valid output.</p>