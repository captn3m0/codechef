---
category_name: easy
problem_code: CHEFPDIG
problem_name: 'Chef and Pick Digit'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: jingbo_adm
date_added: 4-12-2015
tags:
    - berezin
    - sept17
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CHEFPDIG'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816987
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/CHEFPDIG.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/CHEFPDIG.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/CHEFPDIG.pdf) as well.

Chef likes to play with big numbers. Today, he has a big positive integer **N**. He can select any two digits from this number (the digits can be same but their positions should be different) and orders them in any one of the two possible ways. For each of these ways, he creates a two digit number from it (might contain leading zeros). Then, he will pick a character corresponding to the ASCII value equal to this number, i.e. the number 65 corresponds to 'A', 66 to 'B' and so on till 90 for 'Z'. Chef is only interested in finding which of the characters in the range 'A' to 'Z' can possibly be picked this way.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of the input contains an integer **N**.

### Output

For each test case, output a string containing characters Chef can pick **in sorted order** If the resulting size of string is zero, you should output a new line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **10100000**

### Subtasks

- _Subtask #1 (40 points)_ **N** ≤ **1010**
- _Subtask #2 (60 points)_ **Original Constraints**

### Example

<pre><b>Input:</b>
4
65
566
11
1623455078

<b>Output:</b>
A
AB

ACDFGHIJKLNPQRSTUVW

</pre>### Explanation
**Example case 1.** Chef can pick digits **6** and **5** and create integers 56 and 65. The integer 65 corresponds to 'A'.

**Example case 2.** Chef can pick digits **6** and **5** and create **'A'** as it equals **65**. He can pick 6 and 6 (they are picked from position 2 and position 3, respectively) to create 'B' too. Hence answer is "AB".

**Example case 3.** It's not possible to create any character from 'A' to 'Z'. Hence, we just print a new line.
