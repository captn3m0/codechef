---
languages_supported:
    - NA
title: LASTDIG
category: NA
old_version: true
problem_code: LASTDIG
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

For a non-negative integer N, define S(N) as the sum of the odd digits of N plus twice the sum of the even digits of N. For example, S(5)=5, S(456)=2\*4+5+2\*6=25, and S(314159)=3+1+2\*4+1+5+9=27. Define D(N) as the last digit of S(N). So D(5)=5, D(456)=5, and D(314159)=7. Given 2 non-negative integers A and B, compute the sum of D(N) over all N between A and B, inclusive.

### Input

Input will begin with an integer T, the number of test cases. T lines follow, each containing 2 integers A and B.

### Output

For each test case, output a single integer indicating the corresponding sum.

### Sample Input

```
3
1 8
28 138
314159 314159

```
### Sample Output

```
36
495
7

```
### Constraints

- T ≤ 1000
- 0 ≤ A ≤ B ≤ 400,000,000