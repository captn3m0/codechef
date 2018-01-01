---
category_name: medium
problem_code: GERALD3
problem_name: 'Chef and Substrings'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: gerald
problem_tester: rustinpiece
date_added: 8-11-2013
tags:
    - gerald
editorial_url: 'http://discuss.codechef.com/problems/GERALD3'
time:
    view_start_date: 1387737000
    submit_start_date: 1387737000
    visible_start_date: 1387737000
    end_date: 1735669800
    current: 1493557679
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/COOK41/mandarin/GERALD3.pdf)

###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK41/russian/GERALD3.docx)

### Problem Statement

Chef has a string **S = S1S2 ... SN**, consisting of **N** lowercase Latin letters. Also he has **M** pairs of integers **Li**, **Ri** (**1** ≤ **Li** ≤ **Ri** ≤ **N**).For each pair **Li**, **Ri**, Chef writes out all distinct substrings of string **S**, which are started from positions **Li**, **Li + 1**, ..., **Ri**.
Your task is to help Chef. That is, for each pair, find out how many substrings that he needs to write.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case contains non-empty string **S** and the second line contains positive integer **M**.
Each of the next **M** lines contains a pair of integers **Li**, **Ri**.

### Output

For each pair of each test case print the required number of substrings.

### Constraints

- String **S** contains only lowercase Latin letters.
- **1** ≤ **Li** ≤ **Ri** ≤ **N**.
- Sum of all length's of **S** for test cases is not greater than **50000**. Sum of all **M** values for test cases is not greater than **50000**.

### Example

<pre><b>Input:</b>
2
ababa
4
1 1
1 5
5 5
3 4
a
1
1 1
<b>Output:</b>
5
9
1
5
1

</pre>