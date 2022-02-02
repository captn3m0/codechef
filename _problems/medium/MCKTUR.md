---
{"category_name":"medium","problem_code":"MCKTUR","problem_name":"Mock Turtle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"kingofnumbers","date_added":"21-07-2016","tags":{"0":"alei","1":"catalan","2":"combinatorics","3":"cook73","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/MCKTUR","time":{"view_start_date":1471804200,"submit_start_date":1471804200,"visible_start_date":1471804200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/mandarin/MCKTUR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/russian/MCKTUR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/vietnamese/MCKTUR.pdf">Vietnamese</a> as well.</h3>

<p>
The Mock Turtle went to the ocean's school to become a true turtle! However instead of practicing the usual operations of addition, subtraction and division taught by the lecturers, she was always playing with parentheses.
</p>

<p>
A parentheses is defined using the following rules:
<ul>
<li>An empty string is a parentheses.</li>
<li>If <b>X</b> is a parentheses, then <b>(X)</b> is also a parentheses</li>
<li>If <b>X</b> and <b>Y</b> are parentheses, then <b>XY</b> is also a parentheses</li>
<li>Every parentheses can be created using the previous rules only.</li>
</ul>
</p>

<p>
A parentheses contains <b>k</b> blocks if it can be represented as the concatenation of exactly <b>k</b> non empty parentheses, but can not be represented as the concatenation of more than <b>k</b> non empty parentheses. For example <tt>()(())</tt> contains two blocks (i.e. <tt>()</tt> and <tt>(())</tt>) and <tt>(()())</tt> contains just one block.
</p>

<p>
Every time Alice meets with the Mock Turtle they create two arrays of integers <b>a</b> and <b>b</b> both of length <b>N</b>, and play the following game <b>T</b> times: </br>

First Alice thinks of two integers <b>L</b> and <b>R</b>, then the Mock Turtle chooses two integers <b>i, j</b> such that <b>L ≤ i, j ≤ R</b> and builds all the parentheses of length <b>a<sub>i</sub></b> that contains <b>b<sub>j</sub></b> blocks. Since the Mock Turtle loves building parentheses, she will choose <b>i, j</b> in such a way that number of parentheses of length <b>a<sub>i</sub></b> that contains <b>b<sub>j</sub></b> blocks are maximized.</p>


<h3>Input</h3>
<p>The first line of the input contains two integers <b>N, T </b>.</p>
<p>The following two lines containing <b>N</b> space separated integers representing the elements of array <b>a</b> and <b>b</b> respectively.</p>
<p>Then follows <b>T</b> lines, each one have two integers <b>L</b> and <b>R</b> representing one game.</p>

<h3>Output</h3>
<p>For each game, output a single line containing the answer to the problem, since this number can be very large print it modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub>, b<sub>i</sub></b> ≤ <b>2·10<sup>5</sup>, a<sub>i</sub></b> is even</li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
5 2
4 6 2 4 8
3 3 3 3 3
2 4
1 5</tt>
<b>Output:</b><tt>
1
3</tt>
</pre>

<h3>Explanation</h3>
<p>In the <b>first query</b> the Mock Turtle can build only the parentheses <tt>()()()</tt></p>

<p>In the <b>second query</b> the three possible parentheses are 
<ul>
<li><tt>()()(())</tt></li>
<li><tt>()(())()</tt></li>
<li><tt>(())()()</tt></li>
</ul>
</p>
