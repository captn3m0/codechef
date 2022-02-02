---
{"category_name":"hard","problem_code":"CHEFTRAF","problem_name":"Traffic in Chefland","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":9,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":null,"date_added":"22-09-2017","tags":{"0":"centroid","1":"dfs","2":"fenwick","3":"hard","4":"lca","5":"ltime52","6":"r_64"},"editorial_url":"https://discuss.codechef.com/problems/CHEFTRAF","time":{"view_start_date":1506790800,"submit_start_date":1506790800,"visible_start_date":1506790800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/mandarin/CHEFTRAF.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/russian/CHEFTRAF.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME52/vietnamese/CHEFTRAF.pdf">vietnamese</a> as well.</h3>

<p>
	There are <b>N</b> cities in Chefland. Chef owns the biggest traffic company in Chefland, and Chef has built <b>N</b>-<b>1</b> bidirectional roads between these cities. The <b>i</b>-th road connects city <b>a<sub>i</sub></b> and city <b>b<sub>i</sub></b>, and is <b>c<sub>i</sub></b> kms long. It's possible to travel between any two cities by going through these roads. However, only those people who have Chef's VIP card can use these roads. It costs 1 Chefcoin/km to travel on one of Chef’s roads.</p>
<p>
	A businessman named Fehc came to Chefland to compete with Chef's company and created his own traffic network. It also contains <b>N</b>-<b>1</b> roads. The <b>i</b>-th of these roads connects city <b>p<sub>i</sub></b> and city <b>q<sub>i</sub></b>, and has length <b>r<sub>i</sub></b> kms. Again, it is possible to travel between any two cities by going through Fehc's roads (and ignoring Chef's). Similar to Chef, only those people who have Fehc's VIP card can travel on these roads and it costs 1 Chefcoin/km to travel on one of Fehc's roads.</p>
<p>
	On New Year's Day in Chefland, there is expected to be a huge traffic flow because of people travelling to celebrate with family and friends. For any <b>1</b> ≤ <b>i</b> &lt; <b>j</b> ≤ <b>N</b>, there will be exactly one person who wants to go from city <b>i</b> to city <b>j</b>. To achieve this, he should ask Chef or Fehc for VIP cards and travel along the roads permitted by the cards. However, Chef and Fehc are in a competing relationship, and hence any one person can only get one VIP card. A person will choose that company that has a shorter(cheaper) route from city <b>i</b> to city <b>j</b>, buy that company's VIP card, and travel along that company's roads. If there is a tie, he chooses an arbitrary company(this doesn't affect the answer of the problem).</p>
<p>
	There are <b>M</b>=<b>N*(N-1)/2</b> people who will travel on New Year's Day. Your task is to compute the total amount of Chefcoins spent by them.</p>
<h3>
	Input</h3>
<ul>
	<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
	<li>For each test case, the first line contains a single integer <b>N</b> denoting the number of cities in Chefland.</li>
	<li>The next <b>N-1</b> lines each contain three space-separated integers <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b> and <b>c<sub>i</sub></b>, denoting a road by Chef's company.</li>
	<li>The next <b>N-1</b> lines each contain three space-separated integers <b>p<sub>i</sub></b>, <b>q<sub>i</sub></b> and <b>r<sub>i</sub></b>, denoting a road by Fehc's company.</li>
</ul>
<h3>
	Output</h3>
<p>
	For each test case, output one number denoting the total amount of Chefcoins that will be spent by the <b>M</b> travellers.</p>
<h3>
	Constraints</h3>
<p><ul>
	<li><b>1</b> ≤ <b>T</b> ≤ <strong>1000</strong></li>
	<li><b>2</b> ≤ <b>N</b> ≤ <strong>50000</strong></li>
	<li>the sum of <strong>N</strong> over all test cases ≤ <strong>200000</strong></li>
	<li><b>1</b> ≤ <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>, <b>p<sub>i</sub></b>, <b>q<sub>i</sub></b> ≤ <b>N</b></li>
	<li><b>1</b> ≤ <b>c<sub>i</sub></b>, <b>r<sub>i</sub></b> ≤ <b>4096</b></li>
</ul></p>
<p>
	Subtask #1 (8 points):
<ul>
	<li><strong>N</strong> ≤ <strong>1000</strong></li>
	<li>the sum of <b>N</b> over all test cases ≤ <b>5000</b></li>
</ul></p>
<p>
	Subtask #2 (10 points):
<ul>
	<li>For any <b>1</b> ≤ <b>i</b> &lt; <b>N</b>, <b>a<sub>i</sub></b> = <b>p<sub>i</sub></b>, <b>b<sub>i</sub></b> = <b>q<sub>i</sub></b>, <b>c<sub>i</sub></b> = <b>r<sub>i</sub></b>. In other words, Chef's and Fehc's traffic networks are exactly the same.</li>
</ul></p>
<p>
	Subtask #3 (23 points):
<ul>
	<li>Fehc's traffic network is a chain <b>1-2-3-...-N</b></li>
</ul></p>
<p>
	Subtask #4 (59 points):
<ul>
	<li>original constraints</li>
</ul></p>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
2 3 2
1 3 2
2 3 3
6
4 3 2
4 5 2
2 4 2
4 6 2
1 5 1
6 3 2
1 5 1
2 4 1
6 5 1
4 6 2

<b>Output:</b>
7
39

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 1:</b> There are 3 people:
<ul>
<li>The first person goes from city 1 to city 2. He chooses Chef's roads and pays 3 chefcoin.</li>
<li>The second person goes from city 1 to city 3. He chooses Fehc's roads and pays 2 chefcoin.</li>
<li>The third person goes from city 2 to city 3. He chooses Chef's roads and pays 2 chefcoin.</li>
</ul>
</p>