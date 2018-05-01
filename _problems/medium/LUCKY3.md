---
languages_supported:
    - NA
title: LUCKY3
category: NA
old_version: true
problem_code: LUCKY3
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky and **5**, **17**, **467** are not.

 Chef also use term **"lucky sum"**. Lucky sum is an operation between two integers. Let the first integer is **A**, **A\[i\]** equals **i-th** digit of **A** (0-base numeration, from right to left) and the second integer is **B**, **B\[i\]** equals to **i-th** digit of **B**. Then the lucky sum of **A** and **B** is equal to **C**, **C\[i\] = max(A\[i\], B\[i\])**. If **i** is greater than or equal to size of integer, the **i-th** digit is equal to 0. For example, the lucky sum of **47** and **729** equals **749**, the lucky sum of **74** and **92** and **477** equals **497**.

 Chef has an array **W** of integers. Find a number of non-empty subsequences of **W** such that the lucky sum of integers in that subsequences is a lucky number.

 Subsequence of **W** is created by erasing some number (probably zero) elements from **W**.

### Input

First line contains one number **T**, number of test cases. Each test is formed as follows: first line contains integer **n** - number of integers in **W**, next line contains **n** integers - array **W** for corresponding test.

### Output

For each **T** test cases print one integer - result for the corresponding test.

### Constraints

1 <= **T** <= 10

1 <= **n** <= 50

1 <= **Wi** < 10^9

### Example

<pre>
<b>Input:</b>
2
2
4 7
3
43 87 44

<b>Output:</b>
3
2
</pre>