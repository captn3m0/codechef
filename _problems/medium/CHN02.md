---
{"category_name":"medium","problem_code":"CHN02","problem_name":"Animesh decides to settle down","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"computational","3":"geometry"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
After trying his luck in programming contests, Animesh has decided to accept his fate and settle down the good old-fashioned way. He has decided to own a farm and be a shepherd. He knows of <b>n</b> grass varieties, each of which grows in a convex polygon area. Some of these polygons may intersect each other. Each grass is lush green and nutritious, and he cannot make up his mind on where he should settle. 
</p>

<p>
His friend Malvika, a long time shepherd herself (this is <em>the other</em> Malvika), suggested that he buy a piece of land where he can find all the <b>n</b> grass varieties, so that his sheep will be fat and produce lots of wool. Animesh liked the idea and wants to buy as much of such a pasture as possible. However, being short on money, he decided to be judicious, and only buy land which is covered by all the <b>n</b> grasses. That is, he would not buy even a bit of land which isn't part of all <b>n</b> of the grassy polygons. Can you please help in finding out the maximum area of land he can buy?
</p>

<h3>Input</h3>
	<ul>
		<li>First line will contain an integer <b>n</b>, denoting the number of polygons.</li>
		<li>Then, the next lines will contain description of <b>n</b> polygons, description of the <b>i</b><sup>th</sup> polygon is given as below.
			<ul>
			<li>First line will contains a single integer <b>c</b> denoting number of points in the polygon.
			<li>each of the next <b>c</b> lines will have two space separated integers <b>x[j], y[j]</b> denoting <b>x</b> and <b>y</b> coordinate respectively of the <b>j</b>-th point of the polygon. These points will be given in anti-clockwise order.
			</ul>
	</ul>
</ul>

<h3>Output</h3>
<ul>
<li>Output your answer in a separate line. Your answer will be considered correct if it has an absolute error less than <b>1e-2</b>.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>n</b> &le; <b>30</b></li>
<li><b>3</b> &le; <b>c</b> &le; <b>30</b></li>
<li><b>-10<sup>5</sup></b> &le; <b>x, y</b> &le; <b>10<sup>5</sup></b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
3
4
15 0
15 5
0 5
0 0
4
2 3
15 3
15 10
2 10
4
19 7
5 7
5 -1
19 -1

<b>Output:</b>
20.000
</pre>


<h3>Explanation</h3>
<p>
Each region in the current case is rectangular in shape. You can check that the area of intersection of all the three input rectangles is another rectangle with corners at <b>(5,3), (15,3), (15,5)</b> and <b>(5,5)</b>. This is the place Animesh is going to settle in. The area of this rectangle is 10 * 2 = 20. 
</p>
