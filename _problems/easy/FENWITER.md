---
{"category_name":"easy","problem_code":"FENWITER","problem_name":"Fenwick Iterations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"alex_2oo8","date_added":"16-07-2015","tags":{"0":"bit","1":"cenadar","2":"easy","3":"oct16"},"editorial_url":"http://discuss.codechef.com/problems/FENWITER","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/FENWITER.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/FENWITER.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/FENWITER.pdf">Vietnamese</a> as well.</h3>

<p>Chef has just learned a new data structure - <a href="https://en.wikipedia.org/wiki/Fenwick_tree">Fenwick tree</a>. This data structure holds information about array of <b>N</b> elements and can process two types of operations:
<ul>
<li>Add some value to <b>i</b><sup>th</sup> element of the array</li>
<li>Calculate sum of all elements on any prefix of the array</li>
</ul>

Both operations take O(log N) time. This data structure is also well known for its low memory usage. To be more precise, it needs exactly the same amount of memory as that of array.</p>

<p>Given some array <b>A</b>, first we build data structure in some other array <b>T</b>. <b>T<sub>i</sub></b> stores the sum of the elements <b>A<sub>start</sub></b>, <b>A<sub>start + 1</sub></b>, ..., <b>A<sub>i</sub></b>. Index <b>start</b> is calculated with formula <b>start = F<sub>down</sub>(i) = (i & (i + 1))</b>. Here "&" denotes <a href="https://en.wikipedia.org/wiki/Bitwise_operation">bitwise <b>AND</b> operation</a>.</p>

<p>So, in order to find a sum of elements <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, ..., <b>A<sub>L</sub></b> you start with index <b>L</b> and calculate sum of <b>T<sub>L</sub> + T<sub>F<sub>down</sub>(L)-1</sub> + T<sub>F<sub>down</sub>(F<sub>down</sub>(L)-1)-1</sub> + ... + T<sub>F<sub>down</sub>(F<sub>down</sub>(...(F<sub>down</sub>(L)-1)-1)-1</sub></b>. Usually it is performed with cycle that goes from <b>L</b> down to <b>0</b> with function F<sub>down</sub> and sums some elements from T. Chef wants to verify that the time complexity to calculate sum of <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>L</sub></b> is <b>O(log L)</b>. In order to do so, he wonders how many times he has to access array <b>T</b> to calculate this sum. Help him to find this out.</p>

<p>Since Chef works with really big indices. The value of <b>L</b> can be very large and is provided to you in binary representation as concatenation of strings <b>L<sub>1</sub></b>, <b>L<sub>2</sub></b> repeated <b>N</b> times and string <b>L<sub>3</sub></b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains three non-empty strings <b>L<sub>1</sub></b>, <b>L<sub>2</sub></b>, <b>L<sub>3</sub></b> and an integer <b>N</b>. Strings will contain only characters <b>0</b> and <b>1</b>. To obtain binary representation of index <b>L</b> concatenate <b>L<sub>1</sub></b> with <b>L<sub>2</sub></b> repeated <b>N</b> times and with <b>L<sub>3</sub></b>. You are guaranteed that the index will be positive.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing number of times Fenwick tree data structure will access array <b>T</b> in order to compute sum of <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>L</sub></b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>Length(L<sub>i</sub>)</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): <b>|L<sub>1</sub>| + |L<sub>2</sub>| * N + |L<sub>3</sub>| ≤ 60</b></li>
<li>Subtask #2 (30 points): <b>1 ≤ T ≤ 30, 1 ≤ N ≤ 100</b></li>
<li>Subtask #3 (50 points): <b>No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
001 100 011 4
1000 1101 100 3
1010 001 101 4
010 101 000 4

<b>Output:</b>
6
12
8
10
</pre>