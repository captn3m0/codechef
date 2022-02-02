---
{"category_name":"medium","problem_code":"CHEFINS","problem_name":"Chef and Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"tuananh93","date_added":"9-12-2016","tags":{"0":"cook77","1":"fft","2":"medium","3":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CHEFINS","time":{"view_start_date":1482085800,"submit_start_date":1482085800,"visible_start_date":1482085800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/mandarin/CHEFINS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/russian/CHEFINS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFINS.pdf">Vietnamese</a> as well.</h3>

<p>You are given some integers in the range between <b>1</b> and <b>N</b>. You have to answer <b>Q</b> queries, each query is given by number <b>X</b>, you have to tell whether you can write number <b>X</b> as a sum of allowed numbers. You can use an allowed integer zero or multiple times.</p>

<h3>Input</h3>
<p>The first line contains three integer numbers <b>N</b> and <b>K</b>, <b>Q</b>, where <b>K</b> denotes number of allowed integers, <b>Q</b> denotes number of queries. The second line containing <b>K</b> distinct integers <b>F</b><sub>i</sub> - allowed numbers.</p>
<p>Each of the next <b>Q</b> lines containing one integer number <b>X</b>.</p>

<h3>Output</h3>
<p>For each query output "Yes" or "No" (without quotess) in separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>K</b>, <b>Q</b>, <b>X</b> ≤ <b>200,000</b></li>
<li><b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 2 3
2 4
2
8
5

<b>Output:</b>
Yes
Yes
No
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> 2 = 2</p>
<p><b>Example case 2.</b> 8 = 2 + 2 + 4</p>
<p><b>Example case 3.</b> 5 can't be sum of any number of addends 2 and 4 </p>