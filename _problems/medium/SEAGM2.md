---
{"category_name":"medium","problem_code":"SEAGM2","problem_name":"Sereja and Game 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"mugurelionut","date_added":"10-09-2014","tags":{"0":"easy","1":"july15","2":"maths","3":"probability","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAGM2","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/SEAGM2.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/SEAGM2.pdf" target="_blank">Russian</a>.</h3>
<p>Sereja is playing a game called <em>Winner Eats Sandwich</em> with his friends. There are <b>N</b> persons in total, including Sereja. Sereja is allotted the number 1, while his friends are allotted numbers from 2 to <b>N</b>. A set of this game consists of <b>M</b> parts. Probability that a player numbered <b>i</b> wins part <b>j</b> of any set is <b>p[i][j]</b>. Sereja and his friends play all the <b>M</b> parts of the first set. If someone wins all the parts, he is declared the winner of the match. Otherwise, another set of the game is played. A match of the game continues until someone wins a set. The winner of the set is then declared the winner of the game, and gets to eat the sandwich.</p>
<p>Now Sereja is interested in the probability with which he can win the match in no more than 10^(10^(10^(10^(10^10)))) sets. This is because the sandwich gets cold by the end of these many sets, and Sereja hates cold sandwiches.</p>
<h3>Input</h3>
<p>First line contains the number of test cases, <b>T</b>. The description of the <b>T</b> tests follows. First line of each test case contains two space separated integers <b>N, M</b>. Each of the next <b>N</b> lines contain <b>M</b> space-separated numbers, with the <b>j</b><sup>th</sup> number of the <b>i</b><sup>th</sup> line denoting <b>p[i][j]</b>. All numbers will be given with not more than 4 digits after the decimal point.</p>
<h3>Output</h3>
<p>For each test case, output the probability Sereja is interested in, with 6 digits after the decimal point.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>13</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10000</b></li>
<li>it is guaranteed that for each <b>j</b>, the sum <b>p[1][j] + p[2][j] + ... + p[N][j] is 1</b></li>
</ul>
<p> </p>
<p><b>Subtask 1 (10 points)</b></p>
<ul>
<li><b>1 ≤ N, M ≤ 4</b></li>
</ul>
<p> </p>
<p><b>Subtask 2 (90 points)</b></p>
<ul>
<li>Original constrains</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
1.0000 1.0000
0.0000 0.0000
2 3
0.5000 0.5000 0.5000
0.5000 0.5000 0.5000 

<b>Output:</b>
1.000000
0.500000
</pre>