---
languages_supported:
    - NA
title: DECSTR
category: NA
old_version: true
problem_code: DECSTR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

### Statement

Consider a string of length N consisting only of lowercase alphabets a-z. Let s\[i\] be the character at the i-th position in the string (1-based). The string is a K-string if there are EXACTLY K values of i (1 &lt;= i &lt; N) such that s\[i+1\]&lt;s\[i\] (we assume 'a'&lt;'b'&lt;'c'&lt;...&lt;'z'). Given K, find the shortest K-string. If there are multiple solutions, find the lexicographically earliest K-string.

### Input

The first line contains the number of test cases T (1&lt;= T &lt;= 100). Each test case contains an integer K (≤ 100).

### Output

Output T lines, one for each test case, containing the required string. Use only lower-case letters a-z.

### Sample Input

<pre>2
1
2
</pre>
### Sample Output

<pre>ba
cba
</pre>