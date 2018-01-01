---
languages_supported:
    - NA
title: EXPCOMM
category: NA
old_version: true
problem_code: EXPCOMM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

For a given prime number **p** find the number of all pairs **(m, n)** of positive integers such that **1 <= m, n <= p\*(p-1)** and **p** divides **nm - mn**. Output the result modulo **1000000007**.

### Input

 The first line contains a single positive integer **T <= 100**, the number of test cases. **T** test cases follow. The only line of each test case contains a prime number **p** , where **2 <= p <= 1012**.

### Output

 For each test case, output a single line containing the answer for the corresponding test case.

### Example

<pre>
<b>Input:</b>
2
2
3

<b>Output:</b>
2
14


</pre>### Explanation
In the first test required pairs are (1, 1) and (2, 2). 

In the second test case required pairs are (1, 1), (1, 4), (2, 2), (2, 4), (3, 3), (3, 6), (4, 1), (4, 2), (4, 4), (4, 5), (5, 4), (5, 5), (6, 3) and (6, 6).
