---
category_name: easy
problem_code: STRCH
problem_name: 'Friend or Girlfriend'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: jnarutoj
problem_tester: null
date_added: 20-03-2019
tags:
    - april19
    - combinatorics
    - jnarutoj
    - simple
editorial_url: 'https://discuss.codechef.com/problems/STRCH'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/STRCH.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/STRCH.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/STRCH.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/STRCH.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/STRCH.pdf) as well. Shlok and Sachin are good friends. Shlok wanted to test Sachin, so he wrote down a string $S$ with length $N$ and one character $X$. He wants Sachin to find the number of different substrings of $S$ which contain the character $X$ at least once. Sachin is busy with his girlfriend, so he needs you to find the answer. Two substrings of $S$ are considered different if their positions in $S$ are different. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains a string $S$ with length $N$, followed by a space and a character $X$. ### Output For each test case, print a single line containing one integer — the number of substrings of $S$ that contain $X$. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^6$ - $S$ contains only lowercase English letters - $X$ is a lowercase English letter - the sum of $N$ over all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (30 points):\*\* the sum of $N$ over all test cases does not exceed $10^3$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 2 3 abb b 6 abcabc c ``` ### Example Output ``` 5 15 ``` ### Explanation \*\*Example case 1:\*\* The string "abb" has six substrings: "a", "b", "b", "ab", "bb", "abb". The substrings that contain 'b' are "b", "b", "ab", "bb", "abb".
