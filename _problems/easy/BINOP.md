---
category_name: easy
problem_code: BINOP
problem_name: 'Chef And Binary Operation'
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
problem_author: ma5termind
problem_tester: iscsi
date_added: 5-01-2016
tags:
    - binay
    - easy
    - june16
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/BINOP'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1493558109
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/BINOP.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/BINOP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/BINOP.pdf) as well.

Today is Chef's birthday. His mom decided to surprise him with a truly fantastic gift: his favourite binary string **B**. But, unfortunately, all the stocks of binary string **B** have been sold out, and only a binary string **A** **(A ≠ B)** is available in the market.

She purchases the string **A** and tries to convert it to string **B** by applying any of following three operations zero or more times.

**AND Operation:**
She will choose a pair of indices **i** and **j** such that **i != j** and perform following sequence of operations.

**1. result = Ai &amp; Aj** 
**1. Ai = result &amp; Ai** 
**1. Aj = result &amp; Aj** 
**OR Operation:**
She will choose a pair of indices **i** and **j** such that **i != j** and perform following sequence of operations.

**1. result = Ai | Aj** 
**1. Ai = result | Ai** 
**1. Aj = result | Aj** 
**XOR Operation:**
She will choose a pair of indices **i** and **j** such that **i != j** and perform following sequence of operations.

**1. result = Ai ^ Aj** 
**1. Ai = result ^ Ai** 
**1. Aj = result ^ Aj** 
Chef's mom is eagerly waiting to surprise him with his favourite gift and therefore, she wants to convert string **A** to string **B** as fast as possible. Can you please help her by telling her the minimum number of operations she will require? If it is impossible to do so, then let Chef's mom know about it.

### Input

First line of input contains a single integer **T** denoting the number of test cases. **T** test cases follow.

First line of each test case, will contain binary string **A**.

Second line of each test case, will contain binary string **B**.

### Output

For each test case, Print "Lucky Chef" (without quotes) in first line and minimum number of operations required to convert string **A** to sting **B** in second line if conversion is possible. Print "Unlucky Chef" (without quotes) in a new line otherwise.

### Constraints

**1. 1 ≤ T ≤ 105** 
**1. 1 ≤ |A| ≤ 106** 
**1. 1 ≤ |B| ≤ 106** 
**1. A != B** 
**1. |A| = |B|** 
**1. sum of |A| over all test cases does not exceed 106** 
**1. sum of |B| over all test cases does not exceed 106** 
### Subtasks

**1. Subtask #1 (40 points) : Sum of |A| &amp; |B| over all test cases does not exceed 103** 
**1. Subtask #2 (60 points) : Sum of |A| &amp; |B| over all test cases does not exceed 106** 
### Example

<pre>
<b>Input</b>
2
101
010
1111
1010
<b>Output</b>
Lucky Chef
2
Unlucky Chef

</pre>
### Explanation

**Example case 1.**

- Applying XOR operation with indices i = 1 and j = 2. Resulting string will be 011.
- Then, Applying AND operation with indices i = 1 and j = 3. Resulting string will be 010.


**Example case 2.**

- It is impossible to convert string A to string B.
