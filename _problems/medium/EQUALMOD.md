---
{"category_name":"medium","problem_code":"EQUALMOD","problem_name":"Modulo Equality","languages_supported":{"0":"C","1":"JAVA","2":"PYTH","3":"PYTH 3.5","4":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"29-10-2017","tags":{"0":"acmind17","1":"easy","2":"prefix","3":"wittyceaser"},"time":{"view_start_date":1509900600,"submit_start_date":1509900600,"visible_start_date":1509900600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You have two arrays <b>A</b> and <b>B</b>, each containing <b>N</b> integers.</p>

<p>Elements of array <b>B</b> cannot be modified.</p>

<p>You may perform an arbitrary number of operations (including zero number of operations). In one operation, you can choose one index i (1 ≤ i ≤ <b>N</b>) and increment <b>A<sub>i</sub></b> by 1. Each index can be chosen any number of times.</p>

<p>
Find the minimum number of operations required to modify the array <b>A</b> such that for every pair <b>i, j (1 ≤ i, j ≤ N)</b>, 
<b>(A<sub>i</sub> % B<sub>i</sub>)</b> equals <b>(A<sub>j</sub> % B<sub>j</sub>)</b>. Here, % denotes the modulo operator (the remainder after dividing by <b>B<sub>i</sub></b>). Note that <b>0 ≤ (A<sub>i</sub> % B<sub>i</sub>) < B<sub>i</sub></b>.
</p>


<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of testcases. The description of <b>T</b> testcases is as follows:</p>
<p>First line of each testcase contains a positive integer <b>N</b>, denoting the number of elements in arrays <b>A</b> and <b>B</b>.</p>
<p>Second line contains <b>N</b> space-separated whole numbers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>
<p>Third line contains <b>N</b> space-separated natural numbers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>N</sub></b>.</p>

<h3>Output</h3>
<p>For each testcase, output a single line containing the minimum number of operations required to modify the array <b>A</b> in order to satisfy the required conditions. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5 * 10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Sum of <b>N</b> across all testcases in a single file will be ≤ <b>5 * 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
4 2 2
5 3 4
4
2 1 1 2
3 3 3 3

<b>Output:</b>
3
2
</pre>

<h3>Explanation</h3>
<p>
	<b>Example case 1.</b> 
	<b>A<sub>1</sub></b> can be increased from <b>4</b> to <b>7</b> in <b>3 operations</b> so that:
	<ul>
		<li>A<sub>1</sub> % B<sub>1</sub> = 2</li>
		<li>A<sub>2</sub> % B<sub>2</sub> = 2</li>
		<li>A<sub>3</sub> % B<sub>3</sub> = 2</li>
	</ul>
</p>
<p>
	<b>Example case 2.</b> 
	<b>A<sub>2</sub>, A<sub>3</sub></b> can <b>both be increased</b> from <b>1</b> to <b>2</b> in <b>2 operations</b> total so that:
	<ul>
		<li>A<sub>1</sub> % B<sub>1</sub> = 2</li>
		<li>A<sub>2</sub> % B<sub>2</sub> = 2</li>
		<li>A<sub>3</sub> % B<sub>3</sub> = 2</li>
		<li>A<sub>4</sub> % B<sub>4</sub> = 2</li>
	</ul>
</p>