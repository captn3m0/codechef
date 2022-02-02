---
{"category_name":"school","problem_code":"CFRTEST","problem_name":"Devu and friendship testing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"11-05-2015","tags":{"0":"admin2","1":"cakewalk","2":"cook58"},"editorial_url":"http://discuss.codechef.com/problems/CFRTEST","time":{"view_start_date":1432492200,"submit_start_date":1432492200,"visible_start_date":1432492200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/mandarin/CFRTEST.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/russian/CFRTEST.pdf">Russian</a> as well.</h3>

<p>
Devu has <b>n</b> weird friends. Its his birthday today, so they thought that this is the best occasion for testing their friendship with him. They put up conditions before Devu that they will break the friendship unless he gives them a grand party on their chosen day. Formally, <b>i</b><sup>th</sup> friend will break his friendship if he does not receive a grand party on <b>d<sub>i</sub></b><sup>th</sup> day.
</p>

<p>
Devu despite being as rich as Gatsby, is quite frugal and can give at most one grand party daily. Also, he wants to invite only one person in a party. So he just wonders what is the maximum number of friendships he can save. Please help Devu in this tough task !!
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>First line will contain a single integer denoting <b>n</b>.
<li>Second line will contain <b>n</b> space separated integers where <b>i</b><sup>th</sup> integer corresponds to the day <b>d<sub>i</sub></b><sup>th</sup> as given in the problem.</li>
</ul>

<h3>Output</h3>
<p>Print a single line corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>n</b> <b> ≤ 50</b></li>
<li><b>1</b> ≤ <b>d<sub>i</sub></b> <b>≤ 100</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
3 2
2
1 1
<b>Output:</b>
2
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Devu can give party to second friend on day 2 and first friend on day 3, so he can save both his friendships.</p>
<p><b>Example case 2.</b> Both the friends want a party on day 1, and as the Devu can not afford more than one party a day, so he can save only one of the friendships, so answer is 1.</p>