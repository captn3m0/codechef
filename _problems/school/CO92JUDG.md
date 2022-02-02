---
{"category_name":"school","problem_code":"CO92JUDG","problem_name":"Chef Judges a Competition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"15-03-2018","tags":{"0":"cakewalk","1":"cook92","2":"implementation","3":"kefaa"},"editorial_url":"https://discuss.codechef.com/problems/CO92JUDG","time":{"view_start_date":1521397801,"submit_start_date":1521397801,"visible_start_date":1521397801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/CO92JUDG.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/CO92JUDG.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/CO92JUDG.pdf">Vietnamese</a> as well.</h3>

<p>Chef is the judge of a competition. There are two players participating in this competition — Alice and Bob.</p>

<p>The competition consists of <b>N</b> races. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), Alice finished the <b>i</b>-th race in <b>A<sub>i</sub></b> minutes, while Bob finished it in <b>B<sub>i</sub></b> minutes. The player with the smallest sum of finish times wins. If this total time is the same for Alice and for Bob, a draw is declared.</p>

<p>The rules of the competition allow each player to choose a race which will not be counted towards their total time. That is, Alice may choose an index <b>x</b> and her finish time in the race with this index will be considered zero; similarly, Bob may choose an index <b>y</b> and his finish time in the race with this index will be considered zero. Note that <b>x</b> can be different from <b>y</b>; the index chosen by Alice does not affect Bob's total time or vice versa.</p>

<p>Chef, as the judge, needs to announce the result of the competition. He knows that both Alice and Bob play optimally and will always choose the best option. Please help Chef determine the result!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>The third line contains <b>N</b> space-separated integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing the string <tt>"Alice"</tt> if Alice wins, <tt>"Bob"</tt> if Bob wins or <tt>"Draw"</tt> if the result is a draw (without quotes).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 1000 for each valid <b>i</b></li>
<li>1 ≤ <b>B<sub>i</sub></b> ≤ 1000 for each valid <b>i</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

3
5
3 1 3 3 4
1 6 2 5 3
5
1 6 2 5 3
3 1 3 3 4
3
4 1 3
2 2 7

<b>Output:</b>

Alice
Bob
Draw
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Alice will choose the finish time in the last race to be considered zero, which means her sum of finish times is 3 + 1 + 3 + 3 + 0 = 10, while Bob will choose the finish time of his second race to be considered zero, so his total sum of finish times is 1 + 0 + 2 + 5 + 3 = 11. Since Alice's sum is smaller, she is considered the winner.</p>

<p><b>Example case 2:</b> We're dealing with the same situation as in the previous case, but finish times for the players are swapped, so Bob wins this time.</p>

<p><b>Example case 3:</b> Alice will choose the finish time of the first race to be considered zero, which means her total time is 0 + 1 + 3 = 4. Bob will choose the finish time of his last race to be considered zero, which makes his total time 2 + 2 + 0 = 4. The competition is considered <b>a draw</b> because both players have equal sums of finish times.</p>
