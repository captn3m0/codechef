---
{"category_name":"medium","problem_code":"KALADIN","problem_name":"Proprietary Probabilistic Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"grebnesieh","problem_tester":null,"date_added":"15-12-2017","tags":{"0":"grebnesieh","1":"gwr17rol","2":"medium","3":"probability"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a bag containing <b>N</b> balls, numbered from 1 to <b>N</b>, each having a given non-zero integral volume.</p>

<p>The likelihood of a ball being taken out of the bag is directly proportional to its volume. More specifically, the probability of a ball being taken out of the bag is equal to it's volume divided by the sum of volumes of all the balls in the bag at that point.</p>

<p>You are bored and decide to play a game. It has <b>N</b> Rounds. In the i-th Round, you want to find the ball numbered i. To do so, you take out balls one by one, <b>without replacement</b>, till you take out the ball numbered i. Then the Round ends, and you place all the balls back into the bag and proceed with the next Round.</p>

<p>You need to find, for each Round, what is the expected number of balls you would need to remove.</p>

<p>Please note that during a single Round, you do not replace any balls you remove. However, every Round starts from scratch with all the balls put in.</p>

<h3>Input</h3>
<ul>
<li>The first line of each input contains a single integer <b>N</b>, the number of balls in the bag.</li>
<li>The second line contains <b>N</b> integers, the i<sup>th</sup> integer representing the volume of the i<sup>th</sup> ball.</li>
</ul>

<h3>Output</h3>
<p>Print <b>N</b> space separated values on a single line where the i<sup>th</sup> value is the expected number of balls you remove in Round i. Your answer will be considered correct if the absolute error is less than or equal to 10<sup>-6</sup> for each ball.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>3</sup></li>
<li>1 ≤ ball volumes ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 5

<b>Output:</b>
1.625000 1.375000
</pre>

<h3>Explanation</h3>
<p>Finding expected number of balls removed in Round 1: The probability of extracting the first ball in the first try is 3/8. Therefore, we will either extract 1 ball with probability 3/8 or two balls with probability 5/8. Expected number of balls extracted therefore is 3/8 + 2 * (5/8) = 1.625.</p> 

<p>Similarly for the second ball, 5/8 + 2 * (3/8) = 1.375</p>