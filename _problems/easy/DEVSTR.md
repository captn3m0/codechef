---
category_name: easy
problem_code: DEVSTR
problem_name: 'Devu and binary String'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 9-02-2015
tags:
    - admin
    - admin2
    - basic
    - easy
    - may15
editorial_url: 'http://discuss.codechef.com/problems/DEVSTR'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/DEVSTR.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/DEVSTR.pdf).

 Devu loves to play with binary strings a lot. One day he borrowed a binary string **s** of size **n** from his friend Churu. Before starting to play with it, he wants to make sure that string does not contain more than  **k** consecutive equal characters. For achieving that, only kind of operation he is allowed to perform is to flip any **ith** character of the string.

As Devu is always in hurry to meet his girlfriend, he wants you to help him in finding out the minimum number of operations he will need. Also he wants you to print one of the possible modified string too.

### Input

- First line of input contains an integer **T** denoting the number of test cases.
- For each test case, there are two lines.
- First line contains two space separated integers **n, k** as defined in the problem.
- Next line contains string **s** of size **n**.

### Output

- For each test case, print two lines.
- First line should contain an integer corresponding to minimum number of operations Devu needs.
- In second line, print one of the possible modified strings.

### Constraints

**Subtask #1: 20 points**

- **1 ≤ T ≤ 100**, **1 ≤ n ≤ 20**, **1 ≤ k ≤ n**

**Subtask #2: 35 points**

- **1 ≤ T ≤ 102**, **1 ≤ n ≤ 103**, **1 ≤ k ≤ n**

**Subtask #3: 45 points**

- **1 ≤ T ≤ 105**, **1 ≤ n ≤ 105**, **1 ≤ k ≤ n**
- Sum of **n** over all the test cases is ≤ **106**

### Example

<pre><b>Input:</b>
3
2 1
11
2 2
11
4 1
1001

<b>Output:</b>
1
10
0
11
2
1010

</pre>### Explanation
**Example case 1:** As 1 is occurring twice consecutively, we can convert 11 to 10 in a single operation.

**Example case 2:** You don't need to modify the string as it does not have more than 2 equal consecutive character.

**Example case 3:** As 0 is occurring twice consecutively, we can convert 1001 to 1010 in a two operations (Flip third and fourth character).
