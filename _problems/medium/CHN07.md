---
{"category_name":"medium","problem_code":"CHN07","problem_name":"Malvika and Animesh play Red-Blue cards Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"15-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"game"},"editorial_url":"http://discuss.codechef.com/problems/CHN07","time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>After 2 hours of Mathematics and chill, Malvika and Animesh got bored of solving problems and decided to play a game. They have <b>n</b> cards with them, each of which is red on one side and blue on the other. They initially put them in a row, from left to right. They then takes turns, with Malvika going first. 
</p>

<p>
In a single turn, the player should choose a card which has its red face up. The player also chooses zero or more consecutive blue faced cards, with the sequence starting immediately on the right of the chosen red card. All the chosen cards are then flipped. That is, the red faced card will now be blue. The zero or more blue faced cards will now be red. Then the turn ends, and it's the other player's turn.
</p>

<p>
You will be given the initial arrangement of the <b>n</b> cards as a string of R's and B's, which imply red facing-up and blue facing-up, respectively. They will be given in order, from left to right.
</P>

<p>
The player who is not able to make any move in his/her turn loses. Find out the winner, assuming that both Malvika and Animesh play optimally.
</p>


<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>The only line of each test case contains a string of 'R's and 'B's.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line. It should be "Malvika" (without quotes) if Malvika is the winner, and "Animesh" (without quotes) if Animesh is the winner.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T</b> &le; <b>100</sup></b></li>
<li>1 &le; <b>n</b> &le; <b>500</sup></b>, where <b>n</b> refers to the length of each string.</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
R
BB

<b>Output:</b>
Malvika
Animesh
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, Malvika will flip the red faced card in the first move, so it will now be blue faced. Now Animesh can't make any move, so he will lose. Hence Malvika is the winner.
</p>

<p><b>In the second example</b>, Malvika can not make any move in the first turn itself, and therefore she loses. Hence Animesh is the winner.
</p>
