---
languages_supported:
    - NA
title: WCOUNT
category: NA
old_version: true
problem_code: WCOUNT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef has decided to retire and settle near a peaceful beach. He had always been interested in literature &amp; linguistics. Now when he has leisure time, he plans to read a lot of novels and understand structure of languages. Today he has decided to learn a difficult language called Smeagolese. Smeagolese is an exotic language whose alphabet is lowercase and uppercase roman letters. Also every word on this alphabet is a meaningful word in Smeagolese. Chef, we all know is a fierce learner - he has given himself a tough exercise. He has taken a word and wants to determine all possible anagrams of the word which mean something in Smeagolese. Can you help him ?

### Input

Input begins with a single integer T, denoting the number of test cases. After that T lines follow each containing a single string S - the word chef has chosen. You can assume that 1 &lt;= T &lt;= 500 and 1 &lt;= |S| &lt;= 500. You can also assume that no character repeats more than 10 times in the string.

### Output

Output one line per test case - the number of different words that are anagrams of the word that chef has chosen. As answer can get huge, print it modulo 10^9 + 7

### Example

<pre><b>Input:</b>
4
ab
aa
aA
AAbaz

<b>Output:</b>
2
1
2
60
</pre>
**Description:** In first case "ab" &amp; "ba" are two different words. In third case, note that A &amp; a are different alphabets and hence "Aa" &amp; "aA" are different words.
