---
{"category_name":"hard","problem_code":"FN","problem_name":"Fibonacci Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"0.5 - 15","source_sizelimit":20000,"problem_author":"aekd_adm","problem_tester":"shangjingbo","date_added":"29-08-2013","tags":{"0":"aekd_adm","1":"maths","2":"medium","3":"number","4":"oct13"},"editorial_url":"http://discuss.codechef.com/problems/FN","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/FN.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>
As we know, Fibonacci Number is defined as </p>
<p></p><p><b>F<sub>n</sub>=n if n  ≤ 1 </b></p>
<p> <b>F<sub>n</sub>=F<sub>n-1</sub>+F<sub>n-2</sub>, otherwise</b></p>
<p>Now this problem is quite simple: you are given one  prime number  <b>P</b> and one non-negative integer <b>C</b><br />
</p>
<p>You are expected to find the smallest non-negative integer  <b>n</b>, such that</p>
<p><b>F<sub>n</sub>≡C(mod P)</b></p>
<p>The definition of "mod" could be found here:<br />
<a target="_blank" href="http://en.wikipedia.org/wiki/Modular_arithmetic"><br />
here</a></p>
<p> </p>
<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
<p>Only one line of each test case, which contains two integers <b>C</b> and <b>P</b> denoting the number described above.
</p></ul>
<p> </p>
<h3>Output</h3>
<ul>
For each test case, output a single line containing one integer indicates the smallest <b>n</b>. If such <b>n</b> do not exist, output <b>-1</b> instead
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<b>1</b> ≤ <b>T</b> ≤ <b>100</b><br /><br />
<b>11</b> ≤ <b>P</b> ≤ <b>2000000000</b>  and  is one <b>prime number</b><br /><br />
<b>0</b> ≤ <b>C</b> ≤ <b>P-1</b><br /><br />
<b>(P Mod 10)</b> is <b>square number</b><br />
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
0 11
16 19
18 19
4 19

<b>Output:</b>
0
14
16
-1

<p>
<b>Hint:</b>
Here are the first few fibonacci number when mod by 19:

n	
0	1	2	3	4	5	6	7	8	9	10	11	12	13	14	15	16	17	18	19
F_n(mod 19)	
0	1	1	2	3	5	8	13	2     15	17	13	11	5	16	2	18	1	0	1
</p>

</pre>