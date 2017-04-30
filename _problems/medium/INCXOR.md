---
category_name: medium
problem_code: INCXOR
problem_name: 'Increasing Xor Sequence'
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
problem_author: lg5293
problem_tester: errichto
date_added: 13-03-2017
tags:
    - bitmasks
    - cook80
    - digit
    - lg5293
    - medium
editorial_url: 'https://discuss.codechef.com/problems/INCXOR'
time:
    view_start_date: 1489949100
    submit_start_date: 1489949100
    visible_start_date: 1489949100
    end_date: 1735669800
    current: 1493557919
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK80/mandarin/INCXOR.pdf), [Russian](http://www.codechef.com/download/translated/COOK80/russian/INCXOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK80/vietnamese/INCXOR.pdf) as well.

 You are given a sequence of **n** integers **a**1, ..., **a****n**. Count the number of sequences b = b1, ..., b**n** such that: 0 ≤ b1 ≤ ... ≤ b**n**31 and (**a**1 XOR b1) ≤ … ≤ (**a****n** XOR b**n**). Return this count, modulo 109+7.

Here XOR denotes the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

### Input

The first line of input will contain an integer **T**, the number of test cases.

Each test case will be in two lines.

The first line of the case will contain an integer **n**.

The next line of the case will contain **n** space separated integers **a**1,...,**a****n**.

### Output

Output a single number, the number of sequences, modulo 109+7.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **n** ≤ 5
- 0 ≤ **a**i31

### Example

```

<b>Input: </b>
4
1
42
5
5 4 3 2 1
4
1194533513 122420337 1448417648 120078455
3
31 2047 2147483647

<b>Output:</b>
147483634
986095186
0
468598063

```
### Explanation

In the first case, there are 231 possible sequences, so the answer is 231 modulo 109+7 = 147483634

For the second case, one possible example of a valid sequence is b = 9, 9, 18, 19, 32. We can check that this sequence is nondecreasing, and also, we have (**a**1 XOR b1) = 12, (**a**2 XOR b2) = 13, (**a**3 XOR b3) = 17, (**a**4 XOR b4) = 17, (**a**5 XOR b5) = 33, which is also nondecreasing.

For the third case, no sequences satisfy the conditions.