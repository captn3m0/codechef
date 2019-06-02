---
category_name: easy
problem_code: PROBLEMS
problem_name: 'Problem Sort'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: vidyut_1
problem_tester: null
date_added: 15-06-2018
tags:
    - aug18
    - easy
    - likecs
    - sorting
    - vidyut_1
    - vidyut_1
editorial_url: 'https://discuss.codechef.com/problems/PROBLEMS'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472956
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/PROBLEMS.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/PROBLEMS.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/PROBLEMS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/PROBLEMS.pdf) as well.

Chef is organising a contest with $P$ problems (numbered $1$ through $P$). Each problem has $S$ subtasks (numbered $1$ through $S$). The \*difficulty\* of a problem can be calculated as follows: - Let's denote the score of the $k$-th subtask of this problem by $SC\_k$ and the number of contestants who solved it by $NS\_k$. - Consider the subtasks sorted in the order of increasing score. - Calculate the number $n$ of valid indices $k$ such that $NS\_k > NS\_{k + 1}$. - For problem $i$, the difficulty is a pair of integers $(n, i)$. You should sort the problems in the increasing order of difficulty levels. Since difficulty level is a pair, problem $a$ is more difficult than problem $b$ if the number $n$ is greater for problem $a$ than for problem $b$, or if $a \\gt b$ and $n$ is the same for problems $a$ and $b$. ### Input - The first line of the input contains two space-separated integers $P$ and $S$ denoting the number of problems and the number of subtasks in each problem. - $2P$ lines follow. For each valid $i$, the $2i-1$-th of these lines contains $S$ space-separated integers $SC\_1, SC\_2, \\dots, SC\_S$ denoting the scores of the $i$-th problem's subtasks, and the $2i$-th of these lines contains $S$ space-separated integers $NS\_1, NS\_2, \\dots, NS\_S$ denoting the number of contestants who solved the $i$-th problem's subtasks. ### Output Print $P$ lines containing one integer each — the indices of the problems in the increasing order of difficulty. ### Constraints - $1 \\le P \\le 100,000$ - $2 \\le S \\le 30$ - $1 \\le SC\_i \\le 100$ for each valid $i$ - $1 \\le NS\_i \\le 1,000$ for each valid $i$ - in each problem, the scores of all subtasks are unique ### Subtasks \*\*Subtask #1 (25 points):\*\* $S = 2$ \*\*Subtask #2 (75 points):\*\* original constraints ### Example Input ``` 3 3 16 24 60 498 861 589 14 24 62 72 557 819 16 15 69 435 779 232 ``` ### Example Output ``` 2 1 3 ```
