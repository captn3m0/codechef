---
{"category_name":"easy","problem_code":"CHEFSETC","problem_name":"Chef and Subset","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"tuananh93","date_added":"9-12-2016","tags":{"0":"bitmasks","1":"bruteforce","2":"cakewalk","3":"cook77","4":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CHEFSETC","time":{"view_start_date":1482085800,"submit_start_date":1482085800,"visible_start_date":1482085800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/mandarin/CHEFSETC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/russian/CHEFSETC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFSETC.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes problems which using some math. Now he asks you to solve next one. You have 4 integers, Chef wondering is there non-empty subset which has sum equals 0.</p>

<h3>Input</h3>
<p>The first line of input contains <b>T</b> - number of test cases. </p>
<p>Each of the next <b>T</b> lines containing four pairwise distinct integer numbers - <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b>.</p>

<h3>Output</h3>
<p>For each test case output "Yes", if possible to get 0 by choosing non-empty subset of {<b>a</b>, <b>b</b>, <b>c</b>, <b>d</b>} with sum equal 0, or "No" in another case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>-10<sup>6</sup></b> ≤ <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b> ≤ <b>10<sup>6</sup></b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 0 3
1 2 4 -1
1 2 3 4

<b>Output:</b>
Yes
Yes
No
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> We can choose subset {0} </p>
<p><b>Example case 2.</b> We can choose subset {-1, 1} </p>