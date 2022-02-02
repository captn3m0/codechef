---
{"category_name":"medium","problem_code":"TWOTREES","problem_name":"A tale of two trees","languages_supported":{"0":"C","1":"JAVA","2":"PYTH","3":"PYTH 3.5","4":"PYPY"},"max_timelimit":1.2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"30-10-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1509900600,"submit_start_date":1509900600,"visible_start_date":1509900600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>
<p>There are two trees; tree 1 has <b>N<sub>1</sub></b> nodes which are numbered from 1 to <b>N<sub>1</sub></b>, and tree 2 has <b>N<sub>2</sub></b> nodes which are numbered from 1 to <b>N<sub>2</sub></b>. Each tree is rooted at its node 1.</p>

<p>You should perform the following operation: choose an arbitrary node <b>u</b> in tree 2, remove the subtree of node <b>u</b> (the subtree formed by node <b>u</b> and all its direct or indirect descendants) from tree 2 and add the subtree to any leaf of tree 1 (ie. <b>u</b> should become a child of some leaf in tree 1). Note that  <b>u</b> can also be the root of tree 2. Afterwards, discard the rest of tree 2 and keep only the modified tree 1. How many distinct trees can you obtain by performing this operation exactly once?</p>

<p>Note that tree 1 will remain rooted in its own node 1. Two trees are considered identical if you can reorder (without changing the root) the children in each node and renumber the nodes (except the root) to make them equal. (Intuitively, the structure of the trees must be same - we're dealing with rooted, unlabelled, unordered isomorphic trees.)</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>N<sub>1</sub></b> and <b>N<sub>2</sub></b> denoting the number of nodes in tree 1 and tree 2 respectively. </p>
<p>The second line contains <b>N<sub>1</sub> - 1</b> space-separated integers <b>A<sub>2</sub></b>, <b>A<sub>3</sub></b>, ..., <b>A<sub>N<sub>1</sub></sub></b> with each <b>A<sub>i</sub></b> denoting the parent of node <b>i</b> in tree 1 </p>
<p>The third line contains <b>N<sub>2</sub> - 1</b> space-separated integers <b>B<sub>2</sub></b>, <b>B<sub>3</sub></b>, ..., <b>B<sub>N<sub>2</sub></sub></b> with each <b>B<sub>i</sub></b> denoting the parent of node <b>i</b> in tree 2 </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number of distinct trees obtained by performing the above operation exactly once.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2</b> ≤ <b>N<sub>1</sub>, N<sub>2</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li>The sum of <b>N<sub>1</sub></b> across all test cases does not exceed <b>10<sup>6</sup></b></li>
<li>The sum of <b>N<sub>2</sub></b> across all test cases does not exceed <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> &lt; <b>i</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 1
1 1
3 4
1 1
1 1 2

<b>Output:</b>
2
3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are two distinct trees that can be formed: the first type is making the entire tree 2 a child of one of the 2 leaves of tree 2 and the other being making one of the leaves of tree 2 a child of one of the leaves of tree 1. Note that which leaf doesn't matter as they can be rearranged to obtain the other way (i.e. if we add it to left leaf, then it is same as adding to the right leaf as we can rearrange the leafs to make it same)</p>
<p><b>Example case 2.</b> The 3 distinct trees are formed by: make the entire tree 2, subtree rooted at node 2 or any of the leaf of tree 2 the child of a leaf of tree 1</p>