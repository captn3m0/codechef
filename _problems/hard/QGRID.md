---
{"category_name":"hard","problem_code":"QGRID","problem_name":"Querying on a Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":"jingbo_adm","date_added":"6-08-2017","tags":{"0":"divide","1":"hard","2":"r_64","3":"sept17","4":"shortest"},"editorial_url":"https://discuss.codechef.com/problems/QGRID","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/QGRID.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/QGRID.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/QGRID.pdf">vietnamese</a> as well.</h3>

<p>Chef is helping out at a volunteering center for teaching. A child comes to Chef with a problem that he is not able to solve and asks Chef for his help. The problem is the following:   </p>

<p> Consider an <b>M × N</b> grid graph. The vertices in the grid graph are identified by its row and column number, i.e., for a vertex there are two numbers <b>(i,j)</b> associated with it, where <b>1 ≤ i ≤ M</b> is its row, and <b>1 ≤ j ≤ N</b> is its column. There are two types of edges in a grid graph(note that all edges are bidirectional) :</p>
<ul>
	<li>When <b>i &lt; M</b>, there is an edge of weight <b>down(i, j)</b> connecting <b>(i, j)</b> and <b>(i+1, j)</b>;</li>
	<li>When <b>j &lt; N</b>, there is an edge of weight <b>right(i, j)</b> connecting <b>(i, j)</b> and <b>(i, j+1)</b>.</li>
</ul>
<p>
	Initially, every vertex has a weight of zero.</p>
<p>
	Define the length of a path to be the sum of weights of all the edges in this path. The shortest path between <b>(i1, j1)</b> and <b>(i2, j2)</b> is the path with the minimum length. Of course, the weights associated with vertices doesn't influence shortest paths at all.</p>
<p>
The task in the problem is to process the following 2 types of queries on this graph efficiently :</p>
<ul>
	<li><b>i1</b> <b>j1</b> <b>i2</b> <b>j2</b> <b>c</b> : add <b>c</b> to the weights of all vertices in the shortest path between <b>(i1, j1)</b> and <b>(i2, j2)</b>.</li>
	<li><b>i</b> <b>j</b> : return the weight of vertex <b>(i, j)</b>.</li>
</ul>

<p>Chef is confused with the problem but he wants to help the child. Can you help Chef with this problem?</p>

<h3>Input</h3>
<p>
The first line contains three integers <b>M, N, Q</b>. <b>M</b> and <b>N</b> denotes the graph's size; <b>Q</b> denotes the number of queries.</p>
<p>Next <b>M - 1</b> lines, each line contains <b>N</b> numbers. The <b>j</b>-th number in the <b>i</b>-th line in this part(i.e., the <b>(i + 1)</b>-th line in total) denotes <b>down(i, j)</b>.</p>
<p>Next <b>M</b> lines, each line contains <b>N - 1</b> numbers. The <b>j</b>-th number in the <b>i</b>-th line in this part(i.e., the <b>(i + M)</b>-th line in total) denotes <b>right(i, j)</b>.</p>
<p>Next <b>Q</b> lines, each line contains 3 or 6 numbers, denoting a query.</p>

<h3>Output</h3>
<p>For each query of type 2, output the weight of required vertex.</p>

<h3>Constraints</h3>
<ul>
	<li><b>1</b> ≤ <b>M</b> ≤ <b>3</b></li>
	<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
	<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
	<li><b>1</b> ≤ <b>down(i,j), right(i,j)</b> ≤ <b>10<sup>12</sup></b></li>
	<li>In type 1 query :
		<ul>
			<li><b>1</b> ≤ <b>i1, i2</b> ≤ <b>M</b></li>
			<li><b>1</b> ≤ <b>j1, j2</b> ≤ <b>N</b></li>
			<li><b>1</b> ≤ <b>c</b> ≤ <b>10<sup>13</sup></b></li>
			<li>The shortest path between <b>(i1, j1)</b> and <b>(i2, j2)</b> is <b>unique</b>.</li>
		</ul>
	</li>
	<li>In type 2 query :
		<ul>
			<li><b>1</b> ≤ <b>i</b> ≤ <b>M</b></li>
			<li><b>1</b> ≤ <b>j</b> ≤ <b>N</b></li>
		</ul>
	</li>
</ul>

<h3>Subtasks</h3>
<ul>
	<li><b>Subtask #1 (6 points)</b>: <b>N, Q ≤ 10<sup>3</sup></b></li>
	<li><b>Subtask #2: (11 points)</b>: <b>M = 1</b>.</li>
	<li><b>Subtask #3: (30 points)</b>: <b>M = 2</b>.</li>
	<li><b>Subtask #4: (24 points)</b>: 	
		<ul>
			<li><b>down(i,j)</b> and <b>right(i,j)</b> are uniformly randomly generated from <b>[1,3 × 10<sup>10</sup>]</b>.</li>
			<li>Queries are also randomly generated.</li>
			<li>There is only one test file for this subtask.</li>
		</ul>
	</li>
	<li><b>Subtask #5: (29 points):</b>: Original Constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3 3 11
1 1 5
2 10 6
1 4
1 13
6 5
1 2 2 3 3 1
1 2 2 1 3 2
2 1 1
2 1 2
2 1 3
2 2 1
2 2 2
2 2 3
2 3 1
2 3 2
2 3 3

<b>Output:</b>
0
2
2
1
3
0
1
1
1

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 1.</b> See picture below.</p>
<p>
	<img alt="" src="https://codechef_shared.s3.amazonaws.com/upfiles/QGRID_sample_explanation_mfpOHUo4Bq.png" style="width: 150px; height: 150px;"/></p>
<p>
	The shortest path between (2,2) and (3,3) is (2,2)->(2,1)->(3,1)->(3,2)->(3,3). We add 1 to these 5 vertices.</p>
<p>
	The shortest path between (2,2) and (1,3) is (2,2)->(1,2)->(1,3). We add 2 to these 3 vertices.</p>
<p>
	Note that the shortest path between (1,1) and (2,2) is not unique. However, the queried paths are (2,2)-(3,3) and (2,2)-(1,3), and the shortest paths of these pairs of points are unique, so this data is valid.</p>
