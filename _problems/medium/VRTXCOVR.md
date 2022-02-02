---
{"category_name":"medium","problem_code":"VRTXCOVR","problem_name":"Vertex Cover","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"kotlin"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"triveni","problem_tester":null,"date_added":"20-11-2017","tags":{"0":2,"1":"acm17chn","2":"chn17rol","3":"graphs","4":"medium","5":"triveni"},"editorial_url":"https://discuss.codechef.com/problems/VRTXCOVR","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given an undirected graph <b>G = (V, E)</b> containing <b>N</b> nodes and <b>M</b> edges. The nodes are numbered from 1 to <b>N</b>. A subset <b>C</b> of <b>V</b> is a <i>vertex cover</i> if for every edge (<b>u</b>, <b>v</b>) ∈ <b>E</b>, at least one of <b>u</b> and <b>v</b> belong to <b>C</b>. Note that <b>C = V</b> is always a vertex cover.</p>

<p>Consider a partition of <b>V</b> into two sets <b>A</b> and <b>B</b>. It is said to be a <i>valid</i> partition, if the following two conditions are satisfied: <b>A</b> should be a vertex cover. And for each <b>i</b> such that 1 ≤ <b>i</b> ≤ <b>n/2</b>, nodes <b>2*i</b> and <b>2*i - 1</b> don't belong to the same set (i.e. one belongs to set <b>A</b> and the other to set <b>B</b>).</p>

<p>Determine if a <i>valid</i> partition exists. If it exists, provide an example of one <i>valid</i> partition.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b> denoting the number of nodes and number of edges in the graph respectively.</li>
<li>Each of the following <b>M</b> lines contains two space-separated integers <b>u</b> and <b>v</b> denoting an edge between nodes <b>u</b> and <b>v</b>.</li>
</ul></p>

<h3>Output</h3>
<p><ul>
<li>For each test case, print a line containing the string <b>"possible"</b> (without quotes) if a solution exists or <b>"impossible"</b> otherwise. </li>
<li>If a solution exists, print a second line containing a binary string. The <b>i</b>-th character of this string should be '0' if vertex <b>i</b> is in set <b>B</b> or '1' if it is in set <b>A</b>. </li>
</ul></p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> ≤ 2 · 10<sup>5</sup></li>
<li>0 ≤ <b>M</b> ≤ 2 · 10<sup>5</sup></li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b> </li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 10<sup>6</sup></li>
<li>1 ≤ sum of <b>M</b> over all test cases ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

2
3 2
1 2
2 3
4 5
1 3
2 4
1 4 
1 2
2 3

<b>Output:</b>

possible
011
impossible
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> We can put nodes numbered 2 and 3 in set A and node 1 in set B. Note that this is a <i>valid</i> partition because set A is a vertex cover; also, nodes numbered 1 and 2 belong to different sets.</p>
<p><b>Example case 2:</b> There exists no partition which satisfies the conditions.</p>