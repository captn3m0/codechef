---
languages_supported:
    - NA
title: DPOWPERM
category: NA
old_version: true
problem_code: DPOWPERM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Let **N** be a positive integer and **S = {1, 2, 3, ..., N}**. For a given positive integer **d** the function **f : S --&gt; S** is called **d**-power permutation if there exists a bijection **g : S --&gt; S** such that **g ( g ( ... g ( x ) ... ) ) = f(x)** for each **x** from **S** , where **g** is repeated exactly **d** times.

You are given some bijection **f : S --&gt; S** and a positive integer **D**. You need to find the number of those **d &lt;= D** such that **f** is **d**-power permutation.

### Input

 The first line contains a single positive integer **T &lt;= 10**, the number of test cases. **T** test cases follow. The first line of each test case contains two positive integers **N** and **D**, where **N &lt;= 700** and **D &lt;= 1018**. The second line contains **N** space-separated integers. **i**th number in the second line is the value **f(i)**. It is guaranteed that **f** is bijection from **S** onto **S**.

### Output

 For each test case, output a single line containing the answer for the corresponding test case.

### Example

<pre>
<b>Input:</b>
2
3 6
1 2 3
5 10
2 1 4 5 3

<b>Output:</b>
6
3
</pre>
### Explanation

In the second case the appropriate values of **d** is 1, 5 and 7.
