---
category_name: easy
problem_code: ABREPEAT
problem_name: 'Bear and AB'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: mnbvmar
date_added: 23-04-2017
tags:
    - combinatorics
    - cook81
    - errichto
    - simple
editorial_url: 'https://discuss.codechef.com/problems/ABREPEAT'
time:
    view_start_date: 1492972200
    submit_start_date: 1492972200
    visible_start_date: 1492972200
    end_date: 1735669800
    current: 1497284060
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK81/mandarin/ABREPEAT.pdf), [Russian](http://www.codechef.com/download/translated/COOK81/russian/ABREPEAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK81/vietnamese/ABREPEAT.pdf) as well.

Limak has a string **S**, that consists of **N** lowercase English letters. Limak then created a new string by repeating **S** exactly **K** times. For example, for **S** = "abcb" and **K** = 2, he would get "abcbabcb".

Your task is to count the number of subsequences "ab" (not necessarily consecutive) in the new string.

In other words, find the number pairs of indices i

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **K**, denoting the length of the initial string **S** and the number of repetitions respectively.

The second line contains a string **S**. Its length is exactly **N**, and each of its characters is a lowercase English letter.

### Output

For each test case, output a single line containing one integer — the number of subsequences "ab" in the new string. For the given constraints, it can be proved that the answer fits in the 64-bit signed type.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **N** \* **K** ≤ 109 (in other words, the new string has length up to 109)

### Example

<pre><b>Input:</b>
3
4 2
abcb
7 1
aayzbaa
12 80123123
abzbabzbazab

<b>Output:</b>
6
2
64197148392731290

</pre>### Explanation
**Test case 1.** Limak repeated the string "abcb" 2 times, and so he got "abcbabcb". There are 6 occurrences of the subsequence "ab":

- ABcbabcb (the two letters marked uppercase)
- AbcBabcb
- AbcbaBcb
- AbcbabcB
- abcbABcb
- abcbAbcB

**Test case 2.** Since **K** = 1, the new string is equal to the given **S** ("aayzbaa"). There are 2 occurrences of the subsequence "ab" in this string: AayzBaa and aAyzBaa.
