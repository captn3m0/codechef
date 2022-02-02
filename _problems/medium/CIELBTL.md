---
{"languages_supported":{"0":"NA"},"title":"CIELBTL","category":"NA","old_version":true,"problem_code":"CIELBTL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef Ciel bought a new video game for guests to kill time until their orders arrive. In this game, you are a fighter in a battle arena, and you will fight against a fighter called <i>Shindannin</i>. In Japan, many people believe that the next day will be a happy day if they beat Shindannin, otherwise the next day will be an unhappy day.</p>
<p>Let's start by defintions of some variables. <strong>V<sub>A</sub></strong> and <strong>V<sub>B</sub></strong> denote your initial HP (health points) and Shindannin's initial HP respectively. <strong>S<sub>A</sub></strong> and <strong>S<sub>B</sub></strong> denote your strength and Shindannin's strength respectively. <strong>M<sub>A</sub></strong> denotes your initial MP (magical points), which is used when you use a skill. Note that only you can use a skill in the battle.</p>
<p>In each turn, the battle will go on as follows:</p>
<ul>
<li>Firstly, you can use a skill as many times as you like as long as your MP is positive. If you use a skill, your HP and Shindannin's HP are decreased by half and your MP is decreased by 1. If HP becomes a non-integer, HP will be rounded up to the nearest integer. To be more precise, new HP will be ceil(old HP / 2).</li>
<li>Next, an integer <strong>s</strong> is chosen in [0, <strong>S<sub>A</sub></strong>] uniformly randomly, and an integer <strong>t</strong> is chosen in [0, <strong>S<sub>B</sub></strong>] uniformly randomly.</li>
<li>Then, your HP is decresed by <strong>t</strong>, and Shindannin's HP is decreased by <strong>s</strong> simultaneously.</li>
<li>If both fighter have positive HP, next turn will occur.</li>
</ul>
<p>When a fighter's HP is down to zero or a negative integer, this fighter loses. If both fighters' HP is down to zero or negative integer simultaneously, you will fight against Shindannin again with the same conditions, that is, HP and MP are recovered completely before next battle. There is no limit on the number of rematches. If you fight optimally, what is your winning percentage?</p>
<h3>Input</h3>
<p>An input contains 5 integers <strong>V<sub>A</sub></strong>, <strong>V<sub>B</sub></strong>,<strong><sub> </sub></strong><strong>S<sub>A</sub></strong>, <strong>S<sub>B</sub></strong> and <strong>M<sub>A</sub></strong>.</p>
<h3>Output</h3>
<p>Print the maximum winning percentage you can achieve. This value must have an absolute error no more than 10<sup>-6</sup>.</p>
<h3>Constraints</h3>
<p>1 ≤ <strong>V<sub>A</sub></strong>, <strong>V<sub>B</sub></strong> ≤ 100<br /> 1 ≤ <strong>S<sub>A</sub></strong>, <strong>S<sub>B</sub></strong> ≤ 100<br /> 0 ≤ <strong>M<sub>A</sub></strong> ≤ 5</p>
<h3>Sample Input 1</h3>
<pre>5 5 3 3 0</pre>
<h3>Sample Output 1</h3>
<pre>0.5</pre>
<h3>Sample Input 2</h3>
<pre>5 5 3 3 1</pre>
<h3>Sample Output 2</h3>
<pre>0.58886609097948</pre>
<h3>Sample Input 3</h3>
<pre>58 85 8 13 0</pre>
<h3>Sample Output 3</h3>
<pre>0.00011046536069</pre>
<p></p>    