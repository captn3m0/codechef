---
{"category_name":"medium","problem_code":"XRGRD","problem_name":"Xor Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"kingofnumbers","date_added":"8-08-2016","tags":{"0":"alex_2oo8","1":"bitwise","2":"cook78","3":"easy","4":"fractals","5":"maths"},"editorial_url":"https://discuss.codechef.com/problems/XRGRD","time":{"view_start_date":1485109800,"submit_start_date":1485109800,"visible_start_date":1485109800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/mandarin/XRGRD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/russian/XRGRD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/vietnamese/XRGRD.pdf">Vietnamese</a> as well.</h3>


<p>Recently Chef invented a new structure that he has called <b>Xor Grid</b>. It is an infinitely large grid <b>G</b> filled with numbers based on these three rules:</p>

<p>
<ol>
    <li><b>G[1, c] = 1</b> for all <b>c ≥ 1</b></li>
    <li><b>G[r, 1] = r</b> for all <b>r ≥ 1</b></li>
    <li><b>G[r, c] = G[r - 1, c] <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> G[r, c - 1]</b> for all <b>r > 1</b> and <b>c > 1</b></li>
</ol>
</p>

<p>Now Chef is wondering, what are the <b>xor sums</b> of all the numbers within some specific rectangles of the <b>Xor Grid</b>?</p>

<h3>Note</h3> Xor sum refers to successive xor operations on integers. For example, xor sum of integers <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>x<sub>3</sub></b>, ..., <b>x<sub>n</sub></b> will be (..((<b>x<sub>1</sub></b> xor <b>x<sub>2</sub></b>) xor <b>x<sub>3</sub></b></b>)... xor <b>x<sub>n</sub></b>).</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, the only line of input contains four integers <b>r1</b>, <b>r2</b>, <b>c1</b> and <b>c2</b>, where <b>(r1, c1)</b>, <b>(r2, c2)</b> denotes the coordinates of top left and bottom right cells of the rectangle.</p>

<h3>Output</h3>
For each test case, output a single integer ― the <b>xor sum</b> of all the numbers within <b>G[r1..r2, c1..c2]</b>.

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>10 000</b></li>
    <li><b>1</b> ≤ <b>r1</b> ≤ <b>r2</b> ≤ <b>10<sup>18</sup></b></li>
    <li><b>1</b> ≤ <b>c1</b> ≤ <b>c2</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
5
1 1 71 93
23959042 23959042 1 1
1 2 1 2
2 7 3 6
5 8 5 8

<b>Output:</b>
1
23959042
1
6
4
</pre>
<h3>Explanation</h3>
<b>Example case 1.</b> First row is filled with ones, so our rectangle contains <b>23</b> ones and their <b>xor sum</b> is one.
<p></p>
<b>Example case 2.</b> Here we have a rectangle that consists of one cell <b>G[23959042, 1] = 23959042</b>.
<p></p>
<b>Example case 3.</b> The rectangle contains four numbers: <b>1 1 2 3</b> and their <b>xor sum</b> is <b>1</b>.