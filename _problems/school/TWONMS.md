---
{"category_name":"school","problem_code":"TWONMS","problem_name":"Two Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"grumpy_gordon","problem_tester":"lg5293","date_added":"21-06-2017","tags":{"0":"cakewalk","1":"grumpy_gordon","2":"ltime49","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/TWONMS","time":{"view_start_date":1498323600,"submit_start_date":1498323600,"visible_start_date":1498323600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/mandarin/TWONMS.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/russian/TWONMS.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/vietnamese/TWONMS.pdf">vietnamese</a> as well.</h3>

<p>Alice and Bob are playing a game. Alice initially has the number <b>A</b> and Bob has the number <b>B</b>. There are a total of <b>N</b> turns in the game, and Alice and Bob alternatively take turns. In each turn the player whose turn it is, multiplies his or her number by 2. Alice has the first turn.</p>
<p>Suppose after all the <b>N</b> turns, Alice's number has become <b>C</b> and Bob's number has become <b>D</b>. You want to calculate the <a href = "http://mathworld.wolfram.com/IntegerDivision.html">integer division</a> of the maximum number among <b>C</b> and <b>D</b> by the minimum number among <b>C</b> and <b>D</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of each testcase follows.</li>
<li>Each test case contains a single line with 3 integers <b>A</b>, <b>B</b>, and <b>N</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case output a new line with a single integer which should be the answer.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A</b> ≤ <b>1000000000</b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>1000000000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000000000</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): <b>N</b> ≤ <b>30</b></li>
<li>Subtask #2 (70 points): Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 1
3 2 3
3 7 2

<b>Output:</b>
1
3
2
</pre>

<h3>Explanation</h3>
<p>In the first testcase, the initial numbers are (<b>A</b> = 1, <b>B</b> = 2). There is only one turn. In this turn Alice multiplies her number by 2. Hence, we get (<b>A</b> = 2, <b>B</b> = 2). Therefore <b>C</b> = 2, and <b>D</b> = 2. max(<b>C</b>, <b>D</b>)/min(<b>C</b>, <b>D</b>) = 2/2 = 1. Hence the first output is 1.</p>

<p>In the second testcase, the initial numbers are (<b>A</b> = 3, <b>B</b> = 2). There three turns. In the first turn Alice multiplies her number by 2. Hence, we get (<b>A</b> = 6, <b>B</b> = 2). In the second turn Bob multiplies his number by 2. Hence, we get (<b>A</b> = 6, <b>B</b> = 4). In the third turn Alice multiplies her number by 2. Hence, we get (<b>A</b> = 12, <b>B</b> = 4). Therefore <b>C</b> = 12, and <b>D</b> = 4. max(<b>C</b>, <b>D</b>)/min(<b>C</b>, <b>D</b>) = 12/4 = 3. Hence the second output is 3.</p>

<p>In the third testcase, the initial numbers are (<b>A</b> = 3, <b>B</b> = 7). There two turns. In the first turn Alice multiplies her number by 2. Hence, we get (<b>A</b> = 6, <b>B</b> = 7). In the second turn Bob multiplies his number by 2. Hence, we get (<b>A</b> = 6, <b>B</b> = 14). Therefore <b>C</b> = 6, and <b>D</b> = 14. max(<b>C</b>, <b>D</b>)/min(<b>C</b>, <b>D</b>) = 14/6 = 2, because we are doing integer division. Hence the third output is 2.</p>