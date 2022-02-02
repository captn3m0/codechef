---
{"category_name":"medium","problem_code":"QTRAGAIN","problem_name":"Queries on tree again","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"admin2","1":"data","2":"easy","3":"gwr17rol"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You have a rooted tree with <b>N</b> nodes which are numbered from 1 to <b>N</b>. It is rooted at node 1. Each node has a value associated with it, which is 0 initially. The distance between two nodes is the number of edges in the unique path between them. You need to support the following two operations:</p>

<ul>
<li>Update operation at node <b>x</b> with value <b>y</b>:
	<ul>
		<li>Add 2<sup><b>y</b></sup> to node <b>x</b>.</li>
		<li>Consider every node in the subtree of <b>x</b>, and suppose d is distance from <b>x</b> to the node. If <b>y</b> - d ≥ 0, add 2<sup>(<b>y</b> - d)</sup> to the value associated with that node.</li>
		<li>Consider all the ancestors of <b>x</b>, and suppose d is distance from <b>x</b> to the ancestor. If <b>y</b> - d ≥ 0, add 2<sup>(<b>y</b> - d)</sup> to the value associated with that ancestor.</li>
	</ul>
</li>
<li>Query operation at node <b>x</b>:
       <ul>
	<li>Output the current value associated with node <b>x</b>, modulo 10<sup>9</sup> + 7.</li>
        </ul>
</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>

<li>The first line of each test case contains two space-separated integers <b>N, Q</b> denoting the number of nodes, and the number of operations respectively. </li>
<li>Each of the next <b>N</b> - 1 lines contains two space-separated integers: <b>u</b>, <b>v</b>, denoting that there is an edge between nodes <b>u</b> and <b>v</b> in the tree.</li>
<li>Each of the next <b>Q</b> lines contain description of an operation, which will be of one of these formats: 
	<ul>
		<li>Update operation: You will be given three space-separated integers: 1, <b>x</b>, <b>y</b>. </li>
		<li>Query operation: You will be given two space-separated integers: 2, <b>x</b>. </li>
	</ul>
</li>
</ul>

<h3>Output</h3>
<p>For each Query operation, output a single integer in a new line corresponding to the answer of the query.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>Q</b> ≤ 1.5 * 10<sup>6</sup></li>
<li>1 ≤ <b>u</b>, <b>v</b>, <b>x</b> ≤ <b>N</b></li>
<li>1 ≤ <b>y</b> ≤ 60</li>
<li>Sum of <b>N</b> over all test cases in a single file ≤ 10<sup>6</sup></li>
<li>Sum of <b>Q</b> over all test cases in a single file ≤ 1.5 * 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
1
4 8
1 2
2 3
2 4
1 1 2
1 2 3
1 3 1
1 4 2
2 1
2 2
2 3
2 4

<b>Output</b>
9
13
7
9
</pre>

<h3>Explanation</h3>
<p>Let the values associated with the nodes be v<sub>1</sub>, v<sub>2</sub>, v<sub>3</sub>, and v<sub>4</sub>.</p>
<ul>
<li>Initially, v<sub>1</sub> = 0, v<sub>2</sub>= 0, v<sub>3</sub> = 0, and v<sub>4</sub> = 0</li>

<li>After first update operation, v<sub>1</sub> = 4, v<sub>2</sub>= 2, v<sub>3</sub> = 1, and v<sub>4</sub> = 1</li>

<li>After second update operation, v<sub>1</sub> = 4 + 4, v<sub>2</sub>= 2 + 8, v<sub>3</sub> = 1 + 4, and v<sub>4</sub> = 1 + 4</li>

<li>After third update operation, v<sub>1</sub> = 4 + 4, v<sub>2</sub>= 2 + 8 + 1, v<sub>3</sub> = 1 + 4 + 2, and v<sub>4</sub> = 1 + 4</li>

<li>After fourth update operation, v<sub>1</sub> = 4 + 4 + 1, v<sub>2</sub>= 2 + 8 + 1 + 2, v<sub>3</sub> = 1 + 4 + 2, and v<sub>4</sub> = 1 + 4 + 4</li>
</ul>
</p>

<p>So after this, we have v<sub>1</sub> = 9, v<sub>2</sub> = 13, v<sub>3</sub> = 7, and v<sub>4</sub> = 9, and this is outputted in the following query operations.</p>