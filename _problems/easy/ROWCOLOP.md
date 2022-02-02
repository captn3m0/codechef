---
{"category_name":"easy","problem_code":"ROWCOLOP","problem_name":"Row and Column Operations","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"6-02-2013","tags":{"0":"anton_lunyov","1":"cook31","2":"simple","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ROWCOLOP","time":{"view_start_date":1361126625,"submit_start_date":1361126625,"visible_start_date":1361126539,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given an <b>N × N</b> grid initially filled by zeros. Let the rows and columns of the grid be numbered from <b>1</b> to <b>N</b>, inclusive. There are two types of operations can be applied to the grid:</p>
<ul>
<li><b>RowAdd R X</b>: all numbers in the row <b>R</b> should be increased by <b>X</b>.</li>
<li><b>ColAdd C X</b>: all numbers in the column <b>C</b> should be increased by <b>X</b>.</li>
</ul>

<p>Now after performing the sequence of such operations you need to find the maximum element in the grid.</p>
<h3>Input</h3>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>Q</b> denoting the size of the grid and the number of performed operations respectively. Each of the following <b>Q</b> lines describe an operation in the format described above.</p>
<h3>Output</h3>
<p>Output a single line containing the maximum number at the grid after performing all the operations.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>3141</b></li>
<li><b>1</b> ≤ <b>R, C</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 4
RowAdd 1 3
ColAdd 2 1
ColAdd 1 4
RowAdd 2 1

<b>Output:</b>
7
</pre><h3>Explanation</h3>
<p>The grid changes as follows:</p>
<pre><code>00  33  34  74  74
00  00  01  41  52</code></pre>
<p>The maximum number in the final grid is 7.</p>
