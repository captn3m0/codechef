---
category_name: easy
problem_code: CHEFSIGN
problem_name: 'Chef and Sign Sequences'
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
problem_author: berezin
problem_tester: null
date_added: 18-11-2015
tags:
    - ad
    - berezin
    - cakewalk
    - greedy
    - july17
editorial_url: 'https://discuss.codechef.com/problems/CHEFSIGN'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514815999
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/CHEFSIGN.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/CHEFSIGN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/CHEFSIGN.pdf) as well.

Chef found a strange string yesterday - a string of signs **s**, where each sign is either a **', **'='** or a **'>'**. Let N be the length of this string. Chef wants to insert N + 1 positive integers into this sequence and make it valid. A valid sequence is a sequence where every sign is preceded and followed by an integer, and the signs are correct. That is, if a sign 'a and followed by an integer _b_, then _a_ should be less than _b_. Likewise for the other two signs as well.**

Chef can take some positive integers in the range **\[1, P\]** and use a number in the range as many times as he wants.

Help Chef find the minimum possible **P** with which he can create a valid sequence.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains the string of signs **s**, where each sign is either **', **'='** or a **'>'**.**

### Output

For each test case, output a single line containing an integer corresponding to the minimum possible **P**.

### Constraints

- 1 ≤ **T, |s|** ≤ 105
- 1 ≤ Sum of **|s|** over all test cases in a single test file ≤ 106

### Subtasks

**Subtask #1 (30 points)**

- 1 ≤ **T, |s|** ≤ 103
- 1 ≤ Sum of **|s|** over all test cases in a single test file ≤ 104

**Subtask #2 (70 points)**

- Original constraints

### Example

<pre><b>Input:</b>
4

Output:
4
2
2
3

</pre>### Explanation
Here are some possible valid sequences which can be formed with the minimum **P** for each of the test cases:

<pre>
1  1  1
1 
</pre>