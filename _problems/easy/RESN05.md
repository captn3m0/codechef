---
languages_supported:
    - NA
title: RESN05
category: NA
old_version: true
problem_code: RESN05
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Let G(S) denote the sum of the elements of set S and F(n) be the sum of G(s) for all subsets of the set consisting of the first n natural numbers. For example, F(3) = (1) + (2) + (3) + (1 + 2) + (1 + 3) + (2 + 3) + (1 + 2 + 3) = 24. Given n, calculate F(1) + F(2) + ... + F(n).

### Input

The first line contains the number of test cases T (<= 1000). Each of the next T lines contains an integer n. (1 <= n <= 1000000000).

### Output

Output T lines, one corresponding to each test case. Since the answers can get very big, output the answer modulo 8388608

### Example

```

<b>Input:</b>
3
1
2
3
<b>Output:</b>
1
7
31

```