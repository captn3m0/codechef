---
{"category_name":"hard","problem_code":"KOL15E","problem_name":"Weird Paths in a tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"14-10-2015","tags":{"0":"acmkol15","1":"devuy11","2":"dynamic","3":"medium","4":"rooted","5":"treeroot"},"editorial_url":"http://discuss.codechef.com/problems/KOL15E","time":{"view_start_date":1446296400,"submit_start_date":1446296400,"visible_start_date":1446296400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a tree. Each node of the tree is assigned a distinct value.</p>
<p>A path in the tree is considered weird if the values in the path increase and decrease alternatively.</p>
<p>For example: Consider a straight chain of nodes 1→3→2→4→5 with value assigned to any node <b>i</b> being <b>i</b> itself. Then the path 3→2→4, 1→3→2, etc. are weird whereas 1→3→2→4→5 is not weird because 2→4 and 4→5 are both increasing.</p>
<p>You are given <b>Q</b> queries. Each query contains the root of the tree, <b>R</b>, and an arbitrary node, <b>S</b>. For each query, you need to find the sum of all weird paths in the subtree rooted at <b>S</b> with respect to <b>R</b> being the root of the original tree. Sum of a path is defined as the sum of values assigned to all nodes on that path. As this sum could be very large, output it modulo <b>M</b>.</p>
<b>Note:</b>
<ul>
<li>Paths of length 2 are always considered weird.</li>
<li>A path is always defined for more than 1 node.</li>
</ul>

<h3>Input</h3>
<p>The first line of input contains 2 integers, <b>N</b> and <b>M</b>.</p>
<p>Second line contains <b>N</b> space separated numbers where the <b>i</b><sup>th</sup> number denotes the value of the <b>i</b><sup>th</sup> node. These <b>N</b> numbers are permutation of the sequence of numbers from <b>1</b> to <b>N</b>.</p>
<p>For the next <b>N-1</b> line, each line contains 2 numbers <b>a</b> and <b>b</b>, denoting that node <b>a</b> is connected to node <b>b</b>.</p>
<p>Next line contains a single integer <b>Q</b>, the number of queries to follow.</p>
<p>Lastly, <b>Q</b> lines follow, where each line contains two space separated integers, <b>R</b> and <b>S</b>.</p>

<h3>Output</h3>
<p>For each query, output the sum modulo <b>M</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6 100000
1 2 3 4 5 6
1 2
2 5
1 4
3 4
1 6
5
3 1
5 2
1 6
2 4
5 1

<b>Output:</b>
26
81
0
7
52

</pre>

<h3>Explanation</h3>
<p><b>Query 1: </b>Nodes in the subtree 1 are [1,2,5,6]. Valid Paths are 5→2 , 2→1, 1→6, 2→1→6 . Corresponding sums are 7, 3, 7, and 9. Total sum is 26.</p>
<b>Note:</b>
<ul>
<li>A Path lies in a subtree if all nodes on the path are in the subtree.</li>
</ul>