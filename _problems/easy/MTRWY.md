---
{"category_name":"easy","problem_code":"MTRWY","problem_name":"Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"laycurse","date_added":"29-01-2015","tags":{"0":"antoniuk1","1":"easy","2":"march15","3":"union"},"editorial_url":"http://discuss.codechef.com/problems/MTRWY","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/MTRWY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/MTRWY.pdf">Russian</a>.</h3>
<p>You have a rectangular grid of size <b>N × M</b>, namely, there are cells <b>(x, y)</b> for <b>1 ≤ x ≤ N, 1 ≤ y ≤ M</b>. Two cells are adjacent if they share a side. More formally, two cells <b>(x<sub>1</sub>, y<sub>1</sub>), (x<sub>2</sub>, y<sub>2</sub>)</b> are adjacent if <b>|x<sub>1</sub> − x<sub>2</sub>| + |y<sub>1</sub> − y<sub>2</sub>| = 1</b>. Between two adjacent cells there can be a wall. Two cells <b>a</b> and <b>b</b> are connected if there is a way between them (in other words there is a sequence of cells <b>c<sub>1</sub>, c<sub>2</sub>, ..., c<sub>k</sub></b> that <b>c<sub>1</sub> = a, c<sub>k</sub> = b</b>, and for each <b>1 ≤ i &lt; k</b>, <b>c<sub>i</sub>, c<sub>i+1</sub></b> are adjacent cells without wall between them).</p>
<p>Now you are given <b>Q</b> queries, each of whom is of following four types.</p>
<ul>
<li><b>1 x y</b> - build the wall between cells <b>(x, y)</b> and <b>(x, y+1)</b>. If there is already exist a wall between them, this query is ignored.</li>
<li><b>2 x y</b> - build the wall between cells <b>(x, y)</b> and <b>(x+1, y)</b>. If there is already exist a wall between them, this query is ignored.</li>
<li><b>3 x<sub>1</sub> y<sub>1</sub> x<sub>2</sub> y<sub>2</sub></b> - check if cells <b>(x<sub>1</sub>, y<sub>1</sub>)</b> and <b>(x<sub>2</sub>, y<sub>2</sub>)</b> are connected. You must answer <b>1</b> if they are connected, <b>0</b> otherwise.</li>
<li><b>4</b> - You must answer the size of the largest connected component. A connected component is a set of sells wherein each two cells are connected. The size of a connected component is a number of the cells in it.</li>
</ul>
<p>You must assume that there are no walls on the grid before the queries.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases are follow.</p>
<p>The first line of each test case contains three space-separated integers <b>N, M</b> and <b>Q</b>, denoting the grid sizes and amount of queries. For next <b>Q</b> lines, each line contains a query. The format of queries are the same as described by the statement.</p>
<h3>Output</h3>
<p>For each test case, output an integer, denoting the sum of answers for queries of type <b>3</b> and <b>4</b>. Note that you just print only the sum of the answers for each test case.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>2 ≤ N, M ≤ 1000</b></li>
<li>The sum of <b>Q</b> over all test cases in one test file does not exceed <b>10<sup>6</sup></b></li>
<li>For queries of type <b>1</b>: <b>1 ≤ x ≤ N</b> and <b>1 ≤ y ≤ M−1</b></li>
<li>For queries of type <b>2</b>: <b>1 ≤ x ≤ N−1</b> and <b>1 ≤ y ≤ M</b></li>
<li>For queries of type <b>3</b>: <b>1 ≤ x<sub>1</sub>, x<sub>2</sub> ≤ N</b> and <b>1 ≤ y<sub>1</sub>, y<sub>2</sub> ≤ M</b></li>
</ul>
<p></p>
<p><b>Subtask 1: (15 points)</b></p>
<ul>
<li><b>1 ≤ Q × N × M ≤ 10<sup>6</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 2: (15 points)</b></p>
<ul>
<li><b>1 ≤ N, M ≤ 300</b></li>
<li>The sum of <b>Q</b> over all test cases in one test file does not exceed <b>10<sup>5</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 3: (70 points)</b></p>
<ul>
<li>No additional constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 4 10
3 1 1 3 4
1 1 2
1 2 2
2 2 2
4
1 3 1
4
3 1 1 3 4
1 1 2
3 1 1 1 1

<b>Output:</b>
21
</pre><h3>Explanation</h3>
<p><b>Query 1.</b> There are a lot of ways from <b>(1,1)</b> to <b>(3,4)</b>. One of them is marked in red in the picture #1. So these are connected, then <b>Answer = 1</b> in this query.</p>
<p><b>Query 2.</b> In the picture #2 you can see the grid after second query. </p>
<p><b>Query 3.</b> In the picture #3 you can see the grid after third query. </p>
<p><b>Query 4.</b> In the picture #4 you can see the grid after fourth query.</p>
<p><b>Query 5.</b> In the picture #5 the largest connected component marked in green. Thus <b>Answer = 12</b>.</p>
<p><b>Query 6.</b> In the picture #6 you can see the grid after sixth query.</p>
<p><b>Query 7.</b> In the picture #7 the largest connected component marked in green. Thus <b>Answer = 7</b>.</p>
<p><b>Query 8.</b> As you can see in the picture #8, there are no ways from <b>(1,1)</b> to <b>(3,4)</b>. So they are no longer connected, then <b>Answer = 0</b>.</p>
<p><b>Query 9.</b> In the picture #9 you can see the grid after ninth query. There is no difference between it and the grid after the sixth query, because before the ninth query the wall was already built.</p>
<p><b>Query 10.</b> When <b>a = b</b>, two cells <b>a</b> and <b>b</b> are always connected. Thus <b>Answer = 1</b>.</p>
<p>Therefore, the sum of the answers is <b>1 + 12 + 7 + 0 + 1 = 21</b>, which you should print.</p>
<p><img src="/download/extimages/bec647a1cb00760db4257697e654151e.png" width="600" height="400" alt="explanation" /> </p>
