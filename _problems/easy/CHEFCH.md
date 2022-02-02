---
{"category_name":"easy","problem_code":"CHEFCH","problem_name":"Chef and Chain","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shangjingbo","date_added":"12-03-2014","tags":{"0":"ad","1":"berezin","2":"feb15","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFCH","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/CHEFCH.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/CHEFCH.pdf">Russian</a>.</h3>
<p>Chef had a hard day and want to play little bit. The game is called "Chain". Chef has the sequence of symbols. Each symbol is either '<b>-</b>' or '<b>+</b>'. The sequence is called Chain if each two neighboring symbols of sequence are either '<b>-+</b>' or '<b>+-</b>'. </p>
<p> For example sequence '<b>-+-+-+</b>' is a Chain but sequence '<b>-+-+--+</b>' is not. </p>
<p> Help Chef to calculate the minimum number of symbols he need to replace (ex. '<b>-</b>' to '<b>+</b>' or '<b>+</b>' to '<b>-</b>') to receive a Chain sequence. </p>
<h3>Input</h3>
<ul>
<li>First line contains single integer <b>T</b> denoting the number of test cases. </li>
<li>Line of each test case contains the string <b>S</b> consisting of symbols '<b>-</b>' and '<b>+</b>'. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, in a single line print single interger - the minimal number of symbols Chef needs to replace to receive a Chain. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>10^5</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>1</b> ≤ <b>|S|</b> ≤ <b>10</b>, <b>1</b> ≤ <b>T</b> ≤ <b>7</b> Points: 20 </li>
<li>Subtask <b>1</b> ≤ <b>|S|</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>T</b> ≤ <b>7</b> Points: 30 </li>
<li>Subtask <b>1</b> ≤ <b>|S|</b> ≤ <b>10^5</b>, <b>1</b> ≤ <b>T</b> ≤ <b>7</b>Points: 50 </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
---+-+-+++
-------
<b>Output:</b>
2
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>We can change symbol <b>2</b> from '<b>-</b>' to '<b>+</b>' and symbol <b>9</b> from '<b>+</b>' to '<b>-</b>' and receive '<b>-+-+-+-+-+</b>'. </p>
<p><b>Example case 2.</b></p>
<p>We can change symbols <b>2, 4 and 6</b> from '<b>-</b>' to '<b>+</b>' and receive '<b>-+-+-+-</b>'. </p>
