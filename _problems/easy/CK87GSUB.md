---
category_name: easy
problem_code: CK87GSUB
problem_name: 'Chef and Counting Test'
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
problem_author: mhammad1
problem_tester: kingofnumbers
date_added: 19-10-2017
tags:
    - combinatorics
    - cook87
    - counting
    - easy
    - mhammad1
time:
    view_start_date: 1508697000
    submit_start_date: 1508697000
    visible_start_date: 1508697000
    end_date: 1735669800
    current: 1525198883
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK87/mandarin/CK87GSUB.pdf), [Russian](http://www.codechef.com/download/translated/COOK87/russian/CK87GSUB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK87/vietnamese/CK87GSUB.pdf) as well.

Ahmed Gafer failed to pass the test, but he got the job because of his friendship with Said and Shahhoud. After working in the kitchen for a while, he blew it. The customers didn't like the food anymore and one day he even burned the kitchen. Now the master Chef is very upset.

Ahmed isn't useful anymore at being a co-Chef, so S&S decided to give him a last chance. They decided to give Ahmed a new job, and make him work as the cashier of the restaurant. Nevertheless, in order not to repeat their previous mistake, they decided to give him a little test to check if his counting skills are good enough for the job. The problem is as follows:

Given a string **A** of lowercase English letters, Ahmad was asked to find the number of good substrings. A substring **A\[L, R\]** is good if:

- The length of the substring is exactly **2** and **AL** = **AR**, OR
- The length of the substring is greater than **2**,**AL** = **AR** and the substring **A\[L + 1, R - 1\]** has only one distinct letter.

Anyways, Ahmed struggled trying to find a solution for the problem. Since his mathematical skills are very poor as it turned out, he decided to cheat and contacted you asking for your help. Can you help him in this challenge?

### Input

The first line of the input contains the integer **T**, indicating the number of test cases.

Each of the following **T** lines, contains a string **A**.

### Output

For each test case, output a single line containing a single number, indicating the number of good substrings.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤  **|A|**  ≤ **105**
- It's guaranteed that the sum of  **|A|**  over all test cases doesn't exceed **5x105**.

### Example

<pre><b>Input:</b>
2
a
abba

<b>Output:</b>
0
2

</pre>### Explanation

**Example case 2.** The good substrings of **abba** are: { **bb** } and { **abba** }.
