---
{"category_name":"easy","problem_code":"SPRNMBRS","problem_name":"Super Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"shangjingbo","date_added":"5-09-2015","tags":{"0":"cook62","1":"easy","2":"kostya_by","3":"number"},"editorial_url":"http://discuss.codechef.com/problems/SPRNMBRS","time":{"view_start_date":1442773800,"submit_start_date":1442773800,"visible_start_date":1442773800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/mandarin/SPRNMBRS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/russian/SPRNMBRS.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>
<a href="https://en.wikipedia.org/wiki/Euler%27s_totient_function"> Euler's phi function </a> for a positive integer <b>N</b> is usually denoted as <b>φ(N)</b> and defined as the number of positive integers less than or equal to <b>N</b> that are <a href="https://en.wikipedia.org/wiki/Coprime_integers"> coprime</a> with <b>N</b>. Let's call a positive integer <b>N</b> a <i>super</i> number if <b>N</b> can be divided by <b>φ(N)</b> without a remainder. <br />
e.g. 2 is a super number (since <b>2 mod φ(2) = 0</b>), while 3 is not (since <b>3 mod φ(3) = 1</b>).
</p>
<p>
You are given two positive integers <b>L</b> and <b>R</b>. Your task is to find count of super numbers in the range <b>[L, R]</b>.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
Each test case is described by a single line containing two positive integers <b>L</b> and <b>R</b>.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer: the number of super numbers in the range.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>18</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 3
90 95
12 21

<b>Output:</b>
1
0
3
</pre><h3>Explanation</h3>
<p><b>In the first example</b>, 2 is a super number while 3 is not (as explained in the statement). So, the number of super numbers in the range [2, 3] will be equal to 1.</p>
