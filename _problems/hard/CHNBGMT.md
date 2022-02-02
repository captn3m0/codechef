---
{"category_name":"hard","problem_code":"CHNBGMT","problem_name":"Chef and Big Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 10","source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"xcwgf666","date_added":"8-02-2016","tags":{"0":"antoniuk1","1":"april16","2":"binomial","3":"chinese","4":"hard","5":"modular"},"editorial_url":"http://discuss.codechef.com/problems/CHNBGMT","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/CHNBGMT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/CHNBGMT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/CHNBGMT.pdf">Vietnamese</a> as well.</h3>
<p>Chef has a rectangular table consisting of <b>N</b> rows and <b>M</b> columns. Rows are numbered by integers from 1 to <b>N</b> from top to bottom and columns are numbered from 1 to <b>M</b> from left to right. Let <b>(x, y)</b> denote the cell corresponding to <b>x<sup>th</sup></b> row and <b>y<sup>th</sup></b> column.</p>
<p>Chef has two bunnies, both initially at the cell (1, 1). He wants them to get to the cell (<b>N</b>, <b>M</b>). Each of the bunny can move from some cell (<b>x</b>, <b>y</b>) to cell (<b>x</b>+1, <b>y</b>) or cell (<b>x</b>, <b>y</b>+1). As bunnies do not really like each other, they do not want to meet along their ways, except at the start <b>(1,1)</b> and end (<b>N</b>, <b>M</b>) cells.
</p>
<p>Also, there are exactly <b>C</b> cells in the table containing a carrot. When a bunny goes through such a cell, he eats this carrot. As Chef also wants to eat carrots, he wants that both the bunnies cumulatively don't eat more than <b>D</b> carrots.</p>
<p>
Find out number of ways in which bunnies can get from cell (1, 1) to cell (<b>N</b>, <b>M</b>) satisfying the above conditions. As answer could be large, please output your answer modulo <b>MOD</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains five space-separated integers <b>N</b>, <b>M</b>, <b>C</b>, <b>D</b> and <b>MOD</b> denoting the sizes of table, the number of cells with a carrot, the maximum number of carrots that can be eaten by bunnies and the modulo.</li>
<li>Each of next <b>C</b> lines contains two space-separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting the coordinates of the cell with a carrot. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the numbers of ways bunnies can get from cell (1,1) to cell (<b>N</b>, <b>M</b>) modulo <b>MOD</b>.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>D</b> ≤ <b>C</b> ≤ <b>min{200, N *  M - 2}</b></li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>y<sub>i</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>MOD</b> ≤ <b>10<sup>9</sup></b></li>
<li>It's guaranteed that there is no carrot in cells (1, 1) and (<b>N</b>, <b>M</b>)</li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask #1 (7 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N, M</b> ≤ <b>5</b></li>
<li>TL = 2s</li>
</ul>
<p> </p>
<p><b>Subtask #2 (11 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N, M, C</b> ≤ <b>60</b></li>
<li>TL = 2s</li>
</ul>
<p> </p>
<p><b>Subtask #3 (13 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>C</b> = <b>0</b></li>
<li>TL = 2s</li>
</ul>
<p> </p>
<p><b>Subtask #4 (19 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>0</b> ≤ <b>C</b> ≤ <b>100</b></li>
<li>TL = 10s</li>
</ul>
<p> </p>
<p><b>Subtask #5 (23 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>0</b> ≤ <b>C</b> ≤ <b>100</b></li>
<li>TL = 2s</li>
</ul>
<p> </p>
<p><b>Subtask #6 (27 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li>TL = 2s</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 3 0 0 10
2 3 1 0 16
2 1
3 3 1 0 7
2 2
2 2 2 1 11
1 2
2 1

<b>Output:</b>
1
0
1
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p><tt>***</tt><br />
<tt>***</tt><br />
In this case there is only one variant how bunnies can get from the cell (1,1) to the cell (2, 3). <br />
First bunny - (1, 1) -> (2, 1) -> (2, 2) -> (2. 3) and the second bunny - (1, 1) -> (1, 2) -> (1, 3) -> (2, 3).<br />
</p>
<p><b>Example case 2.</b></p>
<p><tt>***</tt><br />
<tt>x**</tt><br />
In this example there are no two nonintersecting ways without cells with carrot. Therefore the answer is 0.</p>
<p><b>Example case 4.</b></p>
<p><tt>*x</tt><br />
<tt>x*</tt><br />
In this case there is only one variant how bunnies can move. First bunny - (1, 1) -> (2, 1) -> (2, 2) and the second bunny - (1, 1) -> (1, 2) -> (2, 2). But in this case, in total, bunnies will eat two carrots(when only one carrot is allowed). Therefore the answer is 0.</p>
