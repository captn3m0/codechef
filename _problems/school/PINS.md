---
category_name: school
problem_code: PINS
problem_name: 'Strike or Spare'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
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
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: abizerl123
problem_tester: null
date_added: 3-07-2018
tags:
    - abizerl123
    - cakewalk
    - july18
editorial_url: 'https://discuss.codechef.com/problems/PINS'
time:
    view_start_date: 1531733410
    submit_start_date: 1531733410
    visible_start_date: 1531733410
    end_date: 1735669800
    current: 1559472929
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JULY18/mandarin/PINS.pdf), [Russian](http://www.codechef.com/download/translated/JULY18/russian/PINS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY18/vietnamese/PINS.pdf) as well.

Chef's company wants to make ATM PINs for its users, so that they could use the PINs for withdrawing their hard-earned money. One of these users is Reziba, who lives in an area where a lot of robberies take place when people try to withdraw their money. Chef plans to include a safety feature in the PINs: if someone inputs the reverse of their own PIN in an ATM machine, the Crime Investigation Department (CID) are immediately informed and stop the robbery. However, even though this was implemented by Chef, some people could still continue to get robbed. The reason is that CID is only informed if the reverse of a PIN is different from that PIN (so that there wouldn't be false reports of robberies). You know that a PIN consists of $N$ decimal digits. Find the probability that Reziba could get robbed. Specifically, it can be proven that this probability can be written as a fraction $P/Q$, where $P \\ge 0$ and $Q \\gt 0$ are coprime integers; you should compute $P$ and $Q$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single integer $N$ denoting the length of each PIN. ### Output For each test case, print a single line containing two space-separated integers — the numerator $P$ and denominator $Q$ of the probability. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^5$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $N \\le 18$ \*\*Subtask #2 (20 points):\*\* $N \\le 36$ \*\*Subtask #3 (70 points):\*\* original constraints ### Example Input ``` 1 1 ``` ### Example Output ``` 1 1 ``` ### Explanation \*\*Example case 1:\*\* A PIN containing only one number would fail to inform the CID, since when it's input in reverse, the ATM detects the same PIN as the correct one. Therefore, Reziba can always get robbed — the probability is $1 = 1/1$.
