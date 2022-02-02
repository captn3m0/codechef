---
{"category_name":"medium","problem_code":"CHSQARR","problem_name":"Chef and Rectangle Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 4","source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"iscsi","date_added":"22-07-2015","tags":{"0":"antoniuk1","1":"dynamic","2":"june16","3":"medium","4":"partial"},"editorial_url":"http://discuss.codechef.com/problems/CHSQARR","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/CHSQARR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/CHSQARR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/CHSQARR.pdf">Vietnamese</a> as well.</h3>
<p>Chef has a two-dimensional matrix <b>A</b> of dimensions <b>N</b> × <b>M</b>, (<b>N</b> rows and <b>M</b> columns). </p>
<p>He calls the matrix <b>A</b> beautiful if there exist an <b>a</b>×<b>b</b> submatrix, such that all of its elements are equal. In one minute Chef can increase one element of the matrix <b>A</b> by 1. Now he asks you to find out minimum time he will need to make the matrix <b>A</b> beautiful?</p>

<p>Please note that sub-matrix of a matrix is a <b>continuous</b> rectangular block of the matrix. It can be denoted by two pair of indices <b>(x<sub>1</sub>, y<sub>1</sub>)</b> and <b>(x<sub>2</sub>, y<sub>2</sub>)</b> where <b>x<sub>1</sub> ≤ x<sub>2</sub></b>, <b>y<sub>1</sub> ≤ y<sub>2</sub></b>. The content of the submatrix will be all the cells <b>(i, j)</b> such that <b>x<sub>1</sub> ≤ i ≤ x<sub>2</sub></b> and <b>y<sub>1</sub> ≤ j ≤ y<sub>2</sub></b>.
</p>
<h3>Input</h3>
<ul>
<li>There is a single test case.</li>
<li>The first line contains two space-separated integers <b>N</b>, <b>M</b> denoting the number of rows and columns in the matrix <b>A</b>, respectively</li>
<li>Each of the next <b>N</b> lines, contains <b>M</b> space-separated integers denoting the <b>i</b>-th row of the array</li>
<li>Next line contains one integer <b>Q</b> - amount of questions</li>
<li>Each of next <b>Q</b> lines contains two space-separated integers <b>a</b> and <b>b</b> denoting sizes of submatrix sought.</li>
<li>All questions are independent and do not influence each other. It means when you answer question, you don't need to change the array</li>
</ul>
<h3>Output</h3>
<li>For each question, output a single line containing the minimum time that Chef needs to make an matrix <b>A</b> beautiful (for parameters <b>a</b> and <b>b</b> from question)</li>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b>, <b>A<sub>i, j</sub></b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>a</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>b</b> ≤ <b>M</b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask #1 (13 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>50</b></li>
<li>TL = 1s</li>
</ul>

<p><b>Subtask #2 (35 pts)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>200</b></li>
<li>TL = 2s</li>
</ul>

<p><b>Subtask #3 (52 pts)</b></p>
<ul>
<li>Original constraints</li>
<li>TL = 4s</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 4
1 8 3 4
5 2 3 1
3 6 2 2
4
1 1
2 2
2 3
3 2

<b>Output:</b>
0
4
15
9
</pre><h3>Explanation</h3>
<p><b>Question #1:</b><br />
Chef can choose any 1 × 1 submatrix and it will take his 0 minutes to make it beautiful.
</p>
<p><b>Question #2:</b><br />
The best variant is submatrix </p>
<pre>
3 1
2 2
</pre>
<p><b>Question #3:</b><br />
The next submatrix Chef can make equal in 15 minutes</p>
<pre>
5 2 3
3 6 2
</pre>
<p><b>Question #4:</b></p>
<pre>
3 4
3 1
2 2
</pre>
