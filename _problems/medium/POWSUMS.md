---
{"category_name":"medium","problem_code":"POWSUMS","problem_name":"Power Sums","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"alex_2oo8","date_added":"11-03-2016","tags":{"0":"alex_2oo8","1":"dynamic","2":"matrix","3":"medium","4":"oct16"},"editorial_url":"http://discuss.codechef.com/problems/POWSUMS","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/POWSUMS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/POWSUMS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/POWSUMS.pdf">Vietnamese</a> as well.</h3>

<p>
Chef has <b>n</b> non-negative integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>. He defined the following function 
<b>f(k) = (a<sub>1</sub><sup>k</sup> + a<sub>2</sub><sup>k</sup> + ... + a<sub>n</sub><sup>k</sup>) mod (10<sup>9</sup> + 7)</b> over them.
</p>

<p>
Chef knows the values <b>f(1), f(2), ..., f(n)</b>, but he has forgotten the values <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>.
</p>

<p>
Now Chef wants to evaluate the function <b>f</b> over some integers (total <b>Q</b>  of them), can you please help him in this?
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>Each test case consists of three lines.</p>
<p>The first line contains two space separated integers <b>n</b> and <b>Q</b>.</p>
<p>The second line contains <b>n</b> space separated integers - the values of <b>f(1), f(2), ..., f(n)</b>.</p>
<p>The third line contains <b>Q</b> space separated integers <b>x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>q</sub></b>, where <b>x<sub>i</sub></b> denotes the number in the <b>i</b>-th query.</p>

<h3>Output</h3>
<p>
For each test case, print a single line containing <b>Q</b> space separate integers denoting  the values of <b>f(x<sub>1</sub>), f(x<sub>2</sub>), ..., f(x<sub>q</sub>)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>30</b></li>
<li><b>0</b> ≤ <b>f(i)</b> < <b>10<sup>9</sup> + 7</b></li>
<li><b>n</b> < <b>x<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
<li>It is guaranteed that given information is enough to restore the function <b>f</b> and that there exist exactly one such function.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>T = 100</b>; <b>x<sub>i</sub></b> ≤ <b>4</b> (8 points)</li>
<li>Subtask #2: <b>T = 1</b>; <b>x<sub>i</sub></b> ≤ <b>5000</b> (42 points)</li>
<li>Subtask #3: <b>T = 1</b>; <b>1</b> ≤ <b>n</b> ≤ <b>42</b> (13 points)</li>
<li>Subtask #4: <b>T = 1</b>; <b>1</b> ≤ <b>n</b> ≤ <b>100</b> (17 points)</li>
<li>Subtask #5: <b>T = 1</b>; original constraints (20 points)</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 3
4 6 10 18
5 6 30

<b>Output:</b>
34 66 73741819
</pre>

<h3>Explanation</h3>
<p>
<b>Test case 1.</b> The initial <b>4</b> numbers Chef has are <b>1, 2, 0, 1</b>, so, the function <b>f</b> was defined as follows: <b>f(k) = (1<sup>k</sup> + 2<sup>k</sup> + 0<sup>k</sup> + 1<sup>k</sup>) mod (10<sup>9</sup> + 7) = (2<sup>k</sup> + 2) mod (10<sup>9</sup> + 7)</b>.</p>
<p>
So, the values given in the input are:
<b>
<pre>
f(1) = (2<sup>1</sup> + 2) mod (10<sup>9</sup> + 7) = 4
f(2) = (2<sup>2</sup> + 2) mod (10<sup>9</sup> + 7) = 6
f(3) = (2<sup>3</sup> + 2) mod (10<sup>9</sup> + 7) = 10
f(4) = (2<sup>4</sup> + 2) mod (10<sup>9</sup> + 7) = 18
</pre>
</b>
</p>

<p>
And the values Chef asked you to calculate are:
<b>
<pre>
f(5) = (2<sup>5</sup> + 2) mod (10<sup>9</sup> + 7) = 34
f(6) = (2<sup>6</sup> + 2) mod (10<sup>9</sup> + 7) = 66
f(30) = (2<sup>30</sup> + 2) mod (10<sup>9</sup> + 7) = 1073741826  mod (10<sup>9</sup> + 7) = 73741819
</pre>
</b>
</p>

<h3>Note</h3>
<p>You can read about the modulo operation (mod) here: <a href="https://en.wikipedia.org/wiki/Modulo_operation">https://en.wikipedia.org/wiki/Modulo_operation</a>.
</p>