---
{"languages_supported":{"0":"NA"},"title":"CIELQUIZ","category":"NA","old_version":true,"problem_code":"CIELQUIZ","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Chef Ciel is going to organize a quiz game in her restaurant.
Ciel has <strong>N</strong> problems, and she will choose <strong>K</strong> problems for the quiz game.
Every participant has to answer all <strong>K</strong> problems.
</p>

<p>
Ciel thinks that if a participant solves all <strong>K</strong> problems correctly, the participant will get bored,
and if a participant solves less problems correctly, the participant will feel sad.
Therefore, Ciel decides to choose <strong>K</strong> problems maximizing the probability that participants will solve exactly <strong>K</strong>-1 problems correctly.
</p>

<p>
The <strong>N</strong> problems are numbered from 1 to <strong>N</strong>.
Ciel assumes, the problem <strong>i</strong> will be solved correctly with probability <strong>P<sub>i</sub></strong>% for each <strong>i</strong>, and these are statistically independent of each other.
</p>

<p>
Can you tell what problems are chosen by Ciel?
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
The first line for each test case has 2 integers <strong>N</strong> and <strong>K</strong>.
The next line has <strong>N</strong> integers <strong>P</strong><sub>1</sub>, <strong>P</strong><sub>2</sub>, ..., <strong>P<sub>N</sub></strong>.
</p>

<h3>Output</h3>
<p>
For each test case, print <strong>K</strong> distinct integers denoting the numbers of chosen problems.
If there are multiple sets of problems maximizing the probability, then anyone will do.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 20<br />
1 ≤ <strong>K</strong> ≤ <strong>N</strong> ≤ 36<br />
0 ≤ <strong>P<sub>i</sub></strong> ≤ 100<br />
</p>

<h3>Sample Input</h3>
<pre>4
3 2
70 80 90
9 1
10 20 30 40 50 60 70 80 90
1 1
10
10 5
90 90 90 90 90 90 90 90 90 90</pre>

<h3>Sample Output</h3>
<pre>1 2
1
1
5 8 1 4 9</pre>

<h3>Output details</h3>
<p>
In the first case, all patterns choosing 2 problems are:<br />
  If problems 1 and 2 are chosen, the probability is 0.7 * (1 - 0.8) + (1 - 0.7) * 0.8 = 0.14 + 0.24 = 0.38<br />
  If problems 1 and 3 are chosen, the probability is 0.7 * (1 - 0.9) + (1 - 0.7) * 0.9 = 0.07 + 0.27 = 0.34<br />
  If problems 2 and 3 are chosen, the probability is 0.8 * (1 - 0.9) + (1 - 0.8) * 0.9 = 0.08 + 0.18 = 0.26<br />
Therefore, Ciel will choose problems 1 and 2.<br />
</p>
<p>
In the fourth case, there are multiple solutions. Any 5 distinct intergers from 1 to 10 will be accepted.
</p>    