---
category_name: school
problem_code: LIKECS01
problem_name: 'Subsequence Equality'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: likecs
problem_tester: kingofnumbers
date_added: 8-09-2017
tags:
    - cakewalk
    - cook86
    - likecs
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/LIKECS01'
time:
    view_start_date: 1505673000
    submit_start_date: 1505673000
    visible_start_date: 1505673000
    end_date: 1735669800
    current: 1514816295
layout: problem
---
All submissions for this problem are available.### Read problems statements [Mandarin chinese](http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS01.pdf), in [Russian](http://www.codechef.com/download/translated/COOK86/russian/LIKECS01.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS01.pdf) as well.

Chef Tobby is playing a rapid fire with Bhuvan. He gives Bhuvan a string **S** and each time, Bhuvan has to guess whether there exists **2** equal [subsequences](https://en.wikipedia.org/wiki/Subsequence) in the string or not.

Bhuvan got a perfect score in the game with Chef Tobby. However, Chef Tobby has now asked Bhuvan to write a program that will do this automatically given a string **S**. Bhuvan is an intelligent man but he does not know how to write a code. Can you help him?

Find two different subsequences such that they are equal in their value, more formally, find two sequences of indices (a1, a2, ..., ak-1, ak) and (b1, b2, ..., bk-1, bk) such that:

1. 1≤ ai, bi ≤ |S|
2. ai i+1 for all valid i
3. bi i+1 for all valid i
4. Sai = Sbi for all valid i
5. there exist at least one i such that ai is not equal to bi

### Input section

The first line contains **T**, the number of test cases.

Each of the next **T** lines contain one string **S** each.

**Input will only consist of lowercase english characters**

### Output section

For each test case, output **"yes"** or **"no"** (without quotes) as the solution to the problem.

### Input constraints

<pre>
1 ≤ T ≤ 1000
1 ≤ length of S ≤ 100

</pre>### Sample Input
<pre>
4
likecs
venivedivici
bhuvan
codechef

</pre>### Sample Output
<pre>
no
yes
no
yes

</pre>### Explanation
In test case **2**, one of the possible equal subsequence is **"vi"** and **"vi"**. (one at position **{0, 3}** and other at **{4, 7}**, assuming 0-based indexing).

In test case **4**, one of the possible equal subsequence is **"ce"** and **"ce"**. (one at position **{0, 3}** and other at **{4, 6}**, assuming 0-based indexing).
