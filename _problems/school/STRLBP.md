---
category_name: school
problem_code: STRLBP
problem_name: 'Uniform Strings'
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
date_added: 8-12-2017
tags:
    - acm17kgp
    - admin2
    - cakewalk
    - kgp17rol
editorial_url: 'https://discuss.codechef.com/problems/STRLBP'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454391
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a string **s** of length 8 consisting solely of '0's and '1's. Assume that the characters of the string are written in a circular fashion. You need to find the number of 0-1 or 1-0 transitions that one has to make while making a single traversal over the string. ie. start from any character and go circularly until you get back to the same character, and find the number of transitions that you made. The string is said to be said to be *uniform* if there are at most two such transitions. Otherwise, it is called *non-uniform*.

Given the string **s**, tell whether the string is *uniform* or not.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of input contains the string **s**.

### Output

For each test case, output "uniform" if the given string is *uniform* and "non-uniform" otherwise.

### Constraints

- **1 ≤ T ≤ 256**
- Length of **s** is 8

### Example

<pre>
<b>Input</b>
4
00000000
10101010
10000001
10010011

<b>Output</b>
uniform
non-uniform
uniform
non-uniform
</pre>
### Explanation

The number of transitions are 0, 8, 2 and 4 for the respective cases. So, the first and third one are uniform while the second and fourth one are non-uniform.
