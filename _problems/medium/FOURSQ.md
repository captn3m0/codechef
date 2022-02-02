---
{"category_name":"medium","problem_code":"FOURSQ","problem_name":"Fantastic Four","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 5","source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":"iscsi","date_added":"31-12-2016","tags":{"0":"data","1":"four","2":"jan17","3":"lagrange","4":"segment","5":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/FOURSQ","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/FOURSQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/FOURSQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/FOURSQ.pdf">Vietnamese</a> as well.</h3>

<p>Given an array <b>A</b> consisting of <b>N</b> integers, you have to perform <b>Q</b> operations on it. These operations can be of following two types.

<ul>
<li><b>Type 1</b> is update operation in which you update the value of a particular element of the array</li>
<li><b>Type 2</b> is range query from L to R in which you have to decompose the product of the elements in this range as sum of 4 square numbers.</li>
</ul>

All these operations should be done under modulo <b>P</b> where <b>P</b> may or may not be prime.
</p>

<p>Note - There can be more than one possible solution for a particular query, you can output any of them.</p>


<h3>Input</h3>
<p>The first line of the input contains <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains three space separated integers <b>N</b>, <b>Q</b> and <b>P</b> denoting the number of of elements in the array, the number of queries and the modulo value respectively.</p>
<p>The second line contains <b>N</b> space-separated integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the input array <b>A</b>. </p>
<p>The next <b>Q</b> lines contain 2 types of queries.</p>
<p>Type 1 operations are given as "<b>1 X Y</b>" (without the double quotes) where <b>X</b> denotes the indice to be updated and <b>Y</b> denotes the value it needs to be set to, ie. <b>A[X]</b> = <b>Y</b></p>
<p>Type 2 operations are given as "<b>2 L R</b>" (without the double quotes) where <b>L</b> and <b>R</b> are the left and right end point for the given query.</p>

<h3>Output</h3>
<p>For each query of the type 2, <b>output the respective 4 numbers</b> in arbitrary order that when squared and summed under modulo <b>P</b> make that respective product modulo <b>P</b>. In case there is no such quadruple then <b>output -1.</b> All the 4 numbers should be between <b>0</b> to <b>P - 1</b>(inclusive)</p>


<h3>Constraints</h3>
<p>Note that <b>X</b>, <b>L</b> and <b>R</b> for the queries will always be in the range from <b>1</b> to <b>N</b> where <b>L</b> ≤ <b>R</b></p>


<h3>Subtasks</h3>
<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>A[i], Y</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>Time limit = 1 second</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (30 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>A[i], Y</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>Time limit = 4 seconds</b></li>
</ul>
</p>

<p>
<b>Subtask #3 (60 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>10<sup>12</sup></b></li>
<li><b>1</b> ≤ <b>A[i], Y</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>Time limit = 5 seconds</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 4 100
1 2 3 4 5
2 1 5
2 1 3
1 1 4
2 1 3

<b>Output:</b>
8 6 4 2
0 1 1 2
0 2 4 2
</pre>

<h3>Explanation</h3>
<p>1 x 2 x 3 x 4 x 5 mod 100 = 120 mod 100 = ( 8<sup>2</sup> + 6<sup>2</sup> + 4<sup>2</sup> + 2<sup>2</sup> ) mod 100</p>
<p>1 x 2 x 3 mod 100 = 6 mod 100 = ( 0<sup>2</sup> + 1<sup>2</sup> + 1<sup>2</sup> + 2<sup>2 ) mod 100</sup></p>
<p>4 x 2 x 3 mod 100 = 24 mod 100 = ( 0<sup>2</sup> + 2<sup>2</sup> + 4<sup>2</sup> + 2<sup>2</sup> ) mod 100</p>