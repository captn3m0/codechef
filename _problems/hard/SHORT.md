---
languages_supported:
    - NA
title: SHORT
category: NA
old_version: true
problem_code: SHORT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given **n** and **k**, find the number of pairs of integers (**a**, **b**) such that **n** < **a** < **k**, **n** < **b** < **k** and **ab-n** is divisible by **(a-n)(b-n)**.

### Input

The first line contains the number of test cases **t** (1 ≤ **t** ≤ 5). Then **t** test cases follow, each test case consists of a line containing two integers **n** and **k** (0 ≤ **n** ≤ 100000, **n** < **k** ≤ 1018).

### Output

For each test case output one line containing the required number.

### Example

<pre><b>Input:</b>
2
1 5
2 5

<b>Output:</b>
2
3

<b>Explanation:</b>

</pre>In the first test case, the only sought pairs are (2,2) and (3,3). In the second one, they are (3,3), (3,4) and (4,3).