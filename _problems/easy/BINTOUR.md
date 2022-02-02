---
{"category_name":"easy","problem_code":"BINTOUR","problem_name":"Binary Tournament","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"21-01-2014","tags":{"0":"combinatorics","1":"easy","2":"kostya_by","3":"march14"},"editorial_url":"http://discuss.codechef.com/problems/BINTOUR","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/BINTOUR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/BINTOUR.pdf">Russian</a>.</h3>
<p>Knights' tournaments were quite popular in the Middle Ages. A lot of boys were dreaming of becoming a knight, while a lot of girls were dreaming of marrying a knight on a white horse.</p>
<p>
In this problem we consider one of these tournaments.
</p>
<p>
Let's us call a tournament <i>binary</i>, if it runs according to the scheme described below:
</p>
<p><ul type="square">
<li>Exactly <b>N</b> knights take part in the tournament, <b>N</b>=2<b><sup>K</sup></b> for some integer <b>K</b> > 0.
</li><li>Each knight has a unique skill called <i>strength</i>, described as an integer from the interval [1, <b>N</b>].
</li><li>Initially, all the knights are standing in a line, waiting for a battle. Since all their strengths are unique, each initial configuration can be described as a permutation of numbers from 1 to <b>N</b>.
</li><li>There are exactly <b>K</b> rounds in the tournament, 2<b><sup>K - i + 1</sup></b> knights take part in the <b>i</b>'th round. The <b>K</b>'th round is called <i>the final</i>.
</li><li>The <b>i</b>'th round runs in the following way: for each positive integer <b>j</b> ≤ 2<b><sup>K - i</sup></b> happens a battle between a knight on the <b>2∙j</b>'th position and a knight on the <b>2∙j+1</b>'th position. The strongest of two continues his tournament, taking the <b>j</b>'th position on the next round, while the weakest of two is forced to leave.
</li><li>The only knight, who has won <b>K</b> rounds, is the winner. The only knight, who has won <b>K - 1</b> rounds, but lost the final, is the runner-up.
	</li></ul>
</p>
<p>
As you can see from the scheme, the winner is always the same, an initial configuration doesn't change anything. So, your task is to determine chances of each knight to appear in the final.
</p>
<p>
Formally, for each knight you need to count the number of initial configurations, which will lead him to the final. Since the number can be extremly huge, you are asked to do all the calculations under modulo 10<sup>9</sup> + 9.
</p>
<h3>Input</h3>

<p>The first line contains the only integer <b>K</b>, denoting the number of rounds of the tournament.</p>
<p> </p>
<h3>Output</h3>
<p>Output should consist of <b>2<sup>K</sup></b> lines. The <b>i</b>'th line should contain the number of initial configurations, which lead the participant with strength equals to <b>i</b> to the final.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>K</b> &lt; 20</p>
<p> </p>
<h3>Examples</h3>
<pre><b>Input:</b>
1

<b>Output:</b>
2
2
</pre>
<pre><b>Input:</b>
2

<b>Output:</b>
0
8
16
24
</pre><p> </p>
<h3>Explanation</h3>
<p>
In the first example we have <b>N</b>=2 knights. Let's consider each initial configuration that could appear and simulate the tournament.
</p>
<p>
(1, 2) -> (2)
</p>
<p>
(2, 1) -> (2)
</p>
<p>
In the second example we have <b>N</b>=4 knights. Let's consider some initial configurations that could appear and simulate the tournament.
</p>
<p>
(1, 2, 3, 4) -> (2, 4) -> (4)
</p>
<p>
(3, 2, 4, 1) -> (3, 4) -> (4)
</p>
<p>
(4, 1, 3, 2) -> (4, 3) -> (4)
</p>
