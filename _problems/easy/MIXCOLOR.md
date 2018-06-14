---
category_name: easy
problem_code: MIXCOLOR
problem_name: 'Mix the Colors'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: shivangi_gupta
problem_tester: null
date_added: 26-02-2018
tags:
    - ad
    - easy
    - greedy
    - march18
    - shivangi_gupta
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/MIXCOLOR'
time:
    view_start_date: 1520847000
    submit_start_date: 1520847000
    visible_start_date: 1520847000
    end_date: 1735669800
    current: 1525454369
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/MARCH18/mandarin/MIXCOLOR.pdf), [Russian](http://www.codechef.com/download/translated/MARCH18/russian/MIXCOLOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH18/vietnamese/MIXCOLOR.pdf) as well.

Chef likes to mix colors a lot. Recently, she was gifted **N** colors **A1, A2, ..., AN** by her friend.

Chef wants to make the values of all her colors pairwise distinct, as they will then look stunningly _beautiful_. In order to achieve that, she can perform the following mixing operation zero or more times:

- Choose any two colors. Let's denote their values by **x** and **y**.
- Mix the color with value **x** into the color with value **y**. After the mixing, the value of the first color remains **x**, but the value of the second color changes to **x + y**.

Find the minimum number of mixing operations Chef needs to perform to make her colors beautiful.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of colors.
- The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting Chef's initial colors.

### Output

For each test case, print a single line containing one integer — the minimum number of required mixing operations.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **Ai** ≤ 109 for each valid **i**

### Subtasks

**Subtask #1 (30 points):** 1 ≤ **N** ≤ 100

**Subtask #2 (70 points):** original constraints

### Example

<pre><b>Input:</b>

2
3
1 2 3
3
2 1 2

<b>Output:</b>

0
1
</pre>### Explanation

**Example case 1:** No two colors have the same value. Hence, they are already beautiful. No mixing is required.

**Example case 2:** Take the second color (with value **x** = 1) and mix it into the first color (with value **x** = 2). After the mixing, the colors will be 3 1 2. Now the colors are beautiful. This is the minimum number of mixing operations that are required. Hence, the answer is 1.
