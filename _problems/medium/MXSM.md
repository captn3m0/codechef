---
{"category_name":"medium","problem_code":"MXSM","problem_name":"Chef and Maximum Sum Matrices ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"antoniuk1","date_added":"10-11-2015","tags":{"0":"ad","1":"cook66","2":"easy","3":"greedy","4":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/MXSM","time":{"view_start_date":1453660200,"submit_start_date":1453660200,"visible_start_date":1453660200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/mandarin/MXSM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/russian/MXSM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/vietnamese/MXSM.pdf">Vietnamese</a> as well.</h3>
<p>Dreaming to manipulate the dimensions of spacetime one day, Chef satisfies himself with manipulating dimensions of abstract mathematical entities for now. Today, Chef has <b>N</b> lists consisting of integers. The <b>i<sup>th</sup></b> list is represented as <b>L<sub>i</sub></b>, and has size <b>S<sub>i</sub></b>.
</p>
<p>
Chef has transformed the given lists of integers to form an <b>N</b> dimensional matrix <b>M</b> of size <b>S<sub>1</sub> × S<sub>2</sub> × S<sub>3</sub> × … × S<sub>N</sub></b> such that an entry <b>j<sub>1</sub>, j<sub>2</sub>, j<sub>3</sub>, … , j<sub>N</sub></b> in the matrix <b>M</b> is obtained by taking product of given <b>N</b> integers <b>L<sub>1</sub>[j<sub>1</sub>], L<sub>2</sub>[j<sub>2</sub>], L<sub>3</sub>[j<sub>3</sub>], ..., L<sub>N</sub>[j<sub>N</sub>]</b>, where <b>L<sub>i</sub>[j<sub>i</sub>]</b> denotes the <b>j<sup>th</sup></b> integer in the <b>i<sup>th</sup></b> list (1-based indexing).
</p>
<p>
To explore the mathematics of the matrix <b>M</b> deeply, Chef wants to compute the maximum submatrix sum in this matrix; but he is afraid of its high dimensionality. So, he asked you to help him. He asked you to compute two quantities, the maximum sub-matrix sum in the matrix <b>M</b>, and the number of submatrices having this maximum sum.
</p>
<p>
Since the second answer to this problem can be very large, output it modulo <b>10<sup>9</sup>+7</b>.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>First line of each test case contains a single integer <b>N</b> denoting the number of lists of integers.</li>
<li>Next <b>N</b> lines of each test case contains some space separated integers where integers in the <b>i<sup>th</sup></b> line make up the <b>i<sup>th</sup></b> list. Each list description has the following format.
<ul>
<li>First integer <b>S<sub>i</sub></b> in the <b>i<sup>th</sup></b> line denotes the size of the <b>i<sup>th</sup></b> list, and</li>
<li>the next <b>S<sub>i</sub></b> space separated integers are the elements in the list.</li>
</ul>
</li></ul>
<h3>Output</h3>
<p>For each test case, output <b>2</b> space separated integers (second integer modulo <b>10<sup>9</sup> + 7</b>) where the first integer denotes the maximum submatrix sum and the second denotes the number of such submatrices.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 100</li>
<p></p></b><br />
<b>
<li>1 ≤ N ≤ 9</li>
<p></p></b><br />
<b>
<li>1 ≤ S<sub>i</sub> ≤ 9</li>
<p></p></b><br />
<b>
<li>-9 ≤ L<sub>i</sub>[j] ≤ 9</li></b>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
2
2
2 3 4
2 4 5
2
3 4 -5 4
3 -2 3 -2

<b>Output</b>
63 1
12 2
</pre><h3>Explanation</h3>
<p><img src="https://s3.amazonaws.com/hr-challenge-images/3194/1452934896-d5e873b4f2-image1.jpg" title="image1.jpg" /></p>
<p>All the matrices with maximum sum are highlighted with coloured fencing.</p>
