---
{"category_name":"medium","problem_code":"COALSCAM","problem_name":"Coal Scam","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"gamabunta","date_added":"2-09-2012","tags":{"0":"cook26","1":"easy","2":"kruskal","3":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/COALSCAM","time":{"view_start_date":1348428142,"submit_start_date":1348428142,"visible_start_date":1348427700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef has entered the politics of Byteland. He is a minister in the coal department of the government. Recently, he has been assigned a project on constructing special bidirectional roads for transferring coals in such a way that the whole country is connected by a road network.</p>
<p style="text-align:justify">Different companies submitted their proposal of roads that they could build along with their estimated cost of the road. Chef has to select a subset of these proposed roads so that all cities of the country are connected.</p>
<p style="text-align:justify">Chef, corrupt as he is, managed to submit bids by his own company for certain roads. If some of his proposed roads are selected, he'd use low grade material. We can safely assume that the cost of building these roads is nothing to him. He would still receive the price he has quoted in the bid and hence, would make as much profit. He wants to choose some subset of proposed roads so that his own profit is maximised.</p>
<p style="text-align:justify">Byteland consists of N cities. There are M1 proposals to build roads by companies other than Chef's. Chef's company has proposed to build M2 roads. Chef wants to choose a subset of these roads in such a way that <b>for each pair of cities, there is exactly one path of roads connecting them</b>. The profit Chef will gain is equal to the sum of costs of the roads chosen from among those made by Chef's company.</p>
<p style="text-align:justify">Help Chef choose the roads in such a way that his profit is maximized. If there are multiple ways to achieve that, choose the way where the sum of costs of all chosen roads is minimized.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a number T, the number of test cases. This is followed by the input for each test case one by one. The first line of each test case contains three space-separated integers N, M1, and M2. Then M1 lines follow, each containing a description of a road proposed by other companies. Each of these lines contains three space-separated integers u, v, and c, where u and v denote the end points of the road and c denotes the associated cost. Then M2 lines follow, each containing a description of a road proposed by Chef's company in the same format.</p>
<h3>Output</h3>
<p style="text-align:justify">Output a single line for each test case. If it is impossible to choose a subset of the roads in such a way that for each pair of cities, there is exactly one path of roads connecting them, output a single line containing "Impossible" (quotes for clarity and starts with an uppercase 'I') for that test case. Otherwise, output a single line containing two space-separated integers: the maximum profit Chef can gain and the minimum total cost of the chosen roads that yields the maximum profit.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2 1
0 1 5
1 2 4
0 1 10
3 1 1
0 1 1
0 1 3

<b>Output:</b>
10 14
Impossible
</pre><h3>Constraints</h3>
<p>
1 ≤ T ≤ 5<br />
2 ≤ N ≤ 5,000<br />
1 ≤ M1 ≤ 20,000<br />
1 ≤ M2 ≤ 20,000<br />
For each proposed road, the end points will be two different cities.<br />
There may be several proposed roads between the same pair of cities.<br />
For each proposed road, 0 ≤ c ≤ 1,000,000,000<br />
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.
</p>
