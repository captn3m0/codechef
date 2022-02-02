---
{"category_name":"challenge","problem_code":"BYTELE","problem_name":"Bytelandian Telecom","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.30769,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1249547260,"submit_start_date":1249547260,"visible_start_date":1249547260,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align=justify>
King Johnny has a serious drink problem, which has recently become the focus of attention of all Bytelandian tabloids and colour magazines. In a desperate effort to divert the public's attention and ingratiate himself with his subjects, he decides to start giving out valuable gifts. This time he has chosen to harass the peaceful life of the CEO of Bytelandian Telecom, and requested him to create a Metropolitan Area Network for the citizens of the capital of Byteland, as part of an "our King is a good man" campaign.<p>
The CEO has no choice but to obey the orders he receives. This rational and business-minded man would obviously like to perform the installation at the smallest possible cost, and he asks you for your help.
<p>
The King has stated the topology of the network plainly enough in the form of a graph (not necessarily connected), with vertices corresponding to nodes (computers), and edges to the cable connections between them. It is now your task to select the points of the city to place the nodes of the network at. The city is a regular mesh of streets (depicted as vertical and horizontal segments on a map), with crossroads located at points with integer coordinates. Nodes may only be located at crossroads of streets (no two nodes at the same crossroad). Cables may only run along streets and must connect nodes by the shortest possible route under this constraint. Moreover, a cable of precisely such length must be currently in stock (you are provided with a list of possible cable lengths).

Try to layout the network in such a way as to minimise the total length of cable used.

<h3>Input</h3>
<p>
The input starts with a line containing integer <i>t</i> <= 1000, the number of test cases. <i>t</i> test cases follow.
<p>
The first line of a test cases begins with integer <i>k</i>, denoting the number of different available cable lengths, followed by <i>k</i> space separated integers <i>p<sub>j</sub></i> corresponding to the allowed lengths of cables (1 <= <i>k</i> <= 100, 1 <= <i>p<sub>j</sub></i> <= 100). The next line contains two integers <i>n m</i>, denoting the required number of nodes and cables in the network, respectively (1 <= <i>n</i> <= 100, 1 <= <i>m</i> <= 1000). The next m lines contain a pair of integers 
<i>a<sub>j</sub> b<sub>j</sub></i> each, signifying that nodes <i>a<sub>j</sub></i> and <i>b<sub>j</sub></i> should be connected by a cable (1 <= <i>a<sub>j</sub>,b<sub>j</sub> <= n</i>).</p>
<h3>Output</h3>
<p>
A valid solution to the <i>i</i>-th test case consists of a line with the text '<tt>city </tt><i>i</i><tt> Y</tt>', followed by <i>n<sub>i</sub></i> lines each containing two integers, the x- and y-coordinates of successive nodes in the solution (0 <= <i>x</i>,<i>y</i> <= 100).
<p>
It is guaranteed that for every test case there exists at least one possible solution. You can however leave out a test case by outputting the line '<tt>city </tt><i>i</i><tt> N</tt>' instead of a valid solution.
<h3>Score</h3>
<p align=justify>
For each correctly solved test case you are awarded (<i>m</i>/<i>sum</i>) * ((<i>p</i><sub>1</sub><i>+p</i><sub>2</sub><i>+...+p<sub>k</sub></i>)/<i>k</i>) points, where <i>sum</i> is the total length of all cables used.</p>
<p align=justify>
The score awarded to your program is the sum of scores for individual test cases.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 1 2
4 5
1 2
2 3
3 4
1 4
2 4
1 2
4 5
1 2
2 3
3 4
1 4
2 4
2 1 2
5 8
1 2
1 3
1 4
1 5
2 4
2 5
3 4
3 5
1 1
2 1
1 2

<b>Output:</b>
city 1 Y
0 0
0 1
1 1
1 0
city 2 Y
2 0
1 1
0 2
0 0
city 3 Y
0 1
0 2
1 1
1 2
0 0
city 4 N

<b>Score:</b>
score = 3.340003
</pre>
<p align=justify><i>Bonus info:</i> If score = <i>xxx</i>.<i>xxxaaa</i>, <i>aaa</i> means the number of test cases with non-zero score...</p>
