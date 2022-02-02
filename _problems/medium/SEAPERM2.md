---
{"category_name":"medium","problem_code":"SEAPERM2","problem_name":"Sereja and Permutations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"10-09-2014","tags":{"0":"ad","1":"hashing","2":"medium","3":"nov14","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAPERM2","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/SEAPERM2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/SEAPERM2.pdf">Russian</a>.</h3>
<p>Sereja have permutation <b>p[1], p[2], ..., p[n]</b>. Sereja have made <b>n</b> permutations <b>q[1], q[2], ..., q[n]</b>, <b>q[i]</b> is permutation <b>p</b> without element <b>i</b> (we subtract 1 from all elements bigger than <b>i</b>). For example <b>8 1 2 3 4 5 6 7</b> without <b>5</b> is <b>7 1 2 3 4 5 6</b>. Sereja have made random shuffle of <b>q</b>. Help Sereja find initial permutation <b>p</b>.</p>
<h3>Input</h3>
<p>First line contain number of test cases <b>T</b>. <b>T</b> tests follow. First line of each test case contain number <b>n</b>. Next <b>n</b> lines describe permutations <b>q[1]</b>, <b>q[2]</b>, ..., <b>q[n]</b>. Each line contain <b>n-1</b> number. It is guarantied that there is at least one solution for each test case.</p>
<p> </p>
<h3>Output</h3>
<p>For each test output permutation <b>p</b>. If there is more than one solution - output any.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>3</b> ≤ <b>n</b> ≤ <b> 300 </b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>3</b> ≤ <b>n</b> ≤ <b> 6 </b> (13 points)</li>
<li>Subtask #2: <b>3</b> ≤ <b>n</b> ≤ <b> 50 </b> (27 points)</li>
<li>Subtask #3: <b>3</b> ≤ <b>n</b> ≤ <b> 300 </b> (60 points)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2
1 2
1 2

<b>Output:</b>
1 2 3

</pre><p> </p>
