---
category_name: school
problem_code: DEVUGRAP
problem_name: 'Devu and Grapes'
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
problem_author: amitpandeykgp
problem_tester: xcwgf666
date_added: 20-04-2015
tags:
    - amitpandeykgp
    - cakewalk
    - gcd
    - ltime24
editorial_url: 'http://discuss.codechef.com/problems/DEVUGRAP'
time:
    view_start_date: 1433061000
    submit_start_date: 1433061000
    visible_start_date: 1433061000
    end_date: 1735669800
    current: 1492506773
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME24/mandarin/DEVUGRAP.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME24/russian/DEVUGRAP.pdf).

Grapes of Coderpur are very famous. Devu went to the market and saw that there were **N** people selling grapes. He didn’t like it because things were not very structured. So, he gave a task to Dhinwa to make things better. If Dhinwa successfully completes the task, Devu will be happy.

Devu wants to change the number of grapes in a bucket of zero or more sellers in such a way that the [GCD](http://en.wikipedia.org/wiki/Greatest_common_divisor) of all the number of grapes is divisible by K. Dhinwa can add or remove any number of grapes from each of the buckets. Adding or removing a grape will be counted as an operation. Also after the operation, none of the seller’s bucket should be empty.

Help Dhinwa in finding the minimum number of operations needed to make Devu happy.

### Input

- First line of input contains an integer **T** denoting the number of test cases.
- For each test case, first line will contain an integer **N** denoting the number of buckets and integer **K**.
- Next line contains **N** space separated integers denoting the number of grapes in each of the bucket.

### Output

For each test case, print a single integer representing the answer of that test case.

### Constraints

**Subtask #1: 10 points**

- **1 ≤ T ≤ 10, 1 ≤ N ,K ≤ 10, 1 ≤ number of grapes in a bucket ≤ 10**

**Subtask #2: 10 points**

- **1 ≤ T ≤ 10, 1 ≤ N,K ≤ 100, 1 ≤ number of grapes in a bucket ≤ 100**

**Subtask #3: 80 points**

- **1 ≤ T ≤ 10, 1 ≤ N ≤ 105, 1 ≤ K ≤ 109, 1 number of grapes in a bucket ≤ 109**

### Example

<pre><b>Input:</b>
2
2 2
3 5
3 7
10 16 18

<b>Output:</b>
2
8
</pre>
### Explanation

For the first test case, add or remove 1 grape in each of the bucket.

For the second test case, remove three grapes in the first bucket, remove two grapes from the second bucket and add three grapes in the third bucket.
