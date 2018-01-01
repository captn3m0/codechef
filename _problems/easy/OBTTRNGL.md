---
category_name: easy
problem_code: OBTTRNGL
problem_name: 'Real obtuse'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: melnik
problem_tester: kingofnumbers
date_added: 17-08-2017
tags:
    - cook85
    - easy
    - math
    - melnik
editorial_url: 'https://discuss.codechef.com/problems/OBTTRNGL'
time:
    view_start_date: 1503253800
    submit_start_date: 1503253800
    visible_start_date: 1503253800
    end_date: 1735669800
    current: 1514816007
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK85/mandarin/OBTTRNGL.pdf), [russian](http://www.codechef.com/download/translated/COOK85/russian/OBTTRNGL.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK85/vietnamese/OBTTRNGL.pdf) as well.

On the occasion of the birthday, Chef bought a large circular cake and decorated it with  **k**  candles placed equally spaced around the circumference of the cake, i.e. the lengths of the arcs that connect any two adjacent candles are equal.

 Chef enumerated the candles from  **1** to  **k**  in clockwise manner. He then chose two candles, say  **A**  and  **B**  and lit them up. Now, he left the kitchen and decided to come back in some time with friends to celebrate the birthday.

Meanwhile Chef's little brother came to the kitchen and saw the cake. He wants to light up one of the not lit candles **C** such that angle  **ACB**  is an obtuse angle. He believes that such a pattern of lit candles will be auspicious. Can you find out how many candles **C** he can light up?

### Input

The first line contains a single integer **T**, the number of test cases. Each test case is described by a single line containing three space-separated integers **k**, **A**, **B**.

### Output

For each test case, output a single line containing one integer: the answer for the test case.

### Constraints

- **1** ≤ **T** ≤  **105**
- **3** ≤ **k** ≤  **109**
- **1** ≤ **A**, **B** ≤ **k**
- **A** ≠ **B**

### Example

<pre><b>Input:</b>
3
6 1 3
6 1 4
10 1 5
<b>Output:</b>
1
0
3

</pre>### Explanation
**Example case 1.** Only candle with number **2** is suitable.

**Example case 2.** No matter how we choose **C** the angle would have **90** degrees.

**Example case 3.** Candles with numbers **2,3,4** are suitable.
