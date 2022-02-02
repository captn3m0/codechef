---
{"category_name":"easy","problem_code":"TOURNAM","problem_name":"Tennis Tournament","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"gamabunta","date_added":"13-10-2012","tags":{"0":"cook27","1":"dynamic","2":"gennady","3":"probability"},"time":{"view_start_date":1350845119,"submit_start_date":1350845119,"visible_start_date":1350845041,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Caroline is a huge tennis fan. She loves watching tennis and especially rooting for players of Strangeland, her native country.</p>
<p style="text-align:justify">Generally, tennis tournaments are played using the Olympic system. Let's consider such a tournament with <b>N</b> = 2<sup><b>K</b></sup> players. This tournament is held in <b>K</b> rounds. In each round, every player plays exactly one match against some other player. The loser of each match is eliminated, and the winner advances to the next round. After the <b>K<sup>th</sup></b> round, there's only one non-eliminated player who is declared the <b>champion</b> of the tournament.</p>
<p style="text-align:justify">An example of such a tournament for <b>N</b> = 8 can be seen in the picture below.</p>
<p><img src="http://www.codechef.com/download/unt.png" width="100%" /></p>
<p style="text-align:justify">We'll number the players from <b>1 to N</b> from <b>top to bottom</b> in the tournament draw for a given <b>N</b>. In the first round players 1 and 2, 3 and 4, ..., <b>N</b>-1 and <b>N</b> play a match against each other. In the second round the winners of the match between players 1 and 2 and the match between players 3 and 4 play together, the winners of the match between players 5 and 6 and the match between players 7 and 8 play together, ..., the winners of the match between players <b>N</b>-3 and <b>N</b>-2 and the match between players <b>N</b>-1 and <b>N</b> play together. The matches are played in the same way till the <b>K<sup>th</sup></b> (final) round.</p>
<p style="text-align:justify">A big tennis tournament is going to start soon. <b>M</b> Strangelandian players are taking part in this tournament, and their positions in the tournament draw are known in advance. Caroline wants to know the probability that a Strangelandian player will be the champion of this tournament. She collected the information from the previous ten years of tennis history and knows that a Strangelandian player wins a match over a non-Strangelandian player with probability <b>P</b> percents. All non-Strangelandian players look the same to Caroline, so she considers the chance of winning a match between two non-Strangelandian players to be 50 percents for both players. The same applies to all Strangelandian players. For Caroline, all of them are equally strong, and she thinks that both of them can win a Strangelandian derby with 50-percent probability.</p>
<p style="text-align:justify">Help Caroline write a program which calculates the probability that a Strangelandian player will win the tournament.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer <b>T</b>, the number of test cases (no more than 20). Each test case is described by exactly two lines. The first of these lines contains three space-separated integers <b>N</b>, <b>M</b> and <b>P</b> (2 ≤ <b>N</b> ≤ 2<sup>30</sup>, <b>N</b> = 2<sup><b>K</b></sup> for some integer <b>K</b>, 1 ≤ <b>M</b> ≤ 10000, <b>M</b> ≤ <b>N</b>, 0 ≤ <b>P</b> ≤ 100) -- the total number of players in the tournament, the number of competing Strangelandian players and the probability that a Strangelandian player beats a non-Strangelandian player in percents, respectively. The second of these lines contains <b>M</b> space-separated distinct integers <b>A<sub>i</sub></b> (1 ≤ <b>A<sub>i</sub></b> ≤ <b>N</b>), the 1-based positions of Strangelandian players in the tournament draw.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case output exactly one line containing the required probability in percents. Your answer will be considered correct if its absolute error doesn't exceed 10<sup>-6</sup>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 1 42
1
4 2 66
1 2
4 2 66
1 3
8 3 71
3 5 2

<b>Output:</b>
42.00000000000000
66.00000000000000
73.18080000000000
75.47784648840000
</pre>