---
{"category_name":"easy","problem_code":"CHEFSSET","problem_name":"Chef and Square Set","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"animesh_f","date_added":"23-11-2016","tags":{"0":"admin2","1":"ltime42","2":"number","3":"prime"},"time":{"view_start_date":1480181400,"submit_start_date":1480181400,"visible_start_date":1480181400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/mandarin/CHEFSSET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/russian/CHEFSSET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/vietnamese/CHEFSSET.pdf">Vietnamese</a> as well.</h3>

<p>Chef is teaching his students about properties of integers. Today he is teaching them about numbers which are squares of some number, e.g. 1, 4, 9, 16, 25 etc. These numbers are said perfect squares.</p>

<p>He gave his students the following task as homework. He gives an array <b>a</b> consisting of <b>n</b> positive integers. He calls the array <b><i>w0w</i></b> if for every pair of indices <b>i, j</b>, the product <b>a<sub>i</sub> * a<sub>j</sub></b> is a perfect square.</p>

<p>Chef wants you to make this array <i>w0w</i>. For achieving this, you can pick any integer <b>a<sub>i</sub></b> and can multiply it by any prime number. You can perform this operation several times, even multiple times on the same number. Find out the minimum number of operations that you will require.</p> 

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of the test cases.</p>
<p>The first line of each test case will contain an integer <b>n</b> denoting number of elements in array <b>a</b>.</p>
<p>The next line will contain <b>n</b> space separated integers denoting elements of array <b>a</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to minimum number of operations required to make array <i>w0w</i>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T, n, a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ Sum of <b>n</b> over all test cases in a single test file</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1: (10 points)</b>
<ul>
<li><b>1</b> ≤ <b>T, n, a<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>a<sub>i</sub></b> is prime.</li>
<li><b>1</b> ≤ Sum of <b>n</b> over all test cases in a single test file</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #2: (20 points)</b>
<ul>
<li><b>1</b> ≤ <b>T, n, a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>a<sub>i</sub></b> is prime.</li>
<li><b>1</b> ≤ Sum of <b>n</b> over all test cases in a single test file</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #3: (30 points)</b>
<ul>
<li><b>1</b> ≤ <b>T, n, a<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ Sum of <b>n</b> over all test cases in a single test file</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #4: (40 points)</b>
<ul>
<li>Original Constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
2 2 2
3
1 2 2
3
2 4 6

<b>Output:</b>
0
1
2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> If you multiply any pair of integers in the array, the product is 4, which is square. So, the array is <i>w0w</i> already.</p>
<p><b>Example case 2.</b> You can multiply the first number by 2, then the array will become <i>w0w</i>. So the minimum number of operations required will be 1.</p>