---
{"category_name":"easy","problem_code":"CHEFCBA","problem_name":"Chef and Proportion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"karanaggarwal","date_added":"10-07-2016","tags":{"0":"ad","1":"cook72","2":"mgch","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFCBA","time":{"view_start_date":1469385000,"submit_start_date":1469385000,"visible_start_date":1469385000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/COOK72/mandarin/CHEFCBA.pdf" target="_blank">Mandarin Chinese</a>, <a href="/download/translated/COOK72/russian/CHEFCBA.pdf" target="_blank">Russian</a> and <a href="/download/translated/COOK72/vietnamese/CHEFCBA.pdf" target="_blank">Vietnamese</a> as well.</h3>
<h3>Read problems statements in <a href="/download/translated/COOK72/mandarin/CHEFCBA.pdf" target="_blank">Mandarin Chinese</a>, <a href="/download/translated/COOK72/russian/CHEFCBA.pdf" target="_blank">Russian</a> and <a href="/download/translated/COOK72/vietnamese/CHEFCBA.pdf" target="_blank">Vietnamese</a> as well.</h3>
<p>Chef recently learned about ratios and proportions. He wrote some positive integers <b>a, b, c, d</b> on a paper. Chef wants to know whether he can shuffle these numbers so as to make some proportion? Formally, four numbers <b>x, y, z, w</b> are said to make a proportion if ratio of <b>x : y</b> is same as that of <b>z : w</b>.</p>
<h3>Input</h3>
<p>Only line of the input contains four space separated positive integers - <b>a, b, c, d</b>.</p>
<h3>Output</h3>
<p>Print "Possible" if it is possible to shuffle <b>a, b, c, d</b> to make proportion, otherwise "Impossible" (<tt>without quotes</tt>).</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>a, b, c, d </b> ≤ 1000</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1 2 4 2

<b>Output:</b>
Possible
</pre>
<h3>Explanation</h3>
<p>By swapping 4 and the second 2, we get 1 2 2 4. Note that 1 2 2 4 make proportion as 1 : 2 = 2 : 4. Hence answer is "Possible"</p>