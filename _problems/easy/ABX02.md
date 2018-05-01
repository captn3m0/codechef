---
category_name: easy
problem_code: ABX02
problem_name: 'Too Much Sweetness'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: abx_2109
problem_tester: kingofnumbers
date_added: 31-10-2017
tags:
    - abx_2109
    - dynamic
    - ltime55
    - medium
    - programming
editorial_url: 'https://discuss.codechef.com/problems/ABX02'
time:
    view_start_date: 1514653200
    submit_start_date: 1514653200
    visible_start_date: 1514653200
    end_date: 1735669800
    current: 1514815991
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME55/mandarin/ABX02.pdf), [Russian](http://www.codechef.com/download/translated/LTIME55/russian/ABX02.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX02.pdf) as well.

Raghav studies in NSIT and is bored of the regular hostel mess food. For a change he went to a sweet shop at City Centre near the college to have some sweets. There he found only two boxes containing sweets; box 1 contains **p** sweets and box 2 contains **q** sweets.

Initially, both boxes are closed. Raghav wants to eat exactly **N** sweets in total during the following process:

- Choose an index **i** (1 ≤ **i** ≤ 2) of one box and a number **s** (0 < **s** ≤ number of sweets in box **i**).
- Open box **i**, take out **s** sweets, eat them and then close box **i**.
- Write down number **i** exactly **s** times.
- If less than **N** sweets have been eaten in total, repeat from the first step.

The index **i** of the box chosen at each step should always be different from the index of the previously selected box. In the beginning, either box can be chosen.

At the end, Raghav will have written down a sequence **P1, P2, P3, ..., PN** (1 ≤ **Pi** ≤ 2 for each valid **i**) describing the boxes containing the sweets he ate, in the given order. For example, if he has to eat **N** = 7 sweets, so he opens box 1 and takes out 3 sweets and then opens box 2 and takes out 4 sweets, then the sequence **P1..N** will be 1112222.

In addition, Raghav cannot eat more than **Si** sweets from box **i** in one step (**s** ≤ **Si**). Also, box **i** cannot be opened more than **Bi** times in total.

Can you help Raghav determine the total number of possible sequences **P1..N** satisfying the given constraints? Since this number can be large, compute it **modulo 109 + 7**.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each testcase contains three space-separated integers **p**, **q** and **N**.
- The second line contains two space-separated integers **B1** and **B2**.
- The third line contains two space-separated integers **S1** and **S2**.

### Output

For each test case, print a single line containing one integer — the number of possible sequences modulo 109 + 7.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **p**, **q** ≤ 50
- 1 ≤ **B1**, **B2**, **S1**, **S2** ≤ 200
- 1 ≤ **N** ≤ **p+q**

### Subtasks

**Subtask #1 (10 points):** 1 ≤ **N** ≤ 15

**Subtask #2 (20 points):** 1 ≤ **p**, **q** ≤ 20

**Subtask #3 (70 points):** original constraints

### Example

<pre><b>Input:</b>

2
2 2 4
2 2
1 1
10 10 10
10 10
10 10

<b>Output:</b>

2
1024
</pre>### Explanation

**Example case 1:** We have 2 sweets in box 1 and 2 sweets in box 2. All possible sequences **P1..4** are: 1122, 2211, 1212, 2121, 1221 and 2112. Out of them, only 1212 and 2121 are valid, since **S1** = **S2** = 1.

**Example case 2:** All possible 210 sequences are valid.
