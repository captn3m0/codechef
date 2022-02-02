---
{"category_name":"hard","problem_code":"ZUBHTREE","problem_name":"F - Huge Number of Trees","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"12-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Hermione needs to solve a tough homework problem in Arithmancy class. Professor Vector was discussing trees for some time and now he gives the problem: Say, there are <b>n</b> + 1 nodes numbered 0, 1, 2, ..., <b>n</b>. Node 0 is always the root of the tree. How many different trees can be formed using the remaining <b>n</b> nodes so that all leaves have the same <i>depth</i> and the <i>degree</i> of each non-leaf node is at least <b>d</b>? Here, <i>depth</i> of a node <b>u</b> is the number of edges we need to traverse from the root (Node 0) to reach <b>u</b>. A tree is different from another tree if there exists at least one pair of nodes <b>(u, v)</b> for which an edge between <b>u</b> and <b>v</b> is present in one tree, but absent in the other one. Hermione wants your help to write a program to solve this problem.
</p>

<p>Note that by <i>degree</i>, we mean the total number of neighbors, not just the number of children.</p>

<h3>Input</h3>
<ul>
<li>
The first line of the input contains a positive integer, <b>T</b> which denotes the number of test cases.
</li>
<li>
For each case, there is one line of input containing two integers: <b>n</b> and the minimum degree of each non-leaf node, <b>d</b>.
</li>
</ul>

<h3>Output</h3>
<p>For each test case, print "Case i: ", and then the answer (mod 10<sup>9</sup> + 7), where i is the testcase number, 1-indexed.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 2000</li>
<li>2 ≤ <b>n</b> ≤ 500</li>
<li>2 ≤ <b>d</b> ≤ 10</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
3 2
4 2

<b>Output:</b>
Case 1: 1
Case 2: 1
Case 3: 13
</pre>

<h3>Explanation</h3>

<p><b>Testcase 1:</b> The only valid tree is shown below:</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBHTREE/ZUBHTREE.1.png" height="100"/>
</p>

<p><b>Testcase 2:</b> The only valid tree is shown below:</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBHTREE/ZUBHTREE.2.png" height="100"/>
</p>


<p><b>Testcase 3:</b> The 13 different valid trees are as shown below:</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBHTREE/ZUBHTREE.3.png" height="400"/>
</p>