---
{"category_name":"hard","problem_code":"XRMTRX","problem_name":"Xor Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"pushkarmishra","date_added":"13-01-2015","tags":{"0":"ad","1":"alex_2oo8","2":"feb15","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/XRMTRX","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/XRMTRX.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/XRMTRX.pdf">Russian</a>.</h3>
<p>Let's consider a square matrix of size <b>N × N</b>, where <b>N = R −­­­­­­­­­­­ L + 1</b>. We will enumerate the columns of this matrix with consecutive integers from <b>L</b> to <b>R</b> (the leftmost column will be assigned number <b>L</b> and the rightmost - number <b>R</b>). In similar manner we will enumerate rows with the same integers (the top row will be assigned number <b>L</b> and the bottom row - number <b>R</b>).</p>
<p>Every cell of this matrix has an integer written inside it. The cell at the intersection of row <b>X</b> and column <b>Y</b> has integer <b>(X <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> Y)</b> written inside.</p>
<p>Two cells are called adjacent if and only if they have a common side. That way every inner cell have <b>4</b> neighbors and any of four corner cells have <b>2</b> neighbors.</p>
<p>A walk is a sequence of cells <b>C<sub>0</sub>, C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>K</sub></b>, where for every <b>1</b> ≤ <b>i</b> ≤ <b>K</b> the cells <b>C<sub>i-1</sub></b> and <b>C<sub>i</sub></b> are adjacent and for every <b>0</b> ≤ <b>j</b> ≤ <b>K</b> the number written inside cell <b>C<sub>j</sub></b> is equal <b>j</b>. The number <b>K</b> is the length of that walk.</p>
<p>Your task is for given <b>L</b> and <b>R</b> values, find the maximal possible value of <b>K</b>, as well as the count <b>C</b> of different walks with that maximal length. As the value of <b>C</b> could be very large, output it modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. <br />
The description of <b>T</b> test cases follows. <br />
For each test case, the only line of input contains two integers <b>L</b> and <b>R</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two integers <b>K</b> and <b>C</b>. <br />The value of <b>C</b> should be printed modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20 000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>18</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>1</b> ≤ <b>T</b> ≤ <b>500</b>; <b>0</b> ≤ <b>R - L</b> ≤ <b>300</b> (8 points)</li>
<li>Subtask #2: original constraints, only the value of <b>K</b> will be checked. (24 points)</li>
<li>Subtask #3: original constraints (68 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
1 1
1 2
1 3
2 3

<b>Output:</b>
0 1
0 2
3 4
1 4
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The matrix contains just one cell, so, there is no possibility to make a single move, thus <b>K = 0</b>. We have just one possibility - to start the walk at the only cell and to end it immediately.</p>
<p><b>Example case 2.</b> The matrix doesn't contains a cell with number one inside, so, there once again is no possibility to make a single move, thus <b>K = 0</b>. Our walk is just a single cell with number zero inside and there are two such cells, thus <b>C = 2</b>. The matrix in this case looks like this:</p>
<pre>
<b>(1 xor 1)   (1 xor 2)</b>          =          <b>0 3</b>
<b>(2 xor 1)   (2 xor 2)</b>          =          <b>3 0</b>
</pre>
<p><b>Example case 3.</b> The four possible walks are:</p>
<pre><font size="3">0 <b><font color="#578fb2">3 2</font></b>               0 <b><font color="#578fb2">3 2</font></b>               0 3 2               0 3 2
3 <b><font color="#578fb2">0 1</font></b>               3 0 <b><font color="#578fb2">1</font></b>               <b><font color="#578fb2">3 0</font></b> 1               <b><font color="#578fb2">3</font></b> 0 1
2 1 0               2 1 <b><font color="#578fb2">0</font></b>               <b><font color="#578fb2">2 1</font></b> 0               <b><font color="#578fb2">2 1 0</font></b>
</font></pre>
<p><b>Example case 4.</b> The four possible walks are:</p>
<pre><font size="3"><b><font color="#578fb2">0 1</font></b>                   0 <b><font color="#578fb2">1</font></b>                   <b><font color="#578fb2">0</font></b> 1                   0 1
1 0                   1 <b><font color="#578fb2">0</font></b>                   <b><font color="#578fb2">1</font></b> 0                   <b><font color="#578fb2">1 0</font></b>
</font></pre>