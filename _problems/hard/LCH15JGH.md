---
{"category_name":"hard","problem_code":"LCH15JGH","problem_name":"Many bananas","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 2.5","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"rubanenko","date_added":"28-12-2014","tags":{"0":"ad","1":"fenwick","2":"ltime20","3":"maths","4":"medium","5":"pavel1996","6":"segment"},"time":{"view_start_date":1422174605,"submit_start_date":1422174605,"visible_start_date":1422174600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15JGH.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/russian/LCH15JGH.pdf">Russian</a>.</h3>
<p>You are a tribal leader and live in jungle with your people. Life of the leader is not easy sometimes. One of your responsibilities is food distribution. Let's consider this process in details.</p>
<p>There are many families in your tribal. The<b>i-th</b> family consists of <b>X<sub>i</sub></b>people. In some moment you give each family <b>Y</b> bananas(<b>Y</b> is equal for all families independently of its size). All members of family receive equal number of bananas each and this number is maximal with condition that total number of bananas this family have received doesn't exceed <b>Y</b>. Of course some bananas of these initial <b>Y</b> are left. They are given back to the leader of the tribal(you). In other words each member of family receives <b>floor Y / X<sub>i</sub></b>bananas and <b> Y modulo X<sub>i</sub></b> are given back to the leader.</p>
<p>. You are interested in total number of bananas you will have after this distribution process.</p>
<p>But things are not so simple. There are many events in life of your tribal. You will have to process many queries of three types:</p>
<ul>
<li>New family with <b>X<sub>i</sub></b>members joined your tribal</li>
<li>Some family with <b>X<sub>i</sub></b>members left your tribal(it's guaranteed that there was such a family before this query).</li>
<li>You give each family in your tribal <b>Y<sub>j</sub></b> bananas. You want to know the total number of bananas you will have after distribution. </li>
</ul>
<h3>Input</h3>
<p>The first line of input file contains one integer <b>N</b> denoting number of different family sizes before queries. Each of next <b>N</b>lines contains two space-separated integers <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> denoting size of the family and number of families with such size correspondingly. It's guaranteed that all the <b>A<sub>i</sub></b> are pairwise different.<br />
The next line contains one integer <b>M</b> denoting the number of queries. Next <b>M</b> lines describe one query each and can be one of the three types:</p>
<ul>
<li>"+ <b>X</b>" - one family with <b>X</b> members joined your tribal</li>
<li>"- <b>X</b>" - one family with <b>X</b> members left your tribal(it's guaranteed that there was such a family before this query).
</li>
<li>"? <b>Y</b>" - You give each family in your tribal <b>Y</b> bananas. You want to know the total number of bananas you will have after distribution. </li>
</ul>

<h3>Output</h3>
<p>For each third type query output one integer per line - answer for this query.</p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b>, <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>≤ <b>10<sup>5</sup></b> </li>
</ul>
<h3> Subtasks </h3>
<p><b>Subtask #1</b>[25 points]: <b>M</b> &lt; <b>1000</b><br />
<b>Subtask #2</b>[75 points]:  no additional conditions </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 4
3 2
2 2
6
? 10
? 8
+ 4
? 9
- 2
? 8
<b>Output:</b>
2
4
3
4
</pre>