---
{"category_name":"easy","problem_code":"CARVANS","problem_name":"Carvans","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"gamabunta","date_added":"2-09-2012","tags":{"0":"cakewalk","1":"cook26","2":"simple","3":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/CARVANS","time":{"view_start_date":1348428125,"submit_start_date":1348428125,"visible_start_date":1348427700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Most problems on CodeChef highlight chef's love for food and cooking but little is known about his love for racing sports. He is an avid Formula 1 fan. He went to watch this year's Indian Grand Prix at New Delhi. He noticed that one segment of the circuit was a long straight road. It was impossible for a car to overtake other cars on this segment. Therefore, a car had to lower down its speed if there was a slower car in front of it. While watching the race, Chef started to wonder how many cars were moving at their maximum speed.</p>
<p style="text-align:justify">Formally, you're given the maximum speed of N cars in the order they entered the long straight segment of the circuit. Each car prefers to move at its maximum speed. If that's not possible because of the front car being slow, it might have to lower its speed. It still moves at the fastest possible speed while avoiding any collisions. For the purpose of this problem, you can assume that the straight segment is infinitely long.</p>
<p style="text-align:justify">Count the number of cars which were moving at their maximum speed on the straight segment.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer T denoting the number of test cases to follow. Description of each test case contains 2 lines. The first of these lines contain a single integer N, the number of cars. The second line contains N space separated integers, denoting the maximum speed of the cars in the order they entered the long straight segment.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the number of cars which were moving at their maximum speed on the segment.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
10
3
8 3 6
5
4 5 1 2 3

<b>Output:</b>
1
2
2
</pre><h3>Constraints</h3>
<p>
1 ≤ T ≤ 100<br />
1 ≤ N ≤ 10,000<br />
All speeds are distinct positive integers that fit in a 32 bit signed integer.<br />
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.
</p>
<p style="text-align:justify"><b>WARNING!</b> The input files are very large. Use faster I/O.</p>
