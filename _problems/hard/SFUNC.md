---
{"category_name":"hard","problem_code":"SFUNC","problem_name":"SuperFunction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"28-11-2013","tags":{"0":"basic","1":"easy","2":"exponentiation","3":"inclusn","4":"kostya_by","5":"ltime07","6":"subarr"},"editorial_url":"http://discuss.codechef.com/problems/SFUNC","time":{"view_start_date":1388305881,"submit_start_date":1388305881,"visible_start_date":1388305800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/mandarin/SFUNC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/russian/SFUNC.pdf">Russian</a>.</h3>
<p>Mike likes to invent new functions. The latest one he has invented is called <i>SuperFunction</i>. Let's consider how it can be calculated:
</p>
<p>
You are given two integers <b>N</b> and <b>K</b>. <i>SuperFunction</i> of <b>N</b> and <b>K</b> equals to the sum of <b>K</b>'th powers of the positive numbers, which are coprime with <b>N</b> and also not greater than <b>N</b>.
</p>
<p>
I.e. <i>SuperFuntion</i> of 6 and 3 equals to <b>1<sup>3</sup> + 5<sup>3</sup> = 126</b>.
</p>
<p>
Mike knows how to calculate <i>SuperFunction</i> in case <b>N</b> and <b>K</b> are rather small integers. Now he wants you to write him a solution, which can calculate <i>SuperFuntion</i> for bigger constraints. As far as <i>SuperFunction</i> could be extremely huge, you are asked to do all the calculation under modulo <b>M</b>.
</p>
<p>Help Mike!</p>

<h3>Input</h3>
<p>
The first line contains three integers <b>N</b>, <b>K</b> and <b>M</b>.<br />
</p>

<h3>Output</h3>
<p>The first line of contains the only integer, denoting <i>SuperFuntion</i> of <b>N</b> and <b>K</b> under modulo <b>M</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2 100
<b>Output:</b>
30
</pre>
<h3>Explanation</h3>
<p>
In the test case <b>N</b> equals to 5, <b>K</b> equals to 2, <b>M</b> equals to 100. The answer is (1<sup>2</sup> + 2<sup>2</sup> + 3<sup>2</sup> + 4<sup>2</sup>) mod 100 = 30.
</p>

<h3>Scoring</h3>
<p>
Subtask 1 (12 points): 1 ≤ <b>N</b> ≤ 100, 1 ≤ <b>K</b> ≤ 2, 1 ≤ <b>M</b> ≤ 40000;<br /><br />
Subtask 2 (28 points): 1 ≤ <b>N</b> ≤ 1 000 000, 1 ≤ <b>K</b> ≤ 2, 1 ≤ <b>M</b> ≤ 10<sup>9</sup>;<br /><br />
Subtask 3 (30 points): 1 ≤ <b>N</b> ≤ 1 000 000 000 000, 1 ≤ <b>K</b> ≤ 3, 1 ≤ <b>M</b> ≤ 10<sup>9</sup>;<br /><br />
Subtask 4 (30 points): 1 ≤ <b>N</b> ≤ 1 000 000 000 000, 1 ≤ <b>K</b> ≤ 10, 1 ≤ <b>M</b> ≤ 10<sup>18</sup>.<br />
</p>

