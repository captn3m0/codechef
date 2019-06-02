---
category_name: easy
problem_code: YVSTR
problem_name: 'Yalalovichik Strings'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 22-12-2018
tags:
    - cook101
    - deadwing97
editorial_url: 'https://discuss.codechef.com/problems/YVSTR'
time:
    view_start_date: 1545589802
    submit_start_date: 1545589802
    visible_start_date: 1545589802
    end_date: 1735669800
    current: 1559472964
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/YVSTR.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/YVSTR.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/YVSTR.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/YVSTR.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/YVSTR.pdf) as well. To make Yalalovichik even more satisfied and happy, Jafar decided to invent Yalalovichik strings. A string is called a Yalalovichik string if the set of all of its distinct non-empty substrings is equal to the set of all of its distinct non-empty subsequences. You are given a string $S$. You need to find the number of its distinct non-empty substrings which are Yalalovichik strings. \*\*Note:\*\* A string $A$ is called a subsequence of a string $B$ if $A$ can be formed by erasing some characters (possibly none) from $B$. A string $A$ is called a substring of a string $B$ if it can be formed by erasing some characters (possibly none) from the beginning of $B$ and some (possibly none) from the end of $B$. Two substrings or subsequences are considered different if they are different strings. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N = |S|$. - The second line contains the string $S$. ### Output For each test case, print a single line containing one integer — the number of distinct Yalalovichik substrings of $S$. ### Constraints - $1 \\le T \\le 100$ - $1 \\le N \\le 10^6$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^6$ - $S$ contains only lowercase English letters ### Example Input ``` 1 3 xxx ``` ### Example Output ``` 3 ``` ### Explanation \*\*Example case 1:\*\* The distinct Yalalovichik substrings are "x", "xx" and "xxx".
