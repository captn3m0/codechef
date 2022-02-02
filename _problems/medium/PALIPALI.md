---
languages_supported:
    - NA
title: PALIPALI
category: NA
old_version: true
problem_code: PALIPALI
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A string is called beautiful if it has the form **AArAAr** where **A** is some non-empty string and **Ar** is the reversed **A**. You are given a string **S** composed only of lowercase letters of the English alphabet. Find the number of its beautiful substrings. Equal substrings in different positions are considered different. For example, the string **aaaaa** has **2** different substrings because we have beautiful substring **aaaa** in two different positions.

### Input

 The first line contains a single integer **T &lt;= 10**, the number of test cases. **T** test cases follow. The only line of each test case contains a non-empty string composed only of lowercase letters of the English alphabet. The length of the string is not greater than **100000**.

### Output

 For each test case, output a single line containing the number of beautiful substrings of the corresponding string.

### Example

<pre>
<b>Input:</b>
6
aaaa
aaaaa
abbaabba
abbaabb
abaaba
xxyyxxxxyyxx

<b>Output:</b>
1
2
1
0
0
2
</pre>