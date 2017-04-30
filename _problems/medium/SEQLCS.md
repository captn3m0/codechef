---
category_name: medium
problem_code: SEQLCS
problem_name: 'Chef and the Number Sequence'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: rustinpiece
problem_tester: iscsi
date_added: 1-08-2015
tags:
    - cook61
    - dp
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/SEQLCS'
time:
    view_start_date: 1440357600
    submit_start_date: 1440357600
    visible_start_date: 1440357600
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK61/mandarin/SEQLCS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK61/russian/SEQLCS.pdf) as well.

Chef has a sequence **A** consisting of **N** integers each lying between **1** and **K**, both inclusive. Now he wants to construct another sequence **B** of the same length also containing integers between **1** and **K** (again, both inclusive). Find out in how many ways he can construct the sequence **B**, such that the length of [Longest Common Subsequence (LCS)](https://en.wikipedia.org/wiki/Longest_common_subsequence_problem) of **A** and **B** is exactly **L**. As the answer could be large, print it modulo **109 + 7**.

### Input

The first line of the input contains **T** denoting the number of test cases. Each test case contains two lines:

- The first line of each test case contains three space separated integers **N**, **K**, and **L**.
- The second line contains **N** space separated integers **A1**, **A2**, ... **AN**.

### Output

For each test case output the number of ways to construct B as described above. Output the result modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N,K** ≤ **16**
- **1** ≤ **L** ≤ **N**
- The sequence **A** consists of integers between **1** and **K** (both inclusive).

### Example

```
<b>Input:</b>
2
2 2 1
1 2
3 3 2
1 2 2

<b>Output:</b>
3
11


```
### Explanation

**First Example** : There are total three possible valid sequences **B** : \[1, 1\], \[2, 2\] and \[2, 1\]. LCS of these sequences with sequence **A** is equal to 1. Note that \[1, 2\] is not a valid sequence as LCS of this and sequence **A** is equal to 2.

**Second Example**: The 11 ways are: \[1, 1, 2\], \[1, 2, 1\], \[1, 2, 3\], \[1, 3, 2\], \[2, 1, 2\], \[2, 2, 1\], \[2, 2, 2\], \[2, 2, 3\], \[2, 3, 2\], \[3, 1, 2\], \[3, 2, 2\].

### Note

Two sequences of **B** are considered different if there is at least one position which contains different numbers in the sequences.