---
{"category_name":"medium","problem_code":"CHEFAFD","problem_name":"Chef and Finding Direction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"lexman","problem_tester":null,"date_added":"17-09-2016","tags":{"0":"lexman"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/CHEFAFD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/CHEFAFD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/CHEFAFD.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a grid of size <b>N * N</b> with its rows numbered from <b>1</b> to <b>N</b>, and the columns also numbered from <b>1</b> to <b>N</b>. The cell at the <b>i</b>th row and the <b>j</b>th column is cell <b>(i,j)</b>. From cell <b>(i,j)</b>, you can go in one of the four directions <b>U L D R</b> (corresponding to up, left, down, right) to cells <b>(i-1,j)</b>, <b>(i,j-1)</b>, <b>(i+1,j)</b>, <b>(i,j+1)</b> respectively, and of course you cannot go outside of the grid. However, with each cell, Chef is only allowed to go in some of the four directions (at least one), which is given by a string <b>directs[i][j]</b> containing only the characters <b>U L D R</b> denoting the directions Chef can go from cell <b>(i,j)</b>. 
</p>

<p>Now, Chef wants to choose exactly one direction to go from each cell, so that from any cell in the grid, he can come back to same cell by following the chosen directions of the cells. Please help him!</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the size of the grid.</p>
<p><b>N</b> lines follow. Each line contains <b>N</b> space-separated strings denoting the given directions for that cell. The <b>j<sup>th</sup></b> string in the <b>i<sup>th</sup></b> line is <b>directs[i][j]</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "<b>YES</b>" (without quotes) if for each cell Chef can choose one and only one direction to go so that from every cell Chef can go back to that cell using chosen directions, "<b>NO</b>" (without quotes) otherwise. </p>

<p>If the answer is "<b>YES</b>", then you must print the chosen directions in the next <b>N</b> lines. Each line will contain <b>N</b> strings. The <b>j<sup>th</sup></b> string in the <b>i<sup>th</sup></b> line must consist of a single character: the direction chosen for cell <b>(i,j)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>150</b></li>
<li><b>1</b> ≤ length <b>directs[i][j]</b> ≤ <b>4</b></li>
</ul>

<h3>Subtasks</h3>

<b> Subtask #1: (10 points) </b>
<p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ length <b>directs[i][j]</b> ≤ <b>2</b></li>
</ul>
</p>

<b> Subtask #2: (10 points) </b>
<p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>12</b></li>
</ul>
</p>

<b> Subtask #3: (40 points) </b>
<p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>50</b></li>
</ul>
</p>

<p>
<b> Subtask #4: (40 points) </b>
<ul>
<li>Original constraints </li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2
RD D
UR UL
3
RD LR DL
RU LU LDU
U UL L</tt>

<b>Output:</b>
<tt>YES
R D
U L
NO</tt>

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef can keep the direction <b>R</b> for cell <b>(1, 1)</b>, <b>D</b> for <b>(1, 2)</b>, <b>U</b> for <b>(2, 1)</b> and <b>L</b> for <b>(2, 2)</b>. Then he can go <b>(1,1) -> (1,2) -> (2,2) -> (2,1) -> (1,1)</b>. It means that from any cell he always can go back to that cell.</p>
<p><b>Example case 2.</b> There is no way to keep only 1 direction for each cell to satisfy the condition.</p>
