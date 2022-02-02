---
{"category_name":"easy","problem_code":"DIGJUMP","problem_name":"Chef and Digit Jumps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shiplu","date_added":"12-03-2014","tags":{"0":"berezin","1":"bfs","2":"dijkstra","3":"easy","4":"june14"},"editorial_url":"http://discuss.codechef.com/problems/DIGJUMP","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/DIGJUMP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/DIGJUMP.pdf">Russian</a>.</h3>
<p>Chef loves games! But he likes to invent his own. Now he plays game "Digit Jump". Chef has sequence of digits <b>S<sub>1</sub>, S<sub>2</sub>,..., S<sub>N</sub>,</b>. He is staying in the first digit (<b>S<sub>1</sub></b>) and want to reach the last digit (<b>S<sub>N</sub></b>) in the minimal number of jumps. </p>
<p>While staying in some digit <b>x</b> with index <b>i</b> (digit <b>S<sub>i</sub></b>) Chef can jump into digits with indices <b>i - 1</b> (<b>S<sub>i-1</sub></b>) and <b>i + 1</b> (<b>S<sub>i+1</sub></b>) but he can't jump out from sequence. Or he can jump into any digit with the same value <b>x</b>. </p>
<p>Help Chef to find the minimal number of jumps he need to reach digit <b>S<sub>N</sub></b> from digit <b>S<sub>1</sub></b>. </p>
<p> </p>
<h3>Input</h3>
<p>Input contains a single line consist of string <b>S</b> of length <b>N</b>- the sequence of digits.</p>
<p> </p>
<h3>Output</h3>
<p>In a single line print single integer - the minimal number of jumps he needs.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li>Each symbol of <b>S</b> is a digit from <b>0</b> to <b>9</b>. </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
01234567890

<b>Output:</b>
1

<b>Input:</b>
012134444444443

<b>Output:</b>
4
</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>In the first case Chef can directly jump from the first digit (it is <b>0</b>) to the last (as it is also <b>0</b>).</p>
<p>In the second case Chef should jump in such sequence (the number of digits from <b>1</b>: <b>1-2-4-5-15</b>). </p>
</pre>