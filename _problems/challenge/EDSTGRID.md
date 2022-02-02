---
{"category_name":"challenge","problem_code":"EDSTGRID","problem_name":"Edit Distance on Grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.930359,"source_sizelimit":50000,"problem_author":"ACRush","problem_tester":"shangjingbo","date_added":"28-08-2013","tags":{"0":"ACRush"},"editorial_url":"http://discuss.codechef.com/problems/EDSTGRID","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/EDSTGRID.pdf">here</a></h3>
<h3>Problem description.</h3>
<p> Recently, Chef is learning how to compute the edit distance between two strings.<br />
Today, Chef wants to generalize the concept of edit distance to 2D-grid(s).</p>
<p> Given a 2D-grid with <b>N</b> rows and <b>M</b> columns,<br />
each cell of the grid is either white or black.<br />
There are three operations to change the grid:<br /><br />
1) Swap two cells share a common edge, which takes 1 second, or <br /><br />
2) Change one white cell to black, which takes <b>C<sub>2</sub></b> seconds. <br /><br />
3) Change one black cell to white, which takes <b>C<sub>3</sub></b> seconds. <br /><br />
The parameters <b>C<sub>2</sub></b> and <b>C<sub>3</sub></b> are known, but may be different in different cases. </p>
<p> Now, Chef wants to know the minimal edit distance from the given grid to any connected grid.<br />
So, your job is to change the given grid by the three operations above, and make the grid connected as soon as possible. </p>
<p> One grid is connected if it contains no black cells or all black cells are connected.<br />
Two cells A and B are directly connected if their cells share a common edge.<br />
Two cells A and B are connected indirectly if there exists another cell C such that A and C are connected (indirectly or directly)<br />
and B and C are connected (indirectly or directly).</p>
<p> For scoring propose, your submission will get "Wrong Answer" if the number of operations for any test case exceeds 1000000. The task does not require minimality, but less time will score more points.</p>
<h3>Input</h3>
<p> The first line of the input file contains an integer <b>T</b>, the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each test case contains four integers <b>N</b>, <b>M</b>, <b>C<sub>2</sub></b> and <b>C<sub>3</sub></b><br />
denoting the size of the grid and time for Operation 2) and 3).<br />
The next <b>N</b> lines describe the board, each line contains an <b>M</b> characters string.</p>
<p>In the grid, rows are numbered from <b>1</b> to <b>N</b>, and columns are numbered from <b>1</b> to <b>M</b>.<br />
The <b>j</b>-th character of the <b>i</b>-th line can be either 'B' or 'W', representing the color of the cell in the <b>i</b>-th row and <b>j</b> column is black or white.</p>
<h3>Output</h3>
<p>For each test case, output the integer <b>C</b> on the first line, denoting the number of operations.<br />
Then output <b>C</b> lines for <b>C</b> operations. <br /><br />
For operation 1), please output '1' followed by the positions of the two cells<br />
<b>row<sub>1</sub></b>, <b>column<sub>1</sub></b>, <b>row<sub>2</sub></b> and <b>column<sub>2</sub></b>.<br />
The two cells must be in the board and share one edge.<br /><br />
For operation 2), please output '2' followed by two integers indicates the position of the cell.<br />
The cell must be in the board and white before the operation. <br /><br />
For operation 3), please output '3' followed by two integers indicates the position of the cell.<br />
The cell must be in the board and black before the operation.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li><b>5</b> ≤ <b>C<sub>2</sub></b> ≤ <b>20</b></li>
<li><b>20</b> ≤ <b>C<sub>3</sub></b> ≤ <b>40</b></li>
</ul>
<h3>Scoring</h3>
<p>For each test case, suppose the total time used is <b>S</b>. Your score is <b>S / (N * M)</b>. The total score of the test file is the sum of the scores for each test case. The goal is to minimize your score. </p>
<p> We have 24 official test files. You must correctly solve all test files to receive <b>OK</b>.<br />
During the contest, your overall score is the sum of the scores on the first <b>4</b> test files. After the contest, all solutions will be rescored by the sum of the scores on the rest <b>20</b> test files. </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB

<b>Output:</b>
4
2 2 1
2 2 2
2 2 3
2 2 4
4
3 1 1
3 1 4
3 3 1
3 3 4
6
1 1 1 1 2
1 1 2 2 2
1 2 2 3 2
1 1 4 1 3
1 1 3 2 3
1 2 3 3 3

</pre><h3>Explanation</h3>
<p>The scores of the sample output is <b>40 / (3 * 4)</b> + <b>40 * 4 / (3 * 4)</b> + <b>6 / (3 * 4)</b>.</p>
<h3>Test Generation</h3>
<p> We have <b>24</b> official test files. Every input file contains exactly 5 (<b>T</b> = <b>5</b>) test cases. </p>
<p>Each test case is created as follows:<br /><br />
The size of the grid <b>N</b> and <b>M</b> are chosen from <b>[50, 100]</b> uniformly at random.<br /><br />
The parameter <b>C<sub>2</sub></b> is chosen from <b>[5, 20]</b> uniformly at random.<br /><br />
The parameter <b>C<sub>3</sub></b> is chosen from <b>[20, 40]</b> uniformly at random.<br /><br />
One real value <b>p</b> is chosen from <b>[0.05, 0.1]</b> uniformly at random.<br /><br />
Each grid is black with probability <b>p</b> and white with probability <b>1 - p</b>, independently.<br />
</p>
