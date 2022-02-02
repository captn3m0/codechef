---
{"category_name":"easy","problem_code":"KFUNC","problem_name":"Eugene and function","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aangairbender","problem_tester":"iscsi","date_added":"5-08-2015","tags":{"0":"aangairbender","1":"cakewalk","2":"nov15"},"editorial_url":"http://discuss.codechef.com/problems/KFUNC","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/KFUNC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/KFUNC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/KFUNC.pdf">Vietnamese</a> as well.</h3>
<p>Eugene loves sequences, especially <a href="https://en.wikipedia.org/wiki/Arithmetic_progression" target=blank>arithmetic progressions</a>. One day he was asked to solve a difficult problem.
</p>
<p>If a sequence of numbers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b> form an arithmetic progression <b>A</b>, he was asked to calculate sum of <b>F(A<sub>i</sub>)</b>, for <b>L</b> ≤ <b>i</b> ≤ <b>R</b>.</p>
<p><b>F(X)</b> is defined as:<br/><br />
If <b>X</b> &lt; 10 then <b>F(X)</b> = <b>X</b>.<br/><br />
Else <b>F(X)</b> = <b>F(</b>sum_of_digits<b>(X))</b>.
</br/></br/></p>
<p>Example:<br/><br />
<b>F(</b>1378<b>)</b> =<br />
<b>F(</b>1+3+7+8<b>)</b> =<br />
<b>F(</b>19<b>)</b> =<br />
<b>F(</b>1 + 9<b>)</b> =<br />
<b>F(</b>10<b>)</b> =<br />
<b>F(</b>1+0<b>)</b> =<br />
<b>F(</b>1<b>)</b> = 1</br/></p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Each test case is described in one line containing four integers: <b>A<sub>1</sub></b> denoting the first element of the arithmetic progression <b>A</b>, <b>D</b> denoting the common difference between successive members of <b>A</b>, and <b>L</b> and <b>R</b> as described in the problem statement.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing one integer denoting sum of <b>F(A<sub>i</sub>)</b>.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>1</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>D</b> ≤ <b>10</b><sup>9</sup></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b>  0 ≤ <b>D</b> ≤ 100, 1 ≤ <b>A<sub>1</sub></b> ≤ 10<sup>9</sup>, 1 ≤ R ≤ 100  - <b>15 points</b></li>
<li><b>Subtask 2:</b>  0 ≤ <b>D</b> ≤ 10<sup>9</sup>, 1 ≤ <b>A<sub>1</sub></b> ≤ 10<sup>9</sup>, 1 ≤ R ≤ 10<sup>6</sup>  - <b>25 points</b></li>
<li><b>Subtask 3:</b> Original constraints -<b> 60 points</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1 1 3
14 7 2 4

<b>Output:</b>
6
12

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
<b>A</b> = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ...}<br />
<b>A<sub>1</sub></b> = 1<br />
<b>A<sub>2</sub></b> = 2<br />
<b>A<sub>3</sub></b> = 3<br />
<b>F(A<sub>1</sub>)</b> = 1<br />
<b>F(A<sub>2</sub>)</b> = 2<br />
<b>F(A<sub>3</sub>)</b> = 3<br />
<b>1+2+3=6</b>
</br/></p>
<p><b>Example case 2.</b><br/><br />
<b>A</b> = {14, 21, 28, 35, 42, 49, 56, 63, 70, 77,  ...}<br />
<b>A<sub>2</sub></b> = 21<br />
<b>A<sub>3</sub></b> = 28<br />
<b>A<sub>4</sub></b> = 35<br />
<b>F(A<sub>2</sub>)</b> = 3<br />
<b>F(A<sub>3</sub>)</b> = 1<br />
<b>F(A<sub>4</sub>)</b> = 8<br />
<b>3+1+8=12</b>
</br/></p>
