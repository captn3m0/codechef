---
category_name: medium
problem_code: PPERM
problem_name: 'Prime Permutations'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: yellow_agony
problem_tester: gamabunta
date_added: 7-06-2012
tags:
    - cook26
    - easy
    - sieve
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/PPERM'
time:
    view_start_date: 1348428109
    submit_start_date: 1348428109
    visible_start_date: 1348427700
    end_date: 1735669800
    current: 1493557860
layout: problem
---
All submissions for this problem are available.A permutation of N **distinct** integers between 1 and N, both inclusive, is called a prime permutation of size N iff - for all i between 1 and N, the following condition holds:

The ith integer is the Xth smallest integer in the first i integers, where X is either 1 or a prime number.

Your task is to find out how many prime permutations are there of size N.

### Input

The first line contains a single integer T, denoting the number of test cases. Then T lines follow, each containing a single integer N.

### Output

For each test case, output a single line containing the number of prime permutations of size N. Since the answers can be very large, output each answer modulo 1,000,000,007.

### Example

<pre>
<b>Input:</b>
4
1
2
3
4

<b>Output:</b>
1
2
6
18

</pre>### Constraints:
1 ≤ T ≤ 500,000
1 ≤ N ≤ 5,000,000
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.

**WARNING!** Large I/O files. Use fast I/O methods.
