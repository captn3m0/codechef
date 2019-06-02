---
category_name: easy
problem_code: KLPM
problem_name: 'Kira Loves Palindromes'
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
problem_author: bombshot
problem_tester: null
date_added: 28-02-2019
tags:
    - april19
    - bombshot
    - dynamic
    - easy
editorial_url: 'https://discuss.codechef.com/problems/KLPM'
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472949
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/KLPM.pdf), \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/KLPM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/APRIL19/mandarin/KLPM.pdf), \[Russian\](http://www.codechef.com/download/translated/APRIL19/russian/KLPM.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/APRIL19/vietnamese/KLPM.pdf) as well. You are given a string $S$. Find the number of ways to choose an unordered pair of non-overlapping non-empty substrings of this string (let's denote them by $s\_1$ and $s\_2$ in such a way that $s\_2$ starts after $s\_1$ ends) such that their concatenation $s\_1 + s\_2$ is a palindrome. Two pairs $(s\_1, s\_2)$ and $(s\_1', s\_2')$ are different if $s\_1$ is chosen at a different position from $s\_1'$ or $s\_2$ is chosen at a different position from $s\_2'$. ### Input The first and only line of the input contains a single string $S$. ### Output Print a single line containing one integer — the number of ways to choose a valid pair of substrings. ### Constraints - $1 \\le |S| \\le 1,000$ - $S$ contains only lowercase English letters ### Subtasks \*\*Subtask #1 (25 points):\*\* $|S| \\le 100$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` abba ``` ### Example Output ``` 7 ``` ### Explanation The following pairs of substrings can be chosen: ("a", "a"), ("a", "ba"), ("a", "bba"), ("ab", "a"), ("ab", "ba"), ("abb", "a"), ("b", "b").
