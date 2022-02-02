---
{"category_name":"hard","problem_code":"CHEFTREE","problem_name":"Chef and Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"9-12-2015","tags":{"0":"cook65","1":"data","2":"hard","3":"heavy","4":"mgch","5":"segment"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTREE","time":{"view_start_date":1450636200,"submit_start_date":1450636200,"visible_start_date":1450636200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/mandarin/CHEFTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/russian/CHEFTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFTREE.pdf">Vietnamese</a> as well.</h3>


<p>
Chef has a tree on <b>N</b> nodes. Each node <b>v</b> has an integer label <b>C<sub>v</sup></b> attached to it. Chef also has two other integers, <b>A</b> and <b>B</b>. He needs to run <b>Q</b> queries on the tree, each of which can be one of the following two types:
<li>1 <b>u</b> <b>v</b> <b>w</b> — add <b>w</b> to the labels of all vertices which lie on a simple path between nodes <b>u</b> and <b>v</b>.</li>
<li>2 <b>u</b> <b>v</b> — find the number of vertices <b>x</b> on a simple path between <b>u</b> and <b>v</b> for which <b>A</b>*<b>C<sub>x</sub></b> + <b>B</b> ≥ 0.</li>
</p>
<p>
Please help Chef run these queries.
</p>

<h3>Input</h3>
The first line of input contains an integer <b>T</b> denoting the number of test cases. 
<li>The first line of each test case contains two positive numbers: <b>N</b> and <b>Q</b>.</li>
<li>The second line of each test case contains two positive numbers <b>A</b> and <b>B</b>.</li>
<li>The third line of each test case contains <b>N</b> integers — <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ... , <b>C<sub>N</sub></b> — labels of the nodes.</li>
<li>The next <b>N - 1</b> lines contain two integers <b>u</b>, <b>v</b> each, denoting a pair vertices connected by an edge. </li>
<li>The following <b>Q</b> lines contains queries.</li>

<h3>Output</h3>
For each query of the second type, output a single line containing a single integer — its result.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N, Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>u, v</b> ≤ <b>N</b></li>
<li>0 ≤ <b>A</b>, |<b>B</b>|, |<b>C<sub>i</sub></b>| ≤ 10<sup>9</li>
<li>1 ≤ <b>w</b> ≤ 10<sup>4</sup></li>
<li>Sum of <b>N</b> over all test cases cannot be greater than 10<sup>5</sup>.</li>
<li>Sum of <b>Q</b> over all test cases cannot be greater than 10<sup>5</sup>.</li>
<li>All numbers in the input are integers.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>1
5 6
1 0
-1 2 -3 4 -5
1 2
1 3
2 4
2 5
1 4 3 1
2 4 3
1 3 3 1
2 3 3
1 3 3 2
2 4 3
</tt>
<b>Output:</b>
<tt>3
0
4
</tt>
</pre>