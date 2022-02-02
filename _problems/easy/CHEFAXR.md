---
{"category_name":"easy","problem_code":"CHEFAXR","problem_name":"Chef and Submatrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"14-06-2015","tags":{"0":"bit","1":"easy","2":"furko","3":"ltime25","4":"matrix","5":"xor"},"editorial_url":"http://discuss.codechef.com/problems/CHEFAXR","time":{"view_start_date":1435480200,"submit_start_date":1435480200,"visible_start_date":1435480200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFAXR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME25/russian/CHEFAXR.pdf">Russian</a>.</h3>
<p>Chef has a square matrix <b>A</b>. He would like to choose a consecutive sub-matrix of <b>A</b> such that value of <b>bitwise XOR</b> of all elements in it is maximal.</p>
<p>Each sub-matrix can be defined by four numbers <b>(x<sub>1</sub>,y<sub>1</sub>,x<sub>2</sub>,y<sub>2</sub>)</b>, with the meaning that the submatrix contains an element <b>A[i][j]</b> iff <b>x<sub>1</sub> ≤ i ≤ x<sub>2</sub> and y<sub>1</sub> ≤ j ≤ y<sub>2</sub></b>.</p>
<p>You can read more about <b>bitwise XOR</b> operation <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">here</a>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the size of the matrix <b>A</b>.</p>
<p>The following <b>N</b> lines contain <b>N</b> space-separated integers, denoting values of elements in given matrix. The <b>j</b>-th element in the <b>i</b>-th line denotes the value of <b>A[i][j]</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximal <b>bitwise XOR</b> a submatrix of <b>A</b></p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>70</b></li>
<li><b>1</b> ≤ <b>A<sub>i,j</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Subtask 1 (40 points): <b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li>Subtask 2 (60 points): <b>1</b> ≤ <b>N</b> ≤ <b>70</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
3
1 4 3
1 8 6
1 2 3
</tt>
<b>Output:</b>
<tt>15</tt>
</pre><h3>Explanation</h3>
<p>Chef can pick the following submatrix in order to make the XOR of elements equal to <b>15</b>:</p>
<pre>
<tt><b>1 4</b> 3
<b>1 8</b> 6
<b>1 2</b> 3
</tt>
</pre><p>This submatrix can be defined by <b>x<sub>1</sub> = 1</b>, <b>y<sub>1</sub> = 1</b>, <b>x<sub>2</sub> = 3</b>, <b>y2 = 2</b>.
</p>
