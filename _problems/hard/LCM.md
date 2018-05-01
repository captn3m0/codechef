---
languages_supported:
    - NA
title: LCM
category: NA
old_version: true
problem_code: LCM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given A and B, compute the sum of lcm(a, b) over all pairs of positive integers a and b such that:

(1) a<=A and b<=B. 
(2) There is no integer n>1 such that n2 divides both a and b.

Give your answer modulo 230.

### Input

The first line contains the number of test cases, t (about 200). Each of the next t lines contains two space-separated integers A and B (1<=A, B<=4000000).

### Output

Print the answer to each test case on a separate line.

### Example

<pre>
<b>Input:</b>

4
2 4
3 3
6 5
8 3

<b>Output:</b>

24
28
233
178
</pre>