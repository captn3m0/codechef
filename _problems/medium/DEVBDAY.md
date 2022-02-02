---
{"category_name":"medium","problem_code":"DEVBDAY","problem_name":"Devu, his friends and birthday gifts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"19-02-2015","tags":{"0":"admin2","1":"basic","2":"cook58","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/DEVBDAY","time":{"view_start_date":1432492200,"submit_start_date":1432492200,"visible_start_date":1432492200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/mandarin/DEVBDAY.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/russian/DEVBDAY.pdf">Russian</a> as well.</h3>

<p>
You might have realized up to now that some of the Devu's friend are really weird. It is Devu's 22nd birthday today. His friends are coming to his home for his birthday party. Some of his friends are so shameless that instead of giving him a gift, they even ask gifts from him. 
</p>

<p>
Devu has <b>n</b> friends. He wants to invite some of his friends in the party. Devu knows beforehand that <b>i<sup>th</sup></b> friend will give a gift of <b>r<sub>i</sub></b> rupees. If <b>r<sub>i</sub></b> is positive, then it means that they will give a gift of |<b>r<sub>i</sub></b>| rupees to Devu, otherwise it means that they want to receive a gift of|<b>r<sub>i</sub></b>| rupees from Devu.
</p>

<p>
Devu's friend are really weird and they keep conditions before Devu like this : "If you invite me, you should also invite my best friend too". For <b>i<sup>th</sup></b> person, you are given an integer <b>f<sub>i</sub></b> denoting his best friend. It means that if Devu invites <b>i<sup>th</sup></b> person, then he has to invite person <b>f<sub>i</sub></b> too. Please note that best friend relationship is not bi-directional i.e. it is not necessary that if A is best friend of B, then B should be best friend of A.
</p>

<p>
You have to help Devu in choosing an optimal set of friends to invite so that the total amount of money he receives in gifts is maximum. Devu can also choose to not to invite anyone at all. Find out the maximum total amount of money Devu can have.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>First line of each test case will contain a single integer <b>n</b> denoting total number of friends of Devu.</li>
<li>Second line contains <b>n</b> space separated integers denoting array <b>f</b> which describes best friend of <b>i<sup>th</sup></b> person.</li>
<li>Third line contains <b>n</b> space separated integers denoting array <b>r</b> as stated in the problem.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print a single line containing maximum amount of rupees he can have in the end. </li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup> ≤ r<sub>i</sub> ≤ 10<sup>9</sup></b></li>
<li><b>1 ≤ f<sub>i</sub> ≤ n</b></li>
<li><b>f<sub>i</sub> != i</b></li>
<li>Sum of <b>n</b> over all the test cases will be less than or equal to <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
2
2 1
3 5
2 
2 1 
-3 5
3
2 3 2
-2 2 4
3
2 3 2
-1 -2 -3
<b>Output:</b>
8
2 
6
0
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Both his friends are giving him gifts. So he will invite both of them to the party and will collect 8 rupees from the gifts received.</p>
<p><b>Example case 2.</b> He invites both of the friends and total rupees collected will be 2 rupees. He can not invite 2nd friend only, because 1st person is a best friend of 2nd person and he must be invited too if 2nd friend is invited.</p>
<p><b>Example case 3.</b> He will invite second and third of his friends. So total rupees collected will be 6 rupees.</p>
<p><b>Example case 4.</b> In this case, all of his friends want to receive gifts from Devu. It is better for him to invite none. So he will receive total 0 rupees.</p>