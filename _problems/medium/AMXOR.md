---
category_name: medium
problem_code: AMXOR
problem_name: 'XOR Sum'
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
problem_author: 'satej '
problem_tester: gamabunta
date_added: 10-05-2013
tags:
    - cook34
    - dynamic
    - medium
    - satej
editorial_url: 'http://discuss.codechef.com/problems/AMXOR'
time:
    view_start_date: 1368988200
    submit_start_date: 1368988200
    visible_start_date: 1368988200
    end_date: 1735669800
    current: 1493557455
layout: problem
---
All submissions for this problem are available.**WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.**

Chef has a sequence of **N** positive integers **{ a1, a2, a3, ... aN }**. The Sous Chef wants to choose another sequence of **N** **non-negative integers** **{ b1, b2, b3, ... bN }** such that

- The **bitwise xor sum** of these **2** sequences is equal
- i.e, **a1 ^ a2 ^ a3 ^ ... aN = b1 ^ b2 ^ b3 ^ ... bN**
- for each **i**, **bi** ≤ **ai**

The Sous Chef asks for your help. Your allegiance to the Chef withstanding, you tell him that you will not generate such a sequence for him. Instead, you will tell him the number of such sequences possible.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains a single integer **N** denoting the length of your sequence. The second line contains **N** space-separated integers **a1**, **a2**, ..., **aN**.

### Output

For each test case, output a single line containing the number of ways your friend can choose his sequence. Since this number may be too big, output this number modulo **1000000009**.

### Constraints

**1 ≤ T ≤ 10**
**1 ≤ N ≤ 100000**
**1 ≤ ai ≤ 1000000000**

### Sample

<pre>
<b>Input</b>
4
1
5
2
3 3
3
3 3 3
4
1 2 3 4

<b>Output</b>
1
4
16
6

</pre>
### Explanation

**Test Case 1:** The only possible sequence is **{ 5 }**.

**Test Case 2:** There are 4 possible sequences whose bitwise xor is equal to 3^3 = 0

- { 0, 0 }
- { 1, 1 }
- { 2, 2 }
- { 3, 3 }

**Test Case 4:** The 6 possible sequences are

- { 0, 0, 0, 4 }
- { 0, 1, 1, 4 }
- { 1, 0, 1, 4 }
- { 1, 1, 0, 4 }
- { 0, 2, 2, 4 }
- { 1, 2, 3, 4 }
