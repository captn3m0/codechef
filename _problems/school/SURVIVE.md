---
{"category_name":"school","problem_code":"SURVIVE","problem_name":"Survive in ChocoLand","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":"kingofnumbers","date_added":"20-01-2018","tags":{"0":"cook90","1":"easy","2":"greedy","3":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/SURVIVE","time":{"view_start_date":1516559400,"submit_start_date":1516559400,"visible_start_date":1516559400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/mandarin/SURVIVE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/russian/SURVIVE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/vietnamese/SURVIVE.pdf">Vietnamese</a> as well.</h3>

<p>
You are a poor person in ChocoLand. Here, people eat chocolates daily instead of normal food. There is only one shop near your home; this shop is closed on Sunday, but open on all other days of the week. You may buy <b>at most one</b> box of <b>N</b> chocolates from this shop on each day when it is open.
</p>

<p>
Currently, it's Monday, and you need to survive for the next <b>S</b> days (including the current day). You have to eat <b>K</b> chocolates everyday (including the current day) to survive. Do note that you are allowed to buy the a chocolate box and eat from it on the same day.
</p>

<p>
Compute the minimum number of days on which you need to buy from the shop so that you can survive the next <b>S</b> days, or determine that it isn't possible to survive.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains 3 integers <b>N</b>, <b>K</b> and <b>S</b> denoting the number of chocolates in a box, the number of chocolates you have to eat everyday to survive and the number of days you need to survive.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimum number of days on which you need to buy from the shop to survive, or -1 if you will not be able to survive <b>S</b> days.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>K</b> ≤ 100</li>
<li>1 ≤ <b>S</b> ≤ 1000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
16 2 10
50 48 7

<b>Output:</b>
2
-1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> One possible solution is to buy a box on day 1 (Monday); it's sufficient to eat from this box up to day 8 (Monday) inclusive. Now, on day 9 (Tuesday), you buy another box and use the chocolates in it to survive days 9 and 10.</p>
<p><b>Example case 2:</b> You will not be able to survive even if you buy from the shop everyday except every 7-th day.</p>
