---
{"category_name":"medium","problem_code":"ANCOIMP","problem_name":"Anticommutative implication","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"0.5 - 1","source_sizelimit":50000,"problem_author":"kaizer","problem_tester":null,"date_added":"29-03-2015","tags":{"0":"kaizer"},"editorial_url":"http://discuss.codechef.com/problems/ANCOIMP","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/ANCOIMP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/ANCOIMP.pdf">Russian</a>.</h3>
<p>Chef is impressed by mathematical logic and linear algebra. He wants to combine his favorite subjects, so he introduced the concept of logical operations on boolean matrices.</p>
<p>He defines <b>A → B</b> to be a matrix <b>C</b> such that <b>C<sub>ij</sub> = A<sub>ij</sub> → B<sub>ij</sub></b> and <b>¬ A</b> to be a matrix <b>B</b> such that <b>B<sub>ij</sub> = ¬ A<sub>ij</sub></b> </p>
<p>Now Chef wants to study such system of equations: <b>A → X = ¬ O</b> and <b>X → A = O</b></p>
<p> Where <b>O</b> is matrix such that all its entries is <b>0</b>.<br />
However, Chef realized that such system has solution if and only if <b>A = O</b>. Since such solution is too trivial, Chef has decided to search for an approximate solution for arbitrary <b>A</b>. Thus, Chef is searching for such <b>X</b> that <b>A → X = ¬ O</b> and <b>X → A</b> has as much as possible entries which are equal to 0. </p>
<p>But the solution space turned to be very large, so he reduced it to a matrices of a special form. Now he is looking for <b>X</b> such that <b>X<sub>ij</sub> = y<sub>i</sub> xor y<sub>j</sub></b> for some boolean vector <b>y</b>. Since now <b>X</b> is symmetric, Chef restricts <b>A</b> to also be symmetric.</p>
<p> Help Chef to resolve this difficult problem, or say that there is no solution.</p>
<p> Here → denotes the logical implication. p → q = !p || (p &amp;& q). Here ¬ denotes logical negation. ¬p = !p </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the size of <b>A</b>. The next <b>N</b> lines contain <b>N</b> space-separated integers <b>A[i]<sub>1</sub></b>, <b>A[i]<sub>2</sub></b>, ..., <b>A[i]<sub>N</sub></b> denoting the i-th row of matrix <b>A</b>.<br />
It's guaranteed that <b>A</b> is symmetric.</p>
<h3>Output</h3>
<p> For each test case, output a single line containing <b>N</b> integers - vector <b>y</b>, described in the statement, if there is a solution, or <b>-1</b>, if there is not. In case there are several solutions, print any solution.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>0</b> ≤ <b>A<sub>ij</sub></b> ≤ <b>1</b></li>
</ul>

<p><b>Subtask 1: (15 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 1000 </b></li>
<li><b>1 ≤ N ≤ 10</b></li>
</ul>

<p><b>Subtask 2: (25 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 500 </b></li>
<li><b>1 ≤ N ≤ 20</b></li>
</ul>

<p><b>Subtask 3: (60 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000 </b></li>
<li>The sum of <b>N<sup>2</sup></b> over all test cases in one test file does not exceed <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
0 0 0 1
0 0 0 1
0 0 0 0
1 1 0 0
4
1 0 0 1
0 1 0 1
0 0 0 0
1 1 0 0
2
0 0
0 0
<b>Output:</b>
0 0 1 1
-1
0 1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>
Matrix which is determined by vector y is </p>
<pre>
0 0 1 1
0 0 1 1
1 1 0 0
1 1 0 0
</pre><p> <br />
Then <b>A → X = ¬ O</b> and <b>X → A</b> is</p>
<pre>
1 1 0 1
1 1 0 1
0 0 1 1
1 1 1 1
</pre>
<p><b>Example case 2.</b></p>
<p>
<b>A<sub>11</sub> = 1</b> and <b>X<sub>11</sub> = y<sub>1</sub> xor y<sub>1</sub> = 0</b>. So <b>A<sub>11</sub> → X<sub>11</sub> = 0</b> and condition <b>A → X = ¬ O</b> can not be satisfied.
</p>
