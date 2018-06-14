---
category_name: school
problem_code: L56GAME
problem_name: 'Chef and Game with Sequence'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: mgch
date_added: 16-01-2018
tags:
    - cakewalk
    - kefaa
    - ltime56
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/L56GAME'
time:
    view_start_date: 1517073000
    submit_start_date: 1517073000
    visible_start_date: 1517073000
    end_date: 1735669800
    current: 1525454388
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME56/mandarin/L56GAME.pdf), [Russian](http://www.codechef.com/download/translated/LTIME56/russian/L56GAME.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME56/vietnamese/L56GAME.pdf) as well.

Chef has a sequence **A** containing **N** integers **A1, A2, ..., AN**.

Chef is playing a game with this sequence. In this game, he may perform the following operation any number of times (including zero): Choose an arbitrary pair of elements from the sequence such that their sum is even, delete these two elements from the sequence and insert their sum into the sequence instead.

The goal of the game is to minimise the number of elements in the sequence.

Help Chef to play the game and find the minimum possible size of the sequence at the end of the game!

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.

### Output

For each test case, print a single line containing one integer — the minimum possible final size of the sequence.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 100
- 1 ≤ **Ai** ≤ 1,000 for each valid **i**

### Subtasks

**Subtask #1 (100 points):** original constraints

### Example

<pre><b>Input:</b>

2
2
1 2
5
7 4 3 2 6

<b>Output:</b>

2
1
</pre>### Example

**Example case 1:** There is no pair of elements with an even sum. Thus, the sequence must remain the same and the answer is 2.

**Example case 2:** Chef can choose elements 7 and 3 in the first step, delete them and insert 10 in the sequence. Now all its elements are even and Chef can choose any two elements on each of the following steps of the game until the sequence contains only one element.
