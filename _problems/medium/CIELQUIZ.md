---
languages_supported:
    - NA
title: CIELQUIZ
category: NA
old_version: true
problem_code: CIELQUIZ
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ciel is going to organize a quiz game in her restaurant. Ciel has **N** problems, and she will choose **K** problems for the quiz game. Every participant has to answer all **K** problems.

Ciel thinks that if a participant solves all **K** problems correctly, the participant will get bored, and if a participant solves less problems correctly, the participant will feel sad. Therefore, Ciel decides to choose **K** problems maximizing the probability that participants will solve exactly **K**-1 problems correctly.

The **N** problems are numbered from 1 to **N**. Ciel assumes, the problem **i** will be solved correctly with probability **Pi**% for each **i**, and these are statistically independent of each other.

Can you tell what problems are chosen by Ciel?

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line for each test case has 2 integers **N** and **K**. The next line has **N** integers **P**1, **P**2, ..., **PN**.

### Output

For each test case, print **K** distinct integers denoting the numbers of chosen problems. If there are multiple sets of problems maximizing the probability, then anyone will do.

### Constraints

1 ≤ **T** ≤ 20
1 ≤ **K** ≤ **N** ≤ 36
0 ≤ **Pi** ≤ 100

### Sample Input

<pre>4
3 2
70 80 90
9 1
10 20 30 40 50 60 70 80 90
1 1
10
10 5
90 90 90 90 90 90 90 90 90 90
</pre>### Sample Output

<pre>1 2
1
1
5 8 1 4 9
</pre>### Output details

In the first case, all patterns choosing 2 problems are:
 If problems 1 and 2 are chosen, the probability is 0.7 \* (1 - 0.8) + (1 - 0.7) \* 0.8 = 0.14 + 0.24 = 0.38
 If problems 1 and 3 are chosen, the probability is 0.7 \* (1 - 0.9) + (1 - 0.7) \* 0.9 = 0.07 + 0.27 = 0.34
 If problems 2 and 3 are chosen, the probability is 0.8 \* (1 - 0.9) + (1 - 0.8) \* 0.9 = 0.08 + 0.18 = 0.26
Therefore, Ciel will choose problems 1 and 2.

In the fourth case, there are multiple solutions. Any 5 distinct intergers from 1 to 10 will be accepted.
