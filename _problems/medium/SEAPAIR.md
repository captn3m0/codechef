---
{"category_name":"medium","problem_code":"SEAPAIR","problem_name":"Sereja and Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"6-11-2015","tags":{"0":"cook64","1":"easy","2":"greedy","3":"implementation","4":"maths","5":"sereja","6":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/SEAPAIR","time":{"view_start_date":1448217000,"submit_start_date":1448217000,"visible_start_date":1448217000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/mandarin/SEAPAIR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/russian/SEAPAIR.pdf">Russian</a>.</h3>


<p>Sereja had an non-negative integer <b>A</b> in the range <b>[0, 10<sup>100</sup>]</b>.
</p>

<p>
One day, he wrote <b>N</b> pairs of the form <b>(X[i], <a href="https://en.wikipedia.org/wiki/Floor_and_ceiling_functions"> floor</a>(A / X[i]) )</b> on a piece of paper. Let us denote <b>floor(A / X[i])</b> by <b>D[i]</b>.
</p>
<p>
Sereja's little brother Sergey is very naughty, he changed the <b>D</b> values for some of the pairs. When confronted for his mischief by Sereja, he said that he did not touch more than <b>K</b> such pairs. 
</p>

<p>
Now, given the modified values of <b>N</b> pairs of the form <b>(X[i], D[i])</b>, Sereja is wondering about number of possible original values of integer <b>A</b>. Please help Sereja so that little Sergey could avoid the upcoming beating by Sereja. As the answer could be large, please report it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.
</p>

<h3>Input</h3>
<p>First line of input contain an integer <b>T</b> — the number of test cases.<b>T</b> test cases follow.</p>
<p>First line of each test case contains integers <b>N</b> and <b>K</b>. Each of the next <b>N</b> lines contains a pair that Sereja wrote on the paper — <b>X[i]</b> and <b>D[i]</b> — as two space-separated integers.
</p>

<h3>Output</h3>
For each test case, output a single line containing the answer - number of possible numbers <b>A</b> modulo <b>(10<sup>9</sup>+7)</b>.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X[i] </b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>D[i] </b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 0
50 2
40 2
30 3
3 1
30 3
40 2
50 2

<b>Output:</b>
20
30
</pre>