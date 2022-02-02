---
{"category_name":"medium","problem_code":"ROBOTDAG","problem_name":"Robots in a DAG","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"2-06-2017","tags":{"0":"admin3"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/ROBOTDAG.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/ROBOTDAG.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/ROBOTDAG.pdf">Vietnamese</a> as well.</h3>

<p>The annual Robotics Fest has started, and you have registered for an event in it, for which you have to build <b>K</b> robots and make them traverse a maze. The maze is in the form of a directed acyclic graph (DAG). That is, you can think that there is a graph with <b>N</b> vertices and <b>M</b> edges. Let the nodes be numbered from 1 to <b>N</b>. The edges are <b>E<sub>1</sub>, E<sub>2</sub></b>, ..., <b>E<sub>M</sub></b>, where <b>E<sub>i</sub></b> = (<b>u<sub>i</sub>, v<sub>i</sub></b>), denoting that a robot can travel from <b>u<sub>i</sub></b> to <b>v<sub>i</sub></b>.The robots start from node 1 and have to reach node <b>N</b>. The graph's edges do not form any directed cycles, and there are no self-loops or multiple edges.</p>

<p>All the <b>K</b> robots travel at the speed of 1 edge per second, and all of them start at the same time. Once a robot reaches node <b>N</b>, it is taken out of the maze. But till then, a robot has to keep moving. That is, a robot cannot wait at any node. And since the maze's paths are narrow, at most one robot can traverse that edge in any given second.</p>

<p>Formally, we can represent the i-th robot's trip using a series of edges: <b>E<sub>i1</sub>, E<sub>i2</sub>, .., E<sub>ix</sub></b>, where <b>E<sub>i1</sub></b> is an edge which goes out of node 1 and <b>E<sub>ix</sub></b> is an edge which goes into node <b>N</b>. For any i, j such that i ≠ j, there should not be a t, such that <b>E<sub>it</sub> = E<sub>jt</sub></b>.</p>

<p>The aim of the contest is to program your robots in such a manner that they travel obeying these constraints, and minimizing the maximum distance traveled by your robots. That is, consider the number of edges traveled by a robot, and take the maximum of this among all your <b>K</b> robots. This value should be minimized. Output this minimum value. And if it is not possible to program the robots according to the conditions, output -1 instead. </p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, denoting the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains three integers: <b>N, M</b> and <b>K</b>, denoting the number of nodes, number of edges, and the number of robots respectively.</li>
<li>The i-th of the next <b>M</b> lines contains two integers, <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, denoting that there is an edge from <b>u<sub>i</sub></b> to <b>v<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output a single line containing a single integer which should be the minimum maximum distance traveled by the robots, or -1, if it is not possible to send all the <b>K</b> robots.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>2 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>M, K</b> ≤ 1000</li>
<li>1 ≤ <b>u<sub>i</sub>, v<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
8 11 1
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7
8 11 2
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7
8 11 3
1 2
1 3
1 4
6 7
2 5
3 6
3 2
4 6
5 7
7 8
2 7

<b>Output:</b>
3
4
5
</pre>

<h3>Explanation</h3>
<p>The graphs in all the three testcases are the same. Only the number of robots change.</p>

<p><b>Test Case 1:</b> There is only one robot, and it can take this sequence of edges: (1, 2), (2, 7), (7, 8). The maximum distance traveled among all the robot(s) is 3, and hence the answer is 3. This cannot be lowered.</p>

<p><b>Test Case 2:</b> There are two robots, and one optimal solution is to make the first robot take this path: (1, 2), (2, 7), (7, 8) and make the second robot take this path: (1, 3), (3, 6), (6, 7), (7, 8). Note that the edge (7, 8) was traversed by both robots, but one did it at the third second, and the other at the fourth second, and hence it is allowed. The distances traveled by the robots are 3 and 4, and the maximum among that is 4. This cannot be lowered, and hence the answer is 4.</p>

<p><b>Test Case 3:</b> There are three robots, and one optimal solution is to make the first robot take this path: (1, 2), (2, 7), (7, 8), make the second robot take this path: (1, 4), (4, 6), (6, 7), (7, 8) and make the third robot take this path: (1, 3), (3, 2), (2, 5), (5, 7), (7, 8). Note that the edge (7, 8) was traversed by all three robots, but one did it at the third second, one did it at the fourth second, and the other at the fifth second, and hence it is allowed. The distances traveled by the robots are 3, 4, and 5, and the maximum among them is 5. This cannot be lowered, and hence the answer is 5.</p>