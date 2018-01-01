---
languages_supported:
    - NA
title: SHORT2
category: NA
old_version: true
problem_code: SHORT2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given a prime number **p**, find the number of pairs of integers (**a**, **b**) such that **p** < **a**, **p** < **b** and **ab** is divisible by **(a-p)(b-p)**.

### Input

The first line contains the number of test cases **t** (1 ≤ **t** ≤ 5). Then **t** test cases follow, each test case consists of a line containing one prime integer **p** (1 < **p** < 1012).

### Output

For each test case output one line containing the required number. It's guaranteed that this number won't exceed 263-1.

### Example

<pre>
<b>Input:</b>
3
2
23
59

<b>Output:</b>
14
80
116

<b>Explanation:</b>

</pre>In the first test case the sought pairs are (3,3), (3,4), (3,5), (3,8), (4,3), (4,4), (4,6), (5,3), (5,12), (6,4), (6,8), (8,3), (8,6) and (12,5).