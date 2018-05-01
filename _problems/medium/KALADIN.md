---
category_name: medium
problem_code: KALADIN
problem_name: 'Proprietary Probabilistic Problem'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: grebnesieh
problem_tester: null
date_added: 15-12-2017
tags:
    - grebnesieh
    - gwr17rol
    - medium
    - probability
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525198954
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a bag containing **N** balls, numbered from 1 to **N**, each having a given non-zero integral volume.

The likelihood of a ball being taken out of the bag is directly proportional to its volume. More specifically, the probability of a ball being taken out of the bag is equal to it's volume divided by the sum of volumes of all the balls in the bag at that point.

You are bored and decide to play a game. It has **N** Rounds. In the i-th Round, you want to find the ball numbered i. To do so, you take out balls one by one, **without replacement**, till you take out the ball numbered i. Then the Round ends, and you place all the balls back into the bag and proceed with the next Round.

You need to find, for each Round, what is the expected number of balls you would need to remove.

Please note that during a single Round, you do not replace any balls you remove. However, every Round starts from scratch with all the balls put in.

### Input

- The first line of each input contains a single integer **N**, the number of balls in the bag.
- The second line contains **N** integers, the ith integer representing the volume of the ith ball.

### Output

Print **N** space separated values on a single line where the ith value is the expected number of balls you remove in Round i. Your answer will be considered correct if the absolute error is less than or equal to 10-6 for each ball.

### Constraints

- 1 ≤ **N** ≤ 103
- 1 ≤ ball volumes ≤ 109

### Example

<pre><b>Input:</b>
2
3 5

<b>Output:</b>
1.625000 1.375000
</pre>### Explanation

Finding expected number of balls removed in Round 1: The probability of extracting the first ball in the first try is 3/8. Therefore, we will either extract 1 ball with probability 3/8 or two balls with probability 5/8. Expected number of balls extracted therefore is 3/8 + 2 \* (5/8) = 1.625.

Similarly for the second ball, 5/8 + 2 \* (3/8) = 1.375
