---
{"category_name":"easy","problem_code":"MTRNSFRM","problem_name":"Matrix Transformation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"kingofnumbers","date_added":"10-08-2016","tags":{"0":"ad","1":"alex_2oo8","2":"cook78","3":"easy","4":"math","5":"median"},"editorial_url":"https://discuss.codechef.com/problems/MTRNSFRM","time":{"view_start_date":1485109800,"submit_start_date":1485109800,"visible_start_date":1485109800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/mandarin/MTRNSFRM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/russian/MTRNSFRM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/vietnamese/MTRNSFRM.pdf">Vietnamese</a> as well.</h3>


<p>Chef has two <b>n × m</b> matrices <b>A</b> and <b>B</b>. He wants to make them completely identical, to achieve this goal, he can perform the following actions in a single move:</p>

<p>
<ol>
    <li>Choose one of the matrices, either <b>A</b> or <b>B</b>.</li>
    <li>Choose either one row or one column of the selected matrix.</li>
    <li>Increment all the numbers in the selected row or column by <b>1</b>.</li>
</ol>
</p>

<p>Now Chef is wondering, what is the minimal number of moves he has to perform in order to make matrices <b>A</b> and <b>B</b> equal? Or is it just impossible?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, the first line of input contains two integers <b>n</b> and <b>m</b>. </p>
<p>The following <b>n</b> lines contain <b>m</b> space separated integers each ― the matrix <b>A</b>. </p>
<p>The next <b>n</b> lines contain <b>m</b> space separated integers each ― the matrix <b>B</b>. <br /></p>
<p><b>Warning!</b> The size of the input file can be up to <b>10 MB</b>!</p>

<h3>Output</h3>
For each test case, output a single integer ― the minimal number of moves Chef has to perform in order to make matrices <b>A</b> and <b>B</b> equal or <b>-1</b> if this is not possible.

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
    <li><b>1</b> ≤ <b>n</b> ≤ <b>m</b> ≤ <b>10<sup>5</sup></b></li>
    <li><b>1</b> ≤ <b>n × m</b> ≤ <b>10<sup>5</sup></b></li>
    <li>Let us denote the sum of <b>n × m</b> over all <b>T</b> testcases by <b>S</b></li>
    <li><b>1</b> ≤ <b>S</b> ≤ <b>5 · 10<sup>5</sup></b></li>
    <li><b>1</b> ≤ <b>A<sub>ij</sup></b> ≤ <b>10<sup>9</sup></b></li>
    <li><b>1</b> ≤ <b>B<sub>ij</sup></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
1 1
1 1
1 2
3 4
2 2
1 9
9 1
9 1
1 9
1 4
4 5 7 1
2 3 4 5

<b>Output:</b>
3
-1
9
</pre>
<h3>Explanation</h3>
<b>Example case 1.</b> We can transform the matrix <b>A</b> into <b>B</b> in three moves:
<pre>1 1   ->   1 2   ->   1 2   ->   1 2
1 1   ->   1 2   ->   2 3   ->   3 4</pre>
<p></p>
<b>Example case 2.</b> It is impossible to make these matrices equal using only the allowed moves.
<p></p>
<b>Example case 3.</b> We can transform matrix <b>A</b> into <b>4 5 7 7</b> in six moves and matrix <b>B</b> into the same <b>4 5 7 7</b> in three moves.