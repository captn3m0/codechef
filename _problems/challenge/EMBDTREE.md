---
{"category_name":"challenge","problem_code":"EMBDTREE","problem_name":"Embedding a Tree (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"28-02-2018","tags":{"0":"admin2"},"time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/EMBDTREE.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/EMBDTREE.pdf">Vietnamese</a> as well.</h3>

<p>You are given a tree with <b>N</b> nodes. You should embed this tree in a 2-D plane such that each node of the tree is located at a point with integer coordinates. Let's denote the coordinates of the <b>i</b>-th node by <b>p<sub>i</sub></b> = (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>). An edge between nodes <b>u</b> and <b>v</b> corresponds to a line segment between points <b>p<sub>u</sub></b> and <b>p<sub>v</sub></b>.</p> 

<p>Formally, the mapping of the nodes to points should satisfy the following property: No two segments in the plane intersect each other. (However, it is allowed for two segments corresponding to edges with a common vertex to touch at the point which is mapped to this common vertex.) For example, assume that <b>N</b> = 4 and the tree is a path. Then the line segment connecting points <b>p<sub>1</sub></b> and <b>p<sub>2</sub></b> will touch the line segment connecting points <b>p<sub>2</sub></b> and <b>p<sub>3</sub></b> only at point <b>p<sub>2</sub></b>. However, the line segment connecting points <b>p<sub>1</sub></b> and <b>p<sub>2</sub></b> shouldn't intersect or touch the line segment connecting points <b>p<sub>3</sub></b> and <b>p<sub>4</sub></b>.</p>

<p>Additionally, there is a constraint on the length of each edge. For an edge (<b>u</b>, <b>v</b>), you are also given an integer <b>L</b>. You should ensure that the Euclidean distance between the points <b>p<sub>u</sub></b> and <b>p<sub>v</sub></b> is at least <b>L</b>.</p>

<p>Your objective is to find an embedding such that the sum of Euclidean distances between points corresponding to each pair of nodes (even if they aren't connected by an edge) is as low as possible.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>N</b>.</li>
<li>The following <b>N-1</b> lines describe edges. The <b>i</b>-th of these lines contains three space-separated integers <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> and <b>L<sub>i</sub></b>, which denote an edge between nodes <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> with length constraint <b>L<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>Print <b>N</b> lines. For each valid <b>i</b>, the <b>i</b>-th of these lines should contain two space-separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>.</p>

<p>For each node, these coordinates should be integers satisfying -10<sup>9</sup> ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ 10<sup>9</sup>. Additionally, no two nodes should be mapped to the same point.</p>

<h3>Example</h3>
<pre>
<b>Input</b>

5
1 2 3
2 3 4
2 4 6
3 5 5

<b>Output</b>

0 0
4 0
4 5
10 -10
10 10
</pre>

<h3>Explanation</h3>
<p><img height="400" src="https://discuss.codechef.com/upfiles/embtree.png"/></p>

<h3>Score</h3>
<p>Your score will be the sum of pairwise Euclidean distances between the points corresponding to nodes.</p>

<p>For the above example, the score you obtain would be 110.976947161586110724.</p>

<h3>Test Generation Process</h3>
<p>There are four types of tests and three test cases for each type. During the contest, the displayed score will account for only one test case of each type, i.e. your program score is reflective of 33.333% (1/3) of the test files. However, if your program gets a non-AC verdict on any of the test files, your verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to reflect the score over all of the test files.</p>

<p>
In each test case:
<ul>
<li><b>N</b> = 1000</li>
<li>for each edge, the parameter <b>L</b> is generated uniformly randomly between 1 and 5000</li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>	
</ul>
</p>

<p>For the paragraph below, assume the function rnd.next(<b>l</b>, <b>r</b>) generates a random number uniformly in the range <b>l</b> through <b>r</b> (both inclusive).</p>

<h4>Type 1:</h4>
<pre>
K = 10;
for i = 2 to N:
	if i <= K;
		parent[i] = 1
	else:
		parent[i] = rnd.next(i - K, i - 1)
</pre>

<h4>Type 2:</h4>
<pre>
K = 10
for i = 2 to N:
	parent[i] = rnd.next(1, min(i - 1, K))
</pre>

<h4>Type 3:</h4>
<pre>
K = int(N / 3) = 333
for i = 2 to N:
	if i >= K and i <= N - K:
		parent[i] = i - 1;
	else:
		if i < K:
			parent[i] = rnd.next(1, i - 1)
		else:
			Parent[i] = rnd.next(N - K, i - 1);
</pre>

<h4>Type 4</h4>
<pre>
Fix K = 25.

Create K trees with N / K nodes each.

for i = 2 to K:
	join the i-th tree with rnd.next(1, i - 1)-th tree.</pre>
<p>These two trees are joined by adding an edge between a randomly selected nodes from each tree.</p>

<p>Note that in all 4 types of tests, after running the above methods, the nodes are mapped to a random permutation of numbers {1, 2, ..., <b>N</b>}, which serve as new labels for the nodes; these labels are what is given as input. Therefore, the above mentioned methods won't generate the exact input trees, but the trees generated by them will be isomorphic to the actual input trees (so only the labels in the trees can change). Apart from this, the generation process is exactly as described above.</p>
