---
languages_supported:
    - NA
title: DIVNODIV
category: NA
old_version: true
problem_code: DIVNODIV
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

For a given positive integer **N** find the number of all positive integers **X** such that **N** divides **X** and the number of all positive divisors of **X** (including **1** and **X**) is equal to **N**. If there exist infinitely many such numbers print **-1**.

### Input

 The first line contains a single positive integer **T <= 100**, the number of test cases. **T** test cases follow. The only line of each test case contains a positive integer **N** , where **N <= 10^18**.

### Output

 For each test case, output a single line containing the answer for the corresponding test case.

### Example

<pre>
<b>Input:</b>
3
6
113
144

<b>Output:</b>
2
1
-1
</pre>
### Explanation

In the first test case only numbers 12 and 18 have 6 divisors and are divisible by 6. 

In the second test case the only number is 113^112. 

In the third test case there are infinitely many of them.
