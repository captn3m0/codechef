---
{"category_name":"hard","problem_code":"KILLER","problem_name":"Painting Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tanuj_khattar","problem_tester":null,"date_added":"8-05-2017","tags":{"0":"convex","1":"hld","2":"may17","3":"tanuj_khattar","4":"tree"},"editorial_url":"https://discuss.codechef.com/problems/KILLER","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a rooted unweighted tree with <b>N</b> nodes. The nodes are numbered from 1 to <b>N</b>. Node 1 is the root. You want to paint all the vertices of this tree. There are different brushes already present in each of the nodes. You can pick the brush at one node and in a single stroke paint some consecutive nodes on the path from this node to the root, starting at this node. You want to make sure that you paint each node exactly once. Now that you have the story in mind, we will shift to a more formal description:</p>

<p>
A path in this tree is <i>good</i> if no two different vertices on this path are at the same distance from the root. Informally, good paths refer to paths between a node and its ancestor. A path containing a single node is good.
</p>

<p>
You need to partition all the vertices into good paths such that the total cost (describe below) is minimized. That is, you should select a set of good paths such that every node is in exactly one of the selected paths.
</p>


<p>Depth(u) is defined to be the number of edges on the path from the root to u. So depth(1) = 0, as 1 is the root.
h is the maximum depth among all the nodes.
</p>

<p>
<b>Cost of a path:</b></br>
<p>Let P be a good path. Let u be the node which is farthest away from the root, on this path. The cost of this path is the (summation of <b>C</b><sub>uw</sub>, for all w in the path) - <b>H</b>[u].</p>
<p><b>C</b><sub>uw</sub> is equal to (<b>C</b>[u]*(h - depth(w)) + <b>C</b>[u]<sup>2</sup>), where <b>C</b>[u] is given to you.</p>
<p>So, put together, cost of the path = sum of ((<b>C</b>[u]*(h - depth(w)) + <b>C</b>[u]<sup>2</sup>)) - <b>H</b>[u]) for all nodes w in the path. </p>
<p>The total cost is the sum of costs of each of the paths that you have selected. Output the minimum total cost with which you can paint all nodes.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Description of <b>T</b> test cases follow.</p>
<p>The first line of each test case contains one integer <b>N</b>.</p>
<p>The i-th of the next <b>N</b> lines contain two integers each: <b>H</b>[i] and <b>C</b>[i].</p>
<p>The next N-1 lines contain two integers each: u and v denoting that there is an edge between u and v.</p>

<h3>Output</h3>
<p>For each test case, output one integer per line denoting the minimum total cost.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>C</b>[i] ≤ 10<sup>5</sup></li>
<li>-10<sup>12</sup> ≤ <b>H</b>[i] ≤ 10<sup>12</sup></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (4 points)</b> 
<ul>
<li>1 ≤ <b>N</b> ≤ 5000</li>
<li>The tree is guaranteed to be a path. In particular, Node 1 is one of the end points of this path and Nodes i and i+1 are adjacent for all 1 ≤  i < <b>N</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (8 points)</b> 
<ul>
<li>1 ≤ <b>N</b> ≤ 5000</li>
</ul>
</p>

<p>
<b>Subtask #3 (48 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 100000</li>
<li>The tree is guaranteed to be a path. In particular, Node 1 is one of the end points of this path and Nodes i and i+1 are adjacent for all 1 ≤  i < <b>N</b></li>
</ul>
</p>

<p>
<b>Subtask #4 (40 points)</b>
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>

<pre>
<b>Input</b>
2
3
4 5
2 3
2 2
1 2
1 3
6
1 10
1 8
10 1
1 5
9 3
8 2
1 2
1 6
2 3
2 4
4 5

<b>Output</b>
15
11
</pre>

<h3>Explanation</h3>
<p><b>Example Test case 2.</b> </p>

<p><img height="100" src="https://codechef_shared.s3.amazonaws.com/upfiles/killer.png"/></p>

<p>The values in the brackets are (H,C)</p>
<p>The optimal solution is to paint the nodes (1,2,3) with brush 3, nodes (4,5) with brush 5 and node 6 with brush 6.</p> 
<p>depth[1] = 0, depth[2] = 1, depth[3] = 2, depth[4] = 2, depth[5] = 3, depth[6] = 1</p>
<p>Hence, h = 3.</p>

</p> C[3] * (h - depth[3]) + C[3]^2 = 1 * (3 - 2) + 1^2 = 2</p>

<p>C<sub>32</sub>  = C[3] * (h - depth[2]) + C[3]^2 = 1 * (3 - 1) + 1^2 = 3</p>

<p>C<sub>31</sub> = C[3] * (h - depth[1]) + C[3]^2 = 1 * (3 - 0) + 1^2 = 4</p>

<p>C<sub>55</sub> = C[5] * (h - depth[5]) + C[5]^2 = 3 * (3 - 3) + 3^2 = 9</p>

<p>C<sub>54</sub> = C[5] * (h - depth[4]) + C[5]^2 = 3 * (3 - 2) + 3^2 = 12</p>

<p>C<sub>66</sub> = C[6] * (h - depth[6]) + C[6]^2 = 2 * (3 - 1) + 2^2 = 8</p>

<p><b>Total Cost</b> = 2 + 3 + 4 + 9 + 12 + 8 - H[3] - H[5] - H[6] = 38 - 10 - 9 - 8 = 11</p>