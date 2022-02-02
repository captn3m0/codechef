---
{"category_name":"challenge","problem_code":"NSUDOKU","problem_name":"Sudoku Solver","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"PERL6","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"11-08-2009","tags":{"0":"admin"},"time":{"view_start_date":1251196670,"submit_start_date":1251196670,"visible_start_date":1251196670,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Quoting <a href="http://en.wikipedia.org/wiki/Sudoku"> Wikipedia </a> :
"Sudoku is a logic-based, combinatorial number-placement puzzle. The objective is to fill a 9×9 grid so that each column, each row, and each of the nine 3×3 boxes (also called blocks or regions) contains the digits from 1 to 9 only one time each. The puzzle setter provides a partially completed grid."

The rules for an N<sup>2</sup> X N<sup>2</sup> sudoku are as follows :
<ul type="1">
<li>The board is consists of N<sup>2</sup> rows and N<sup>2</sup> columns.</li>
<li>Numbers between 1 and N<sup>2</sup>(inclusive) are to be filled in each row such that :</li>
<ul type="1"><li>All numbers in each row are distinct.</li>
<li>All numbers in each column are distinct.</li>
<li>All numbers in the sub-matrix having rows from (i*N + 1) to(i + 1)*N, and columns from (j*N + 1) to (j + 1)*N both inclusive, should be distinct. 0 &lt;= i,j &lt;= N-1. Rows and columns are 1 indexed. Each such sub-matrix is called a "box" or "region".</li></ul>
</ul>

For this problem, you are required to solve a general N<sup>2</sup>X N<sup>2</sup> sudoku puzzle. Given a partially filled sudoku board, you have to fill it in as "perfect" a manner as possible.
<h3>
Input :
</h3></p><p>
The first line contains N,K.
The following K lines contain 3 numbers: x, y and d. 1 &lt;= x,y,d &lt;= N^2.
This means that a number d is present on the board at position (x,y)
2 &lt;= N &lt;= 30
0 &lt;= K &lt;= N<sup>4</sup>
At most 50% of the board will be covered at the start.
All positions (x,y) in the input will be unique.
<h3>
Output :</h3></p><p>
The output consists of N<sup>2</sup> rows having N<sup>2</sup> numbers each. Each number should be between 1 and N<sup>2</sup> (inclusive) and separated by a space. If the initial grid has a number d at position (x,y), then even the output should have the number d at position (x,y).
<h3>
Scoring :</h3></p><p>
<ul>
<li>
For each row and every number K in the range 1 to N<sup>2</sup> that is missing from the row, incurs a penalty of 1.</li>
<li>For each column and every number K in the range 1 to N<sup>2</sup> that is missing from the column, incurs a penalty of 1.</li>
<li>Similary, for each box and every number K in the range 1 to N<sup>2</sup> that is missing from the box, incurs a penalty of 1.</li></ul>
A box (as explained above) is a N X N square and the grid can be divided into N<sup>2</sup> such non-overlapping boxes.
<h3>
Example :</h3></p><p>
<h3>
Input:</h3>
<pre>
2 4
1 2 1
2 4 4
3 3 1
4 1 3
</pre><h3>
Output:</h3>
<pre>
2 1 3 4
1 2 4 4
3 4 1 2
3 2 4 1
</pre>
<h3>
Penalty:</h3> (0 + 1 + 0 + 0) + (1 + 1 + 1 + 1) + (2 + 2 + 1 + 1) = 11</p>