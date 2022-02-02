---
{"languages_supported":{"0":"NA"},"title":"CHEF_GAM","category":"NA","old_version":true,"problem_code":"CHEF_GAM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef loves that his cooks involve themselves in group activities. 	This month, Chef has involved his cooks in a rather very curious game. 	It involves all his cooks, standing in a circle. Each cook is given one integer to keep, 	which may be positive or negative (or zero). 	The sum of all the integers, given to the cooks, is positive.</p>
<p>Suppose there are N (N ≥ 3) cooks. Cooks are labeled from 1 to N. 	k's neighbors are (k-1) and (k+1), as they are standing in a circle. 	Note that if k = 1, k-1 wraps around to N; and if k = N, k+1 wraps around to 1. 	Let A[i] represent the integer that is kept by the cook i. 	The game proceeds in turns. In each turn, any one cook may opt to play. 	Now, suppose the cook k wants to play in this turn, the following changes happen, in the given order:</p>
<ul>
<li>A[k-1] = A[k-1] + A[k]</li>
<li>A[k+1] = A[k+1] + A[k]</li>
<li>A[k] = -A[k]</li>
</ul>
<p>The game would end as soon as all the numbers kept by the cooks (each A[i]) is non-negative.</p>
<p>Cooks are very impatient people! 	They want to end the game as quickly as possible! 	Help them determine a sequence in which they must play, such that the number of turns in which 	the game finishes, is as low as possible. 	For the purpose of this problem, you are to find the minimum number of turns in which the game can end!</p>
<p><strong>Input format</strong></p>
<p>The first line contains the number T, the number of test cases. In the following lines, T test cases follow (without any newlines between them.) Each test case consists of exactly two lines. The first line contains the only positive integer N, the number of cooks playing the game. The second line contains N space separated integers, the initial numbers kept by the cooks.</p>
<p><strong>Output format</strong></p>
<p>For each test case, print the minimum number of turns in which the game can end.</p>
<p><strong>Constraints</strong></p>
<p>1 ≤ T ≤ 10<br /> 3 ≤ N ≤ 50000<br /> -200000 ≤ (initial numbers kept by the cooks) ≤ 200000</p>
<p><strong>Sample input</strong></p>
<pre>2
3
1 -1 2
3
4 -2 -1

</pre>
<p><strong>Sample output</strong></p>
<pre>1
6

</pre>
<p><strong>Explanation</strong></p>
<p>In the first case, cook 2 can take the first turn which converts the sequence into 	(0, 1, 1) and end the game.</p>
<p>In the second case, the following sequence of moves are optimal.</p>
<ul>
<li>0. (4, -2, -1) -- initial</li>
<li>1. (3, -3, 1) -- after cook 3 moves</li>
<li>2. (0,  3, -2) -- after cook 2 moves</li>
<li>3. (-2, 1, 2) -- after cook 3 moves</li>
<li>4. (2, -1, 0) -- after cook 1 moves</li>
<li>5. (1, 1, -1) -- after cook 2 moves</li>
<li>6. (0, 0, 1) -- after cook 3 moves</li>
</ul>
<p></p>    