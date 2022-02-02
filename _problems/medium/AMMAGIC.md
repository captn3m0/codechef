---
{"category_name":"medium","problem_code":"AMMAGIC","problem_name":"Magic Board","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"21-12-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Young Alex was playing alone on the upper floor of his family house when he accidentally found a dusty magic board set in some old and rusty chest. The board is a rectangle of size <b>n</b> × <b>m</b>. He also finds a collection of tiles each containing a single decimal digit [ie. 0 to 9]. You may assume that there are at least <b>n</b> * <b>m</b> tiles for each particular digit.
</p>

<p>There is also a manual lying nearby. The manual says that to start working with the magic board one needs to place exactly one tile containing a digit in each of the <b>n</b> * <b>m</b> cells of the board. After placing the tiles, we say that an integer x <i>can be read</i> from the board if one can pick any starting cell that contains the first digit of x and the remaining digits of x can be obtained as follows: Each successive digit should be obtained by moving to some cell that is either to the left, right, up or down of the current cell and reading its value. 
</p>

<p>
Formally, we denote <i>d(r, c)</i> as the digit placed in the cell located in row <i>r</i> and column <i>c</i>. Let <i>x = x<sub>1</sub>x<sub>2</sub>... x<sub>k</sub></i>, i.e. <i>x<sub>i</sub></i> stands for the <i>i</i>-th decimal digit of <i>x</i> and <i>x<sub>1</sub></i> ≠ 0. Then, to read x in the board one should find the sequence of cells <i>(r<sub>1</sub>, c<sub>1</sub>), (r<sub>2</sub>, c<sub>2</sub>), ..., (r<sub>k</sub>, c<sub>k</sub>)</i>, such that <i>d(r<sub>i</sub>, c<sub>i</sub>) = x<sub>i</sub></i>, and cells <i>(r<sub>i</sub>, c<sub>i</sub>)</i> and <i>(r<sub>i + 1</sub>, c<sub>i + 1</sub>)</i> share a side for every <i>i</i> from <i>1</i> to <i>k - 1</i>. Note that it is allowed for the sequence to contain the same cells two or more times, but two consecutive cells should be distinct.
</p>

<p>
The magic power of the board will be equal to the minimum positive integer that one can not read in the board. Alex has already filled all cells of the board with digits and now asks you to compute its power.
</p>

<h3>Input</h3>
<ul>
	<li>The first line contains a single integer <b>T</b> — the number of test cases in the given input. Then follow <b>T</b> descriptions of individual test cases.</li>
	<li>The first line of each test case contains two integers <b>n</b> and <b>m</b> — the number of rows and the number of columns in the given magic board.</li>
	<li>Each of the next <b>n</b> lines contains a sequence of <b>m</b> decimal digits representing the tiles placed on the corresponding row of the board. These will not be separated with spaces.</li>
</ul>


<h3>Output</h3>
<p>For each test case print the magic power of the board. That is, the minimum positive integer that cannot be read in the board according to the rules described above.</p>


<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>T</b> ≤ 5</li>
	<li>1 ≤ <b>n</b>, <b>m</b> ≤ 100</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 2
12
34
4 6
020241
103135
861272
529111
10 10
9910778386
2043114104
3060911314
7317085396
1710280734
5255219471
9131541790
4657660072
6302126963
1033147821

<b>Output:</b>
5
22
129
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b> The board has no digit 5, so 5 is the minimum possible integer that one won't be able to read. </p>
<p><b>Testcase 2:</b> There are no two cells with digit 2 that share a side.</p>
<p><b>Testcase 3:</b> Note that to read the integer 101 one will have to use the same cell twice, which is permitted.</p>