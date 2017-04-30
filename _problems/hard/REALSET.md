---
category_name: hard
problem_code: REALSET
problem_name: 'Petya and Sequence'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: KADR
problem_tester: white_king
date_added: 18-10-2013
tags:
    - KADR
    - dec13
    - fft
    - hard
    - maths
editorial_url: 'http://discuss.codechef.com/problems/REALSET'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493556816
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/REALSET.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/REALSET_1.pdf).

Little Petya likes integer numbers a lot. Recently he has received a sequence of integers as a gift from his mother. Petya calls a sequence of **N** integers **Ai** beautiful if there exist a sequence of **N** integer numbers **Bi** for which the following conditions hold:

- At least one number **Bi** differs from 0.
- For every **j** from 0 to **N**-1 the following holds: 
  **A0\* Bj** + **A1\* B(j + 1) mod N** + ... + **AN-1\* B(j + N - 1) mod N** = 0.



Please, help Petya to check if his sequence **Ai** is beautiful.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case contains a single integer **N** denoting the number of elements in Petya's sequence. The second line contains **N** space-separated integers **A0**, **A1**, ..., **AN-1** denoting the sequence.

### Output

For each test case, output a single line containing the word "YES"(without quotes) if Petya's sequence is beautiful and "NO", otherwise.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **3 \* 104**
- **-1000** ≤ **Ai** ≤ **1000**

Sum of N for all test cases in a single input file will not exceed 150 000.

### Example

```
<b>Input:</b>
4
3
1 0 0
3
1 1 1
4
2 -4 1 1
5
1 3 2 1 5
<b>Output:</b>
NO
YES
YES
NO

```
### Explanation

**Example case 2.** One of the possible sequences B is (1, -1, 0).

**Example case 3.** One of the possible sequences B is (1, 1, 1, 1).