---
{"category_name":"school","problem_code":"FRUITS","problem_name":"Chef and Fruits","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"antoniuk1","date_added":"6-01-2016","tags":{"0":"ad","1":"cakewalk","2":"cook66","3":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/FRUITS","time":{"view_start_date":1453660200,"submit_start_date":1453660200,"visible_start_date":1453660200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/mandarin/FRUITS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/russian/FRUITS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/vietnamese/FRUITS.pdf">Vietnamese</a> as well.</h3>


<p>Today is Chef's birthday. His mom has surprised him with truly fruity gifts: <b>2 fruit baskets</b>. The first basket contains <b>N</b> apples, and the second one contains <b>M</b> oranges. Chef likes apples and oranges very much but he likes them equally, and therefore, wants to have the minimum possible difference between the number of apples and oranges he has. To do so, he can purchase <b>1</b> apple or <b>1</b> orange by paying exactly <b>1</b> gold coin (that's some expensive fruit, eh?). Chef can purchase fruits at most <b>K</b> times (as he has <em>only</em> <b>K</b> gold coins in his pocket) to make the difference the minimum possible.</p>

<p>Our little Chef is busy in celebrating his birthday to the fullest, and therefore, he has handed this job to his best friend — <b>you</b>. Can you help him by finding the minimum possible difference he can achieve between the number of apples and orange he owns?

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. The first and only line of each test case contains <b>3</b> space separated integers — <b>N</b>, <b>M</b> and <b>K</b> — denoting the number of apples, number of oranges, and number of gold coins our little Chef has.</p>

<h3>Output</h3>
<p>For each test case, output the minimum possible difference between the number of apples and oranges that Chef can achieve.</p>

<h3>Constraints</h3>
<ul>
<b><li>1 ≤ T ≤ 100</li></b>
<b><li>1 ≤ N, M, K ≤ 100</li></b>
</ul>

<h3>Example</h3>
<b>Input</b>
<pre>
3
3 4 1
5 2 1
3 4 3

<b>Output</b>
0
2
0
</pre>

<h3>Explanation</h3>
<ul>
<li><b>Test 1:</b> Chef will buy 1 apple by paying 1 gold coin and will have equal number of apples and oranges. </li>
<li><b>Test 2:</b> Chef will buy 1 orange by paying 1 gold coin and will have 5 apples and 3 oranges.</li>
</ul>