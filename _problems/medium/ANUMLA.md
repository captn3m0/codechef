---
category_name: medium
problem_code: ANUMLA
problem_name: 'Mahesh and his lost array'
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
problem_author: anudeep2011
problem_tester: kostya_by
date_added: 14-10-2014
tags:
    - anudeep2011
    - cook51
    - easy
    - greedy
    - heap
    - multiset
editorial_url: 'http://discuss.codechef.com/problems/ANUMLA'
time:
    view_start_date: 1413744000
    submit_start_date: 1413744000
    visible_start_date: 1413744000
    end_date: 1735669800
    current: 1493557477
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK51/mandarin/ANUMLA.pdf) and [Russian](http://www.codechef.com/download/translated/COOK51/russian/ANUMLA.pdf) as well.

Mahesh got a beautiful array named **A** as a birthday gift from his beautiful girlfriend Namratha. There are **N** positive integers in that array. Mahesh loved the array so much that he started to spend a lot of time on it everyday. One day, he wrote down all possible subsets of the array. Then for each subset, he calculated the sum of elements in that subset and wrote it down on a paper. Unfortunately, Mahesh lost the beautiful array :(. He still has the paper on which he wrote all subset sums. Your task is to rebuild beautiful array **A** and help the couple stay happy :)

### Input

The first line of the input contains an integer **T** denoting the number of test cases.
First line of each test case contains one integer **N**, the number of elements in **A**.
Second line of each test case contains **2^N** integers, the values written on paper

### Output

For each test case, output one line with **N** space separated integers in non-decreasing order.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N** ≤ **15**
- ≤ **Values on paper** ≤ **10^9**
- **All input values are valid. A solution always exists**

### Example

<pre><b>Input</b>
2
1
0 10
2
0 1 1 2

<b>Output</b>
10
1 1

</pre>### Explanation
**Test case #2**
For the array \[1,1\], possible subsets are {}, {1}, {1}, {1,1}, respective sums are 0, 1, 1, 2.
