---
{"category_name":"school","problem_code":"LCH15JAB","problem_name":"Piece of cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"rubanenko","date_added":"25-12-2014","tags":{"0":"ad","1":"cakewalk","2":"ltime20","3":"pavel1996"},"time":{"view_start_date":1422174600,"submit_start_date":1422174600,"visible_start_date":1422174600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15JAB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME20/russian/LCH15JAB.pdf">Russian</a>.</h3>
<p>This is a very easy warm-up problem.</p>
<p>You are given a string. Your task is to determine whether number of occurrences of some character in the string is equal to the sum of  the numbers of occurrences of other characters in the string. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contains one string <b>S</b> consisting of lowercase latin letters.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>"YES"</b> if the string satisfies the condition given above or <b>"NO"</b>  otherwise. </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>length of S</b> ≤ <b>50</b></li>

<h3>Subtasks</h3>
<p><b>Subtask #1</b>[28 points]: <b>S</b> contains no more than <b>2</b> different letters.<br />
<b>Subtask #2</b>[72 points]: No additional conditions

<h3>Example</h3>
<pre><b>Input:</b>
4
acab
zzqzqq
abc
kklkwwww
<b>Output:</b>
YES
YES
NO
YES
</pre></p>