---
{"category_name":"hard","problem_code":"CHN12","problem_name":"Praveen falls from a tall tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"lca","3":"tree"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Praveen has climbed a tall tree and now he can't get down! While he is waiting for Arjun to bring a ladder, he has decided to amuse himself by numbering the <b>N</b> nodes of the tree from from <b>1</b> to <b>N</b> and associating a value <b>S[i]</b> with every vertex.
</p>

<p>
For that, he applies the following procedure.<br>
<pre>
<b>val</b> = 1
Let T be our tree.
while T is not empty:
	- Identify the branching nodes of tree T. A node of tree T is said to be a branching node if its degree &gt; 2. 
	- Choose all the nodes of T which have a path to any leaf node not passing through any of the branching nodes. 
	- Remove all of these chosen nodes from the tree T.
        - Set S value of all these removed nodes to be val.
	- Increase val by 1, i.e. val += 1

<b>Note</b> that first step of identification of branching nodes is re-done in each execution of the while loop.
</pre>
</p>

<p>
Please check the example problem statement to understand how this process works.

Note that Praveen cannot actually remove the nodes from the tree. He just simulates the procedure in his head's supercomputer.
</p>

<p>
After Arjun comes back with the ladder, Praveen decides to ask him <b>Q</b> queries about the tree. Each query will contain two nodes <b>u, v</b>. Let the path in the tree from node <b>u</b> to <b>v</b>, be <b>u, u<sub>1</sub>, u<sub>2</sub>, .., u<sub>r</sub>, v</b>. Consider the array <b>S[u], S[u<sub>1</sub>],..,S[u<sub>r</sub>], S[v]</b>.
For each query, Arjun has to find the number of inversion pairs in this array. <b>i</b> and <b>j</b> form an inversion pair, if <b>i > j</b> and <b>S[i] &lt; S[j]</b>. All these hours sitting atop the tree have made Praveen light in the head, and he refuses to come down until Arjun answers all his queries.
<br>
Unfortunately, Arjun does not have a supercomputer in his head like Praveen does and he has also left his laptop at home. So please help Arjun answer these queries and get Praveen down.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>For each test case: </li>
<ul>
	<li>The first line contains two space separated integers <b>N, Q</b> as defined in the statement</li>
	<li>Each of next <b>N - 1</b> lines contains two space separated integers <b>u, v</b> denoting that there is an edge between vertex <b>u</b> and <b>v</b> in the tree.</li>
	<li>Each of next <b>Q</b> lines will contain two space separated integers <b>u, v</b>, the nodes corresponding to the query.</li>
</ul>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print <b>Q</b> lines corresponding to the answers of the queries in separate lines.</li>
</ul>


<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>10<sup>5</sup></b></li>
<li><b>1</b> &le; <b>N, Q</b> &le; <b>10<sup>5</sup></b></li>
<li><b>1</b> &le; <b>u, v</b> &le; <b>N</b></li>
<li>Sum of all <b>N</b>, as well as sum of all <b>Q</b>, won't exceed 10<sup>5</sup>.</li>
</ul>

<h3>Example</h3>
<pre><b>Input 1:</b>
1
11 6
1 2
2 3
2 4
4 5
4 6
2 8
2 7
7 9
7 10
11 10
5 10
1 9
6 10
3 7
2 9
9 2

<b>Output 1:</b>
3
2
3
0
2
0
</pre>

<h3>Explanation</h3>

<img height="200" src="http://www.codechef.com/download/ACM15CHN/tree_s_array.jpg"/>
<p>
The figure is the tree corresponding to the given sample input. The nodes marked red have S value 1 and the black nodes have S Value 2. In the first step, the branching nodes are 2, 4 and 7. Nodes 1, 3, 5, 6, 8, 9, 11 are leaf nodes and can be removed, i.e they have S value 1. Even 10 can be removed and it also has S value 1. The branching nodes cannot be touched. In the next iteration, with val = 2, there are no branching nodes and we can remove nodes 2, 4 and 7 giving them S Value 2.</p>
<p>
The first query is (5,10). The path between nodes numbered 5 and 10 passes through nodes {5,4,2,7,10} with S values {1,2,2,2,1}. The number of inversions in this array is 3 formed by 3 pairs of {2,1}.
</p>
<p>
The second query is (1,9). The path between nodes numbered 1 and 9 passes through nodes {1,2,7,9} with S values {1,2,2,1}. The number of inversions in this array is 2 formed by 2 pairs of {2,1}.
</p>
<p>
The third query is (6,10). The path between nodes numbered 6 and 10 passes through nodes {6,4,2,7,10} with S values {1,2,2,2,1}. The number of inversions in this array is 3 formed by 3 pairs of {2,1}.
</p>
<p>
The fourth query is (3,7). The path between nodes numbered 3 and 7 passes through nodes {3,2,7} with S values {1,2,2}. There are no inversions in this array.
</p>
<p>
The fifth query is (2,9). The path between nodes numbered 2 and 9 passes through nodes {2,7,9} with S values {2,2,1}. The number of inversions in this array is 2 formed by 2 pairs of {2,1}.
</p>
<p>
The last query is (9,2). The path between nodes numbered 9 and 2 passes through nodes {9,7,2} with S values {1,2,2}. The number of inversions in this array is zero.
</p>

<pre><b>Input 2:</b>
1
20 4
1 2
2 3
2 4
4 6
5 6
6 20
8 20
7 20
4 9
9 10
10 19
17 19
18 19
10 11
11 12
11 13
13 14
13 15
15 16
4 10
1 16
17 18
11 11

<b>Output 2:</b>
0
18
1
0
</pre>

