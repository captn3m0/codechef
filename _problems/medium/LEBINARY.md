---
category_name: medium
problem_code: LEBINARY
problem_name: 'Asmany Number Verification'
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
problem_author: gamabunta
problem_tester: null
date_added: 8-08-2012
tags:
    - bignum
    - cook25
    - gamabunta
    - maths
time:
    view_start_date: 1345403928
    submit_start_date: 1345403928
    visible_start_date: 1345402200
    end_date: 1735669800
    current: 1493557740
layout: problem
---
All submissions for this problem are available.Asmany strings are strings of '0's and '1's that have as many 00 as 11. A string such as 00110001 consists of 3 "00" and
1 "11". Of course this is not an Asmany string. 0011, 1100, 000111000111 are Asmany strings. An L'th Asmany number is the number of
Asmany strings of length L for all positive integers L.

For esoteric purposes Chef had an oracle (a device) that was capable of answering whether a number that he entered was an Asmany number.
The problem is that his oracle takes too long for large numbers. Him being Chef, he wants to ask the oracle very
large numbers! You tell him that you can give him a better oracle (a program) that will tell him what he wants to know in the blink of
an eye.

### Input

The first Line contains a single number T, the number of test cases.

Each test case contains 1 positive integer N, with not more than 1000 digits.

### Output

Print YES if N is an Asmany number, NO otherwise.

### Constraints

<pre>1 ≤ T ≤ 100
1 ≤ Number of digits in N ≤ 1000

</pre>### Sample Input
<pre>2
3
4

</pre>### Sample Output
<pre>NO
YES

</pre>### Explanation
4 is an Asmany number. To be precise, it is the 4th Asmany number: There are 4 Asmany strings of length 4. 0011, 1100, 0101, 1010.
