---
{"category_name":"easy","problem_code":"THREEDIF","problem_name":"Three Different Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.013,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"anton_lunyov","date_added":"5-01-2013","tags":{"0":"anton_lunyov","1":"combinatorics","2":"jan13","3":"modulo","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/THREEDIF","time":{"view_start_date":1358248727,"submit_start_date":1358248727,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>This is probably the simplest problem ever. You just need to count the number of ordered triples of different numbers <b>(X<sub>1</sub>, X<sub>2</sub>, X<sub>3</sub>)</b>, where <b>X<sub>i</sub></b> could be any positive integer from <b>1</b> to <b>N<sub>i</sub></b>, inclusive (<b>i = 1, 2, 3</b>).</p>
<p>No, wait. I forgot to mention that numbers <b>N<sub>1</sub>, N<sub>2</sub>, N<sub>3</sub></b> could be up to <b>10<sup>18</sup></b>. Well, in any case it is still quite simple :)</p>
<p>By the way, because of this the answer could be quite large. Hence you should output it modulo <b>10<sup>9</sup> + 7</b>. That is you need to find the remainder of the division of the number of required triples by <b>10<sup>9</sup> + 7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains three space-separated integers <b>N<sub>1</sub>, N<sub>2</sub>, N<sub>3</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of required triples modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
3 3 3
2 4 2
1 2 3
25 12 2012
1 1 2013

<b>Output:</b>
6
4
1
578880
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We have the following triples composed of different numbers up to 3:<br />(1, 2, 3)<br />(1, 3, 2)<br />(2, 1, 3)<br />(2, 3, 1)<br />(3, 1, 2)<br />(3, 2, 1)</p>
<p><b>Example case 2.</b> Here the triples are:<br />(1, 3, 2)<br />(1, 4, 2)<br />(2, 3, 1)<br />(2, 4, 1)</p>
<p><b>Example case 3.</b> Here the only triple is (1, 2, 3).</p>
<p><b>Example case 4.</b> Merry Christmas! </p>
<p><b>Example case 5.</b> ... and Happy New Year! By the way here the answer is zero since the only choice for <b>X<sub>1</sub></b> and for is <b>X<sub>2</sub></b> is 1, so any such triple will have equal numbers.</p>
