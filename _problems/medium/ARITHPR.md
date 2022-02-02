---
languages_supported:
    - NA
title: ARITHPR
category: NA
old_version: true
problem_code: ARITHPR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are given positive integers **L, R, k** such that **k &lt;= R - L**. Consider all strictly increasing arithmetic progressions with difference not less than **k** composed of numbers from the set **{L, L+1, ..., R}**. At first you need to find the length of the longest such progression. Easy as pie, right? Now consider all such longest progressions and write them down in lexicographical order. You need to find first two terms of the **n**th such progression. (Note that because of the condition **k &lt;= R - L** the length of the longest progression is at least two.)

**Remark.** We say that sequence **a = (a\[0\], a\[1\], ..., a\[n\])** is lexicographically smaller than **b = (b\[0\], b\[1\], ..., b\[n\])** if there exists some **i** such that **0 &lt;= i &lt;= n**, **a\[j\] = b\[j\]** for **0 &lt;= j &lt; i** and **a\[i\] &lt; b\[i\]**.

### Input

 The first line contains a single integer **T &lt;= 10000**, the number of test cases. **T** test cases follow. The only line of each test case contains four positive integers **L, R, k** and **n** where **R &lt;= 109, k &lt;= R - L** and  **n &lt;= 1018**.

### Output

 For each test case, output a single line containing the length of the longest strictly increasing arithmetic progressions with difference not less than **k** composed of numbers from the set **{L, L+1, ..., R}** followed by the first two terms of the **n**th such progression in lexicographical order. If the total number of such progressions is less than **n** then simply output two zeros instead of the first two terms of the progression.

### Example

<pre>
<b>Input:</b>
3
2 6 2 1
2 6 2 2
1 32 8 12

<b>Output:</b>
3 2 4
3 0 0
4 5 14
</pre>