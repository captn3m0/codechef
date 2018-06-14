---
category_name: medium
problem_code: CHEFLAKE
problem_name: 'Searching for the Recipe'
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
problem_author: hloya_ygrt
problem_tester: null
date_added: 15-05-2018
tags:
    - cook94
    - dynamic
    - hloya_ygrt
    - prefix
editorial_url: 'https://discuss.codechef.com/problems/CHEFLAKE'
time:
    view_start_date: 1526841000
    submit_start_date: 1526841000
    visible_start_date: 1526841000
    end_date: 1735669800
    current: 1528985561
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK94/mandarin/CHEFLAKE.pdf), [Russian](http://www.codechef.com/download/translated/COOK94/russian/CHEFLAKE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFLAKE.pdf) as well.

In the problem CHEFRUN, Chef and Kefa were looking for a secret recipe. Their adventure continues here! It turned out that the recipe has three pieces. They already have the first piece of the recipe, but the other two pieces are located at the coast of lake Piecal opposite to them. The lake can be represented as a rectangular grid with $N$ rows and $M$ columns. Some cells of the grid are filled with water, other cells contain big stones. Chef and Kefa decided to cooperate. Each cook takes his boat and crosses the lake to get one of the remaining pieces of the full recipe. Chef starts in the lower left corner cell of the lake and the piece he needs is located in the lower right corner cell; Kefa starts in the upper left cell and the piece he needs is located in the upper right cell. In order to avoid wasting time, the cooks have agreed that their paths must not intersect and neither of them can visit any cell twice. From each cell, a boat can move one cell up, down or right (if a cell in that direction exists); of course, the boats can't enter the cells with stones. Your task is to find the number of ways in which Chef and Kefa can obtain the full recipe (the number of pairs of their paths across the lake), modulo $10^9 + 7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - The following $N$ lines describe the grid. Each of these lines contains a single string with length $M$ containing only characters '.' (representing water) or '#' (representing stones). ### Output For each test case, print a single line containing one integer — the number of possible ways to get the recipe modulo $10^9+7$. ### Constraints - $1 \\le T \\le 3$ - $2 \\le N, M \\le 300$ - all corner cells do not contain stones ### Example Input ``` 1 4 3 ... ... .#. ... ``` ### Example Output ``` 5 ``` ### Explanation \*\*Example case 1.\*\* The following five ways are possible (uppercase letters denote the path of Kefa's boat, lowercase letters denote the path of Chef's boat): ``` ABC ... .#. abc A.E BCD .#. abc ADE BC. .#. abc ABE .CD .#. abc ABC cde b#f a.g ```
