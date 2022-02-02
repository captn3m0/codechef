---
{"category_name":"easy","problem_code":"ANKGAME","problem_name":"Ankit, Srijan and a game of stone piles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":"rubanenko","date_added":"31-03-2015","tags":{"0":"code_master01","1":"combinatorics","2":"cook59","3":"counting","4":"easy","5":"game"},"editorial_url":"http://discuss.codechef.com/problems/ANKGAME","time":{"view_start_date":1434911400,"submit_start_date":1434911400,"visible_start_date":1434911400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/mandarin/ANKGAME.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/russian/ANKGAME.pdf">Russian</a> as well.</h3>


<p>There are <b>N</b> piles of stones, where i-th pile has <b>A</b><sub>i</sub> stones. A game is played on these piles, in order from pile <b>1</b> to <b>N</b>. When the game is on the i-th pile, a player can remove any non-zero number of stones from this pile in a single move. If the current pile becomes empty, the game moves on to the next pile. The player who is unable to make a move loses.</p>

<p>Srijan and Ankit are going to play this game. Ankit, being younger, always gets to start the game. However, Srijan, being clever, sneaks into the game arena early and permutes the order of piles. Then, the game is played on this new order of piles. Your task is to find out the number of orders in which the piles can be arranged so that Ankit wins the game. Assume that both the players play optimally. Since the answer can be very large, output it modulo <b>10<sup>9</sup> + 7</b>.</p>

<p>Note that two orders are considered different if their contents are different. Formally, two orders A and B are different if there exists an index <b>k (1 ≤ k ≤ N</b>) such that <b>A<sub>k</sub> != B<sub>k</sub></b>.</p>

<h3>Input</h3>
<ul>
<li>The first line contains an integer <b>T</b>, denoting the number of test cases to follow. Each of the test cases contains exactly two lines.</li>
<li>The first line for each test case contains an integer <b>N</b>, denoting the number of piles, and the next line contains <b>N</b> space-separated integers, denoting the number of stones in the piles.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the answer for that test case.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5<sup></li>
<li>1 ≤ <b>A</b><sub>i</sub> ≤ 10<sup>10<sup></li>
<li>The sum of values of <b>N</b> over all test cases does not exceed 10<sup>6</sup>.</li>
</ul>

<h3>Example:</h3>
<p><b>Sample input:</b>  
</p>
<pre>
2
3
1 1 2
2
2 3

</pre>
<p><b>Sample Output:</b>  
</p>
<pre>
2
2

</pre>
<p><b>Explanation:</b>  
</p>

<p><b>Case 1:</b><br />
The following different orders are possible:  
</p>

<p>[1, 1, 2]<br />
Ankit removes the only stone in the first pile.<br />
Srijan removes the only stone in the second pile.<br />
Ankit removes both the stones in the second pile.<br />
Ankit wins.  
</p>

<p>[1, 2, 1]<br />
Ankit removes the only stone in the first pile.<br />
Srijan takes one stone from then the second pile. Ankit removes the remaining one stone from the second pile.<br />
Srijan removes the only stone in the third pile.<br />
Srijan wins.</p>

<p>[2, 1, 1]<br />
Ankit removes both the stones in the first pile.<br />
Srijan removes the only stone in the second pile.<br />
Ankit removes the only stone in the second pile.<br />
Ankit wins.</p>
<p>Thus, Ankit wins on 2 different orders.</p>
