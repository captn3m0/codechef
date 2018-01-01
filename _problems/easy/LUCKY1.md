---
languages_supported:
    - NA
title: LUCKY1
category: NA
old_version: true
problem_code: LUCKY1
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky and **5**, **17**, **467** are not.

 Let **Fd(x)** equals to the number of digits **d** in decimal representation of the positive integer **x**. Chef interests only in functions **F4(x)** and **F7(x)**. For the given positive integer **N** he wants to know the total number of different pairs **(L; R)** such that  **F4(L) + F4(L + 1) + ... + F4(R)** equals to  **F7(L) + F7(L + 1) + ... + F7(R)** and **1 ≤ L ≤ R ≤ N**.

### Input

 The first line contains a single positive integer **T**, the number of test cases. **T** test cases follow. The only line of each test case contains a positive integer **N** .

### Output

 For each test case, output a single line containing the answer for the corresponding test case.

### Constraints

1 ≤ **T** ≤ 100000

1 ≤ **N** ≤ 100000

### Example

<pre>
<b>Input:</b>
3
3
10
100

<b>Output:</b>
6
31
1266

</pre>