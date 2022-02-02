---
languages_supported:
    - NA
title: COUNTPAL
category: NA
old_version: true
problem_code: COUNTPAL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Each palindrome can be always created from the other palindromes, if a single character is also a palindrome. For example, the string "bobseesanna" can be created by some ways:
 \* bobseesanna = bob + sees + anna
 \* bobseesanna = bob + s + ee + s + anna
 \* bobseesanna = b + o + b + sees + a + n + n + a
 ...
 We want to take the value of function CountPal(s) which is the number of different ways to use the palindromes to create the string s by the above method.

### Input

The string s

### Output

The value of function CountPal(s), taking the modulo of 1 000 000 007 (109+7)

### Limitations

0 &lt; |s| &lt;= 1000

### Example

<pre><b>Input:</b>
bobseesanna

<b>Output:</b>
18
</pre>