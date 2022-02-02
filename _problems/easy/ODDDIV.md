---
{"category_name":"easy","problem_code":"ODDDIV","problem_name":"Odd Divisors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"26-03-2016","tags":{"0":"cook69","1":"divisors","2":"kostya_by","3":"simple","4":"sum"},"editorial_url":"http://discuss.codechef.com/problems/ODDDIV","time":{"view_start_date":1460917800,"submit_start_date":1460917800,"visible_start_date":1460917800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/mandarin/ODDDIV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/russian/ODDDIV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/vietnamese/ODDDIV.pdf">Vietnamese</a> as well.</h3>
<p>Little Egor likes to play with positive integers and their divisors. Bigger the number to play with, more the fun! The boy asked you to come up with an algorithm, that could play the following game: </p>
<p>Let's define <b>f(n)</b> as the sum of all odd divisors of <b>n</b>. I.e. <b>f(10) = 1 + 5 = 6</b> and <b>f(21) = 1 + 3 + 7 + 21 = 32</b>. The game is to calculate <b>f(l) + f(l + 1) + ... + f(r - 1) + f(r)</b> for the given integers <b>l</b> and <b>r</b>.</p>
<p>Have fun! But be careful, the integers might be quite big.</p>
<h3>Input</h3>
<p>The first line of the input contains one integer <b>T</b> denoting the number of test cases.</p>
<p>The only line of the test case description contains two positive integers <b>l</b> and <b>r</b>.</p>
<h3>Output</h3>
<p>For each test case, output the required sum on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ l ≤ r ≤ 10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 10
42 42

<b>Output:</b>
45
32
</pre><h3>Explanation</h3>
<p>In the first example case, <b>f(1) + f(2) + ... + f(10) = 1 + 1 + 4 + 1 + 6 + 4 + 8 + 1 + 13 + 6 = 45</b></p>
<p>In the second example case, <b>f(42) = 32</b>.</p>
