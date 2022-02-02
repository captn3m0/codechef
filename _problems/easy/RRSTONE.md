---
{"category_name":"easy","problem_code":"RRSTONE","problem_name":"Stone","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"xcwgf666","date_added":"14-04-2014","tags":{"0":"Rubanenko","1":"ad","2":"easy","3":"may14"},"editorial_url":"http://discuss.codechef.com/problems/RRSTONE","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/RRSTONE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/RRSTONE.pdf">Russian</a>.</h3>
<p>Roman has no idea, why this problem is called Stone. He also has no idea on how to solve the followong problem: given array of <b>N</b> integers <b>A</b> and a number <b>K</b>. During a turn the maximal value over all <b>A<sub>i</sub></b> is chosen, let's call it <b>MAX</b>. Then <b>A<sub>i</sub></b> =<br />
<b>MAX</b> - <b>A<sub>i</sub></b> is done for every <b>1 &lt;= i &lt;= N</b>. Help Roman to find out how will the array look like after <b>K</b> turns.
</p>
<h3>Input</h3>
<p>The numbers <b>N</b> and <b>K</b> are given in the first line of an input. Then <b>N</b> integers are given in the second line which denote the array <b>A</b>. </p>
<h3>Output</h3>
<p>Output <b>N</b> numbers on a single line. It should be the array <b>A</b> after <b>K</b> turns.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10<sup>5</sup></b></li>
<li><b>0</b> &lt;= <b>K</b> &lt;= <b>10<sup>9</sup></b></li>
<li><b>A<sub>i</sub></b> does not exceed <b>2 * 10<sup>9</sup></b> by it's absolute value.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 1
5 -1 7 0

<b>Output:</b>
2 8 0 7
</pre>