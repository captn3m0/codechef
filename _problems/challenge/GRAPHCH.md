---
{"category_name":"challenge","problem_code":"GRAPHCH","problem_name":"Graph Challenge","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.27,"source_sizelimit":50000,"problem_author":"anshuman_singh","problem_tester":"pieguy","date_added":"1-09-2010","tags":{"0":"anshuman_singh","1":"challenge","2":"nov10"},"editorial_url":"http://discuss.codechef.com/problems/GRAPHCH","time":{"view_start_date":1420050600,"submit_start_date":1420050600,"visible_start_date":1420050600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Statement </h3>
<p>
	You are given a modified graph with  N vertices and M edges. Each vertex is a rectangle [ dimension of each vertex may be different ] . Your task is to place these vertices in 2-d space such that : </p>
<ul>
	<li> No two vertices overlap [ remember, they are rectangles  ] </li>
	<li> All rectangles have their sides parallel to the axis. </li>
	<li> Rectangles cannot be rotated. </li>
</ul>
<br />
<p> For every edge in the graph, add the manhattan distance between the centres of the vertex for each edge as the cost of a solution ( C ). <br />
Now, there might be multiple ways to achieve this. So, you have to strive to keep C as low as possible. </p>

<h3> Input </h3>

<p> First line contains t ( ≤ 100 ) equal to the number of test cases. For each test case, the first line contains 2 space separated integers ( N and M respectively ). Then M lines follow, each line containing 2 integers x and y ( 0 ≤ x,y &lt; N , x ≠ y ) denoting an edge between vertex x and y. Then follow N lines, where line  number i contains 2 integers a and b denoting the dimension of the ith vertex [ Here, a denotes the length parallel to x-axis and b denotes the length parallel to y-axis ] </p>
( <b> Note </b> : If the same pair x,y appears multiple times, it denotes multiple edges and hence, each pair contributes to the cost ). <br /><br />
<b> NOTE : </b> Please note that all solutions will be tested on another set of test data <b> after the contest </b> which will follow the same pattern for test case generation ( as mentioned in 'Test Case Generation' section ).  <b>The final score for a solution will be the score of solution on latter test data. </b> <br />

<h3> Output </h3>
<p>
For each test case, print N lines , each containing 2 floating point numbers X and Y, denoting the co-ordinates of the centre of vertex i. <br /> 
<b> Note </b> : -10<sup>9</sup> ≤ X,Y ≤ 10<sup>9</sup> . Solutions not following the mentioned constraints will be adjudged as wrong answer. <br />
<b> Please note that the answers may not be optimal </b></p>

<h3> Scoring </h3>

<p> The Score for a solution  = (C+1). <br />
Your total score is the sum of your score for all the test cases. <br />
You have to keep the score as low as possible. </p>

<h3> Constraints </h3> 
<p>
2 ≤ N ≤ 50 <br />
1 ≤ M ≤ 200 [ The edges are randomly generated ] <br />
1 ≤ a,b ≤ 100000  <br />
There can be multiple edges between a pair of vertices.<br />
Additionally for 50% of the cases 2 ≤ N ≤ 20. Also, for about 50% of cases, all vertices are squares [ a = b ] of same size. </p>

<h3> Test Case Generation </h3> 
<p>
There are about 100 cases in total. For first 50 cases, the number of vertex ( n ) is chosen as a random number in the interval [3,20]. The number of edges (m) is chosen as a random number in the range [2, n*(n-1)/2]. Then all edges are chosen as random pair of integers. All vertex are given the same dimension with the probability 0.5 else they are given a random dimension in [1,100000] * [1,100000]. <br />
For other 50 cases, n is chosen as a random integer in the interval [3,50]. m is chosen randomly from [2, min( n*(n-1)/2, 200) ]. Rest of the procedure remains the same.  <br />

</p>

<h3> Sample Input </h3> <br />
<pre>
1
2 1
0 1
2 2
2 2
</pre>

<h3> Sample Output </h3> <br />
<pre>
2 2
10 3
</pre>
<br />

<b>Score for sample output</b> : 10.0  ( Better answers may be possible ) <br /><br />