---
category_name: easy
problem_code: SBSTR
problem_name: 'Count Substrings'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 23-05-2018
tags:
    - array
    - freq
    - kingofnumbers
    - looping
    - simple
    - string
editorial_url: 'https://discuss.codechef.com/problems/SBSTR'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1528985559
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/SBSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/SBSTR.pdf) as well.

Let's call a string $X$ \*interesting\* if it satisfies the following conditions: - $X$ contains at least $K$ pairwise distinct characters - for any two characters $c\_1$ and $c\_2$ which appear in $X$, the frequency (number of occurrences) of $c\_1$ in $X$ is equal to the frequency of $c\_2$ in $X$ You are given a string $S$. Compute the number of interesting substrings of $S$. Two substrings are considered different if they are located at different positions in $S$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a string $S$, followed by a space and and integer $K$. ### Output For each test case, print a single line containing one integer — the number of interesting substrings. ### Constraints - $1 \\le T \\le 10$ - $1 \\le |S| \\le 7,000$ - the sum of $|S|$ in all test cases does not exceed $14,000$ - $|S|$ contains only lowercase English letters - $0 \\le K \\le 26$ ### Subtasks \*\*Subtask #1 (20 points):\*\* $1 \\le |S| \\le 100$ \*\*Subtask #2 (20 points):\*\* - $1 \\le |S| \\le 1,000$ - the sum of $|S|$ in all test cases does not exceed $2,000$ \*\*Subtask #3 (60 points):\*\* original constraints ### Example Input ``` 1 ababc 2 ``` ### Example Output ``` 6 ``` ### Explanation \*\*Example case 1:\*\* The interesting substrings are "ab", "ba", "ab", "bc", "abab" and "abc".
