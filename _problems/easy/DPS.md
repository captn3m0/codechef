---
category_name: easy
problem_code: DPS
problem_name: 'Dummy Palindromic Strings'
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
problem_author: abdullah768
problem_tester: null
date_added: 15-05-2019
tags:
    - abdullah768
    - frequency
    - ltime72
    - simple
    - taran_1407
time:
    view_start_date: 1558803600
    submit_start_date: 1558803600
    visible_start_date: 1558803600
    end_date: 1735669800
    current: 1559472943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/LTIME72/hindi/DPS.pdf), \[Bengali\](http://www.codechef.com/download/translated/LTIME72/bengali/DPS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/LTIME72/mandarin/DPS.pdf), \[Russian\](http://www.codechef.com/download/translated/LTIME72/russian/DPS.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/LTIME72/vietnamese/DPS.pdf) as well. A \*dummy palindromic string\* (DPS) is a string which can be converted into a palindrome by performing each of the following operations exactly once: - Permute the characters of the string in an arbitrary way. - Choose a valid index $i$ and change the $i$-th character of the resulting string to a \*\*different\*\* character (not necessarily present in the original string). You are given a string $S$. Find out whether it is a DPS. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single string $S$. ### Output For each test case, print a single line containing the string `"DPS"` if the string is a DPS or `"!DPS"` if it is not (without quotes). ### Constraints - $1 \\le T \\le 10^2$ - $1 \\le |S| \\le 10^4$ - $S$ contains only lowercase English letters ### Subtasks \*\*Subtask #1 (30 points):\*\* $S$ contains only the letter 'a' \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 4 code xyxyxy sad baab ``` ### Example Output ``` !DPS DPS DPS !DPS ``` ### Explanation \*\*Example case 1:\*\* It is impossible to convert the string "code" into a palindrome by permuting and changing a single character. \*\*Example case 2:\*\* We can permute the string to "xyxyyx" and then replace the $3$-rd character by 'y'. We obtain the string "xyyyyx", which is a palindrome. \*\*Example case 3:\*\* In the first operation, we can leave the string unchanged ("sad"), and then, we can replace its $1$-st character by 'd'. We obtain "dad", which is a palindrome. \*\*Example case 4:\*\* Even though the string is already a palindrome, it is impossible to obtain a palindrome again by permuting its characters and changing a character.
