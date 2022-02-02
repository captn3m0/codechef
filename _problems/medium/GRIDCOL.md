---
{"category_name":"medium","problem_code":"GRIDCOL","problem_name":"Chef and The Colored Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"Rubanenko","date_added":"5-08-2013","tags":{"0":"combinatorics","1":"cook37","2":"hard","3":"inclusn","4":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/GRIDCOL","time":{"view_start_date":1376852100,"submit_start_date":1376852100,"visible_start_date":1376852100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef wants to color a <b>3xN</b> grid and he has <b>N</b> different types of colors to do that. Each cell of the grid has to be colored with exactly one color. A coloring of the grid is<br />
considered <i>beautiful</i> if no two cells of the same row or same column have the same color.<br />
<br />
The cells of first two rows are already colored and they don’t violate the <i>beautiful</i> condition (one color doesn’t appear more than once on the same row or on the same column).<br />
<br />
Find how many different ways he can color the <b>3rd</b> row such that the resulting grid is <i>beautiful</i>. Two ways of coloring are considered different if there is at least one cell which is colored with different color.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<ul>
<li>The first line of each test<br />
case contains an integer <b>N</b>. </li>
<li>The next line contains <b>N</b> integers <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>, where <b>A<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the color of the cell at column <b>i</b> of <b>1st</b> row. </li>
<li>The next line contains <b>N</b> integers <b>B<sub>1</sub>,  B<sub>2</sub>, ..., B<sub>N</sub></b>, where <b>B<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the color of the cell at column <b>i</b> of <b>2nd</b> row. </li>
</ul>

<h3>Output</h3>
<p>For each test case, output the number of ways to color the <b>3rd</b> row such that the resulting grid is <i>beautiful</i>. Output the result modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b> is a permutation of the numbers <b>1, 2, ..., N</b>.</li>
<li><b>B<sub>1</sub>,  B<sub>2</sub>, ..., B<sub>N</sub></b> is a permutation of the numbers <b>1, 2, ..., N</b>.</li>
<li><b>A<sub>i</sub></b> ≠ <b>B<sub>i</sub></b> ( <b>1</b> ≤ <b>i</b> ≤ <b>N</b>)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
2 1 4 3
4 2 3 1
4
2 4 1 3
1 3 2 4

<b>Output:</b>
2
4
</pre><h3>Explanation</h3>
<p>For the 1st case the valid ways to color the <b>3rd</b> row are: {1,3,2,4} and {3,4,1,2}.<br />
For the 2nd case the valid ways are: {3,1,4,2} , {3,2,4,1} , {4,1,3,2} and {4,2,3,1}.</p>
