---
category_name: medium
problem_code: BROCLK
problem_name: 'Broken Clock'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: r_64
date_added: 23-08-2017
tags:
    - chemthan
    - feb18
    - math
    - matrix
    - modular
    - trigonometry
editorial_url: 'https://discuss.codechef.com/problems/BROCLK'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525454396
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/BROCLK.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/BROCLK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/BROCLK.pdf) as well.

Chef has a clock, but it got broken today — the minute hand on Chef's clock doesn't rotate by the angle 2π/3600 each second, but by a different fixed angle **x**. The coordinates of the center of the clock are (0, 0). The length of the minute hand is **l**.

One endpoint of the minute hand is always located at the clock center; the other endpoint is initially located at the point (0, **l**). One second later, Chef observes that this endpoint is at distance **d** above the **x**-axis, i.e. the **y**-coordinate of this endpoint is equal to **d**.

Chef is curious about where the minute hand will be (specifically, its **y**-coordinate) after **t** seconds. Because **t** can be very large, Chef can't wait for that moment. Please help him!

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains three space-separated integers **l**, **d** and **t**.

### Output

We can prove that for the given constraints, the **y**-coordinate of the end of the minute hand can always be written as a rational number **p** / **q**, where gcd(**p**, **q**) = gcd(**q**, 109 + 7) = 1. Let's denote the modular inverse of **q** (it's guaranteed that the modular inverse exists and is unique) by **r**.

For each test case, print a single line containing one number (**p** · **r**) modulo 109 + 7.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **d** l ≤ 109
- 1 ≤ **t** ≤ 1018

### Subtasks

**Subtask #1 (5 points):** **t** ≤ 3

**Subtask #2 (15 points):** **t** is a power of 2, i.e. **t** = **2p** for some **p** ≥ 0

**Subtask #3 (40 points):** sum of **t** over all test cases ≤ 106

**Subtask #4 (40 points):** original constraints

### Example

<pre><b>Input:</b>

3
4 2 1
4 2 2
4 2 3

<b>Output:</b>

2
1000000005
1000000003
</pre>
### Explanation

**Example case 1:**

![](https://i.imgur.com/85ynCEa.png)**Example case 2:**

![](https://i.imgur.com/fxXO8Gu.png)The **y**-coordinate is -2, so the answer is 1000000005.

**Example case 3:**

![](https://i.imgur.com/zQIOE1B.png)The **y**-coordinate is -4, so the answer is 1000000003.
