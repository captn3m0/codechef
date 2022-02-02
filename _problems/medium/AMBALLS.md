---
{"category_name":"medium","problem_code":"AMBALLS","problem_name":"Andrew and the Balls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"19-04-2013","tags":{"0":"cook33","1":"dynamic","2":"medium","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/AMBALLS","time":{"view_start_date":1366569000,"submit_start_date":1366569000,"visible_start_date":1728420664,"end_date":1735669800},"layout":"problem"}
---
<p>Andrew likes colored balls very much.</p>
<p>He has <b>N</b> different colors of balls, all colors are numbered from <b>1</b> to <b>N</b>, inclusive. There are <b>C<sub>1</sub></b> balls of the first color, <b>C<sub>2</sub></b> balls of the second color, ..., <b>C<sub>N</sub></b> balls of the <b>N</b><sup>th</sup> color. All balls of the same color are identical.</p>
<p>Now he wants to arrange all the balls in a row in such a way that no two consecutive balls have the same color. But he wonders in how many ways can he arrange all the balls. Help him to find the number of ways of arranging all the balls. The number can be very large, so you must output this number modulo <b>1000000007</b> (<b>10<sup>9</sup>+7</b>).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains single integer <b>N</b>. The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output an integer, denoting the number of ways that he arranges all the balls modulo <b>1000000007</b> (<b>10<sup>9</sup>+7</b>).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>C<sub>1</sub> + C<sub>2</sub> + ... + C<sub>N</sub></b> ≤ <b>200</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
1 2
3
3 1 2

<b>Output:</b>
1
10
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: There is only one way to arrange all balls as follows<br />color-<b>2</b> color-<b>1</b> color-<b>2</b></p>
<p><b>Example case 2</b>: There are <b>10</b> ways to arrange all balls as follows<br />color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b><br />color-<b>1</b> color-<b>2</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>3</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>2</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b><br /></p>
