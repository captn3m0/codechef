---
languages_supported:
    - NA
title: CHEFTEAM
category: NA
old_version: true
problem_code: CHEFTEAM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef has **N** subordinates. In order to complete a very important order he will choose exactly **K** of them. He can't choose less than **K** since it will be not enough to complete the order in time. On the other hand if he chooses more than **K** subordinates he can't control them during the operation. Help him to find the number of ways he can choose the team to complete this very important order.

### Input

 The first line contains a single positive integer **T &lt;= 100**, the number of test cases. **T** test cases follow. The only line of each test case contains two integers **N** and **K**, where **0 &lt;= N, K &lt; 2^64**. It is guaranteed that the answer will be less than **2^64**.

### Output

 For each test case, output a single line containing the number of ways to choose the required team.

### Example

<pre>
<b>Input:</b>
3
2 1
3 3
10 5

<b>Output:</b>
2
1
252
</pre>