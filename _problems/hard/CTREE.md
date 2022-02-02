---
{"category_name":"hard","problem_code":"CTREE","problem_name":"Chef and Chefcoin","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"wwwwodddd","date_added":"3-02-2018","tags":{"0":"cook91","1":"data","2":"dfs","3":"graph","4":"hard","5":"mgch","6":"tree"},"editorial_url":"https://discuss.codechef.com/problems/CTREE","time":{"view_start_date":1518978600,"submit_start_date":1518978600,"visible_start_date":1518978600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/mandarin/CTREE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/russian/CTREE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/vietnamese/CTREE.pdf">Vietnamese</a> as well.</h3>

<p>Everybody's heard about Chefland — the digital country where dreams come true, where nobody hears about crime and where everyone can get Accepted without submitting solutions. Of course, Chefland has the shape of a <a href="https://en.wikipedia.org/wiki/Tree_(graph_theory)">tree</a> — there are <b>N</b> servers and <b>N-1</b> bidirectional channels connecting pairs of servers in such a way that there is exactly one path between each pair of servers.</p>

<p>The citizens in Chefland are living online; each citizen lives on exactly one server at any point in time. Don't be surprised, it's a futuristic scenario! Each channel connecting two servers has a value called <i>ping</i>. Each citizen can move to a different server through channels; moving through a channel with ping <b>2w</b> takes <b>w</b> nanoseconds. Initially, there are <b>c<sub>i</sub></b> citizens living on the <b>i</b>-th server (for each 1 ≤ <b>i</b> ≤ <b>N</b>).</p>

<p>Recently, Chef has created an <a href="https://en.wikipedia.org/wiki/Initial_coin_offering">ICO</a> for Chefcoin — the cryptocurrency of the future in Chefland. Everyone in Chefland should receive exactly 1 Chefcoin. How to organize this process? Chefcoins can only be received on certain servers containing cryptoexchanges. Unfortunately, Chef can only create cryptoexchanges on two servers, since they consume a lot of electric power. The citizens want to receive Chefcoin as fast as possible; therefore, each citizen chooses the closest server with a cryptoexchange and moves to that server. Receiving Chefcoin at a cryptoexchange takes zero time.</p>

<p>Chef wants to minimize the sum of the times each citizen needs to spend moving to receive Chefcoin. The two servers containing cryptoexchanges can be chosen arbitrarily. Compute the minimum total time it takes Chefland's citizens to receive Chefcoin!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>c<sub>1</sub>, c<sub>2</sub>, ..., c<sub>N</sub></b>.</li>
<li><b>N-1</b> lines follow. Each of these lines contains three space-separated integers <b>u</b>, <b>v</b> and <b>w</b> denoting a channel with ping <b>2w</b> nanoseconds connecting servers <b>u</b> and <b>v</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the minimal sum of times it takes each citizen to receive Chefcoin if the two cryptoexchanges are placed optimally.</p>

<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>N</b> ≤ 50000</li>
<li>1 ≤ <b>c<sub>i</sub></b> ≤ 50000 for each valid <b>i</b></li>
<li>1 ≤ <b>w</b> ≤ 50000</li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li>the channels describe a tree</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 250000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

2
4
10 25 15 40
1 2 1
2 3 3
1 4 4
7
24786 24640 17641 19735 8667 15790 5948
3 7 17108
7 6 4875
7 1 9317
1 2 8597
3 4 28200
1 5 22026

<b>Output:</b>

55
1148402043
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Chef can create cryptoexchanges on servers 2 and 4. Citizens on these servers receive Chefcoins immediately. The total time for Chefland's remaining citizens is the time it takes 15 citizens to move from server 3 to server 2 (3 · 15 = 45) plus the time it takes 10 citizens to move from server 1 to server 2 (1 · 10 = 10), so the optimal total time is 55.</p>
