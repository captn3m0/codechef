---
{"category_name":"hard","problem_code":"FARGRAPH","problem_name":"Far Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"18-12-2017","tags":{"0":"admin3","1":"cook90","2":"graph","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/FARGRAPH","time":{"view_start_date":1516559400,"submit_start_date":1516559400,"visible_start_date":1516559400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/mandarin/FARGRAPH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/russian/FARGRAPH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/vietnamese/FARGRAPH.pdf">Vietnamese</a> as well.</h3>

<p>Consider a positive even integer <b>L</b> and <b>N</b> distinct integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> such that <b>| a<sub>i</sub> - a<sub>j</sub> |</b> ≤ <b>L</b> for all 1 ≤ <b>i</b>, <b>j</b> ≤ <b>N</b>. Now, we define a <i>far graph</i> induced by <b>L</b> and <b>a<sub>1..N</sub></b> as a graph with <b>N</b> vertices (numbered 1 through <b>N</b>) satisfying the following condition: for each pair of vertices <b>u</b> and <b>v</b>, there is an undirected edge between <b>u</b> and <b>v</b> if and only if <b>| a<sub>u</sub> - a<sub>v</sub> |</b> ≥ <b>L/2</b>.</p>

<p>Given a simple graph <b>G</b>, you should find integers <b>L</b> and <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> such that <b>G</b> is a far graph induced by them, or determine that no such integers exist.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of testcases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b> denoting the number of vertices and the number of edges in the input graph <b>G</b> respectively.</li>
<li>Each of the following <b>M</b> lines contains two space-separated integers <b>u</b> and <b>v</b> denoting an edge between vertices <b>u</b> and <b>v</b>.</li>
</ul>

<h3>Output</h3>
For each test case:<ul>
<li>If it's impossible to choose valid numbers <b>L</b> and <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> such that the graph <b>G</b> is a far graph, print a single line containing a single string <tt>"No"</tt> (without quotes).</li>
<li>Otherwise, print two lines.</li>
<li>The first line should contain a single string <tt>"Yes"</tt> (without quotes).</li>
<li>The second line should contain <b>N+1</b> space-separated integers <b>L, a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> such that <b>G</b> is a far graph and the following constraints hold:
<ul>
<li>1 ≤ <b>L</b> ≤ 2 · 10<sup>9</sup></li>
<li><b>L</b> is even</li>
<li>all <b>a<sub>i</sub></b> are distinct</li>
<li>-10<sup>9</sup> ≤ <b>a<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>
It's guaranteed that if <b>G</b> is an induced far graph, then it's possible to choose <b>L, a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> satisfying these constraints.
</li>
<li>If there are multiple solutions, you may output any one.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>2 ≤ <b>N</b> ≤ 1000</li>
<li>1 ≤ <b>M</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li>the graph will not contain multiple edges or self-loops</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
1 2
2 3
3 1
7 8
1 6
1 4
3 2
6 3
3 4
4 5
4 7
5 6
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
Yes
2 12 10 11
Yes
20 7 12 1 20 4 17 10
No
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> There are 3 vertices connected in a cycle. We can take <b>L</b> = 2, <b>a<sub>1</sub></b> = 12, <b>a<sub>2</sub></b> = 10 and <b>a<sub>3</sub></b> = 11. Since | 12 - 10 | ≥ 1, | 10 - 11 | ≥ 1, and | 11 - 12 | ≥ 1, this means that there are edges between pairs of vertices (1, 2), (2, 3) and (3, 1) respectively. This is exactly the given graph, so the answer is "Yes", and we print these values.</p>

<p><b>Example case 2:</b> The figure below shows the graph with the values mentioned in the sample output.</p>

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/FARGRAPH.png" height="300"/>

<p>We take <b>L</b> = 20. You can check that there is an edge between two vertices if and only if the values differ by at least <b>L/2</b> = 10.</p>

<p><b>Example case 3:</b> No matter what values we try, we will not be able to get the input graph as the induced far graph. Hence the answer is "No".</p>