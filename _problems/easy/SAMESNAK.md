---
{"category_name":"easy","problem_code":"SAMESNAK","problem_name":"Same Snake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"19-05-2017","tags":{"0":"admin3"},"editorial_url":"https://discuss.codechef.com/problems/SAMESNAK","time":{"view_start_date":1495625400,"submit_start_date":1495625400,"visible_start_date":1495625400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/mandarin/SAMESNAK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/russian/SAMESNAK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SAMESNAK.pdf">Vietnamese</a> as well.</h3>

<p>Consider a 2d-grid. That is, each cell is identified by (i,j). You have received reports of two snake-sightings on this grid. You want to check whether they could be partial sightings of the same snake or not.</p>

<p>Each of the snake sightings correspond to a straight, axis-parallel line segment in the grid, and the starting and ending cells for each are given to you. Now consider a graph, where each cell in the 2d-grid is a vertex. And there is an edge between 2 vertices if and only if the cells corresponding to these two vertices are consecutive cells in at least one of the two snakes. That is, at least in one of the snakes, when you go from one end point to the other end point, these two cells should occur consecutively.</p> 

<p>The two sightings/snakes are said to be same, if both these conditions are satisfied:</p>
<ul>
<li>The union of the set of cells in the first snake and the set of cells in the second snake, should form a connected component in this graph.</li>
<li>No vertex should have degree more than 2 in the graph.</li>
</ul>
<p>In other words, the induced subgraph on the union set must be a path graph.</p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, which is the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains four integers: <b>X<sub>11</sub>, Y<sub>11</sub>, X<sub>12</sub>, Y<sub>12</sub></b>. This represents the fact that the first snake's end points are (<b>X<sub>11</sub>, Y<sub>11</sub></b>) and (<b>X<sub>12</sub>, Y<sub>12</sub></b>).</li>
<li>The second line of each testcase contains four integers: <b>X<sub>21</sub>, Y<sub>21</sub>, X<sub>22</sub>, Y<sub>22</sub></b>. This represents the fact that the second snake's end points are (<b>X<sub>21</sub>, Y<sub>21</sub></b>) and (<b>X<sub>22</sub>, Y<sub>22</sub></b>).</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output "yes" if the snakes are the same, as per the definition given above. Output "no" otherwise.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>-10<sup>9</sup> ≤ <b>X<sub>ij</sub>,Y<sub>ij</sub></b> ≤ 10<sup>9</sup></li>
<li>The two end points of every snake is guaranteed to be either on the same row or on the same column. Thus, the snake occupies all the cells between these cells, including the end points.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 1 8 1
11 1 7 1
2 1 8 1
11 1 9 1
2 1 8 1
3 1 3 -2
2 1 8 1
2 1 2 -2
<b>Output:</b>
yes
no
no
yes
</pre>

<h3>Explanation</h3>
<p>In the images, the first snake is red, the second snake is yellow, and the intersections, if any, are in orange.</p>

<p>The first test case corresponds to:</p>
<p></p>
<img src="https://codechef.com/download/SNCKQL17/SAMESNAK/image1.png" /> 
<p></p>
<p>Both the conditions on the graph are satisfied, and hence this is a "yes".</p>

<p>The second test case corresponds to:</p>
<p></p>
<img src="https://codechef.com/download/SNCKQL17/SAMESNAK/image2.png" />
<p></p>
<p>There is no edge between the vertex corresponding to the (8,1) cell and the vertex corresponding to (9,1), Hence, the union set is disconnected, and thus the answer is "no". </p>

<p>The third test case corresponds to:</p>
<p></p>
<img src="https://codechef.com/download/SNCKQL17/SAMESNAK/image3.png" />
<p></p>
<p>The vertex corresponding to the cell (3,1) has degree 3, which is more than 2, and thus the answer is "no". </p>


<p>The fourth test case corresponds to:</p>
<p></p>
<img src="https://codechef.com/download/SNCKQL17/SAMESNAK/image4.png" />
<p></p>
<p>Both the conditions on the graph are satisfied, and hence this is a "yes".</p>