---
category_name: medium
problem_code: TASTR
problem_name: 'Level Of Difference'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: anton_lunyov
date_added: 27-01-2013
tags:
    - cook32
    - easy
    - lcp
    - string
    - suffix
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TASTR'
time:
    view_start_date: 1364150220
    submit_start_date: 1364150220
    visible_start_date: 1364150220
    end_date: 1735669800
    current: 1493557944
layout: problem
---
All submissions for this problem are available.How to measure the difference between two strings? This is a midnight question of biological scientists. The number of pairs of different characters in the same position may be a good indicator. However, it will not work well in the case when two strings have different lengths. The longest common subsequence will also fail when strings are too long.

Recently, Professor of Math L.P.C. has invented the special method to deal with this problem. His invention has been known as a simple but creative solution: the difference is based on the number of substrings (a non-empty group of consecutive characters) of one string that are not substrings of the other string.

Let's learn about his invention. Call the first string as **A** and the second string as **B**. Let **S** be the set of all different substrings of **A**, and **T** be the set of all different substrings of **B**. We then define another set **P** which consists of all the strings that belongs to **S** or **T**, but not both. According to the Professor L.P.C. method, the size of **P** is a good indicator to measure the difference between **A** and **B**.

For example, let **A = aacd** and **B = cdaa**. We can see that:
 **S = {a, aa, aac, aacd, ac, acd, c, cd, d}**,
 **T = {c, cd, cda, cdaa, d, da, daa, a, aa}**,
 **P = {aac, aacd, ac, acd, cda, cdaa, da, daa}**.
 Size of **P** is **8** and we can say the level of difference between **A** and **B** is **8**. />/>/>/>

Your task is to find this indicator.

### Input

The first line of the input contains the string **A**. The second line contains the string **B**.

### Output

Output a single line containing the level of difference between strings **A** and **B** according to definition above.

### Constraints

- **1** ≤ **|A|** ≤ **100000**, where **|A|** denotes the length of the string **A**
- **1** ≤ **|B|** ≤ **100000**
- Both **A** and **B** consist only of lowercase English letters (from 'a' to 'z')

### Example

<pre>
<b>Input:</b>
aacd
cdaa

<b>Output:</b>
8

</pre>### Explanation
Example is explained in the problem statement above.
