---
category_name: school
problem_code: CHEGLOVE
problem_name: 'Chef and Glove'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 27-02-2018
tags:
    - admin2
    - implementation
    - march18
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CHEGLOVE'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454388
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/CHEGLOVE.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/CHEGLOVE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/CHEGLOVE.pdf) as well.

Winter has finally come to Chefland, so Chef bought a glove for herself. Chef has a hand with **N** fingers (for the sake of simplicity, let us consider the thumb a finger too) numbered 1 through **N** and the glove has **N** sheaths numbered 1 through **N**. Exactly one finger has to be inserted into each sheath. You are given the lengths of Chef's fingers, as seen from left to right. You are also given the lengths of the sheaths of the glove, from left to right, as seen from the front.

Chef can wear the glove normally (the front side of the glove matching the front of Chef's hand), or she can flip the glove and then insert her hand in it. In the first case, the first finger will go into the first sheath, the second finger into the second one, and so on. However, when she flips the glove, her first finger will go into the **N**-th sheath, the second finger into the (**N-1**)-th and so on — the **i**-th finger will go into the **N+1-i**-th sheath for each valid **i**. Of course, for her to wear the glove comfortably, each finger's length should be less than or equal to the length of the sheath it goes into.

Find out whether Chef can wear the glove by keeping its front side facing her, or if she can wear it by flipping it over and facing its back side. If she can only wear the glove in the former way, output "front"; if she can wear it only in the latter way, output "back". If both front and back orientations can be used, output "both", and if she can't wear it either way, output "none".

### Input

The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of Chef's fingers.

The second line contains **N** space-separated integers **L1, L2, ..., LN** denoting the lengths of Chef's fingers.

The third line contains **N** space-separated integers **G1, G2, ..., GN**, denoting the lengths of sheaths of the glove.

### Output

For each test case, print a single line containing one of the strings "front", "back", "both", or "none".

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **Li** ≤ 109 for each valid **i**
- 1 ≤ **Gi** ≤ 109 for each valid **i**

### Subtasks

**Subtask #1 (30 points):** 1 ≤ **N** ≤ 102

**Subtask #2 (70 points):** original constraints

### Example

<pre>
<b>Input</b>

4
3
1 2 3
2 3 4
3
1 2 1
1 2 1
3
3 2 1
1 2 3
4
1 3 2 4
1 2 3 5

<b>Output</b>

front
both
back
none
</pre>
### Explanation

**Example case 1:** The glove can be worn normally, with its front side facing Chef. The lengths of the glove sheaths are 2, 3, 4. The lengths of the fingers are 1, 2, 3. Each of the fingers will fit in the corresponding glove sheath, that is, 1 ≤ 2, 2 ≤ 3 and 3 ≤ 4.

However, if Chef tries to wear the glove with its back facing her, then the lengths of the sheaths will be 4, 3, 2. The first two fingers, which have lengths 1 and 2, will fit into the corresponding sheaths, but the 3rd finger won't fit because its length is 3, and the length of the corresponding sheath is 2. Hence, this glove can be worn only in one way, and we output "front".
