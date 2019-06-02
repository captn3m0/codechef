---
category_name: medium
problem_code: F2NDMAX
problem_name: 'Finding Second Maximum'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 20-07-2018
tags:
    - cook96
    - graph
    - implementation
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/F2NDMAX'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472973
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/F2NDMAX.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/F2NDMAX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/F2NDMAX.pdf) as well.

Chef is playing a game with his brother. Chef has a sequence of $N$ distinct integers (indexed from $1$), which he keeps hidden from his brother. Chef's brother should find the index of the second largest integer in this sequence. In order to do that, he may ask any number of questions of the following kind: "Is the $i$-th element of the sequence bigger than the $j$-th element?" Chef immediately answers "yes" or "no" to each question. In order to help his brother, Chef initially gave him $M$ pieces of information. Each of them is in the form of an answer to one question: "The $A$-th element of the sequence is bigger than the $B$-th element." Chef agreed to take his little brother to the cinema if he could ask some questions (possibly zero) in such a way that the index of the second largest element is uniquely determined by them. However, if he asks too many questions, it will be too late and they won't go to the cinema. Since Chef's brother wants to go to the cinema, he wants to ask questions in such a way that the maximum possible number of questions he has to ask is minimised, so that they finish the game quickly. On the other hand, Chef is too lazy to take his brother to the cinema, so he wants the game to last as long as possible; that's why, every time after his brother asks a question, he may permute the sequence in any way such that the resulting sequence is still consistent with all the information his brother has, and only then answer the question. Find the number of questions Chef's brother has to ask before he can uniquely determine the second largest element of the sequence if both Chef and his brother play optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $M$. - $M$ lines follow. Each of these lines contains two space-separated integers $A$ and $B$, meaning that the $A$-th element of the sequence is bigger than the $B$-th element. ### Output For each test case, print a single line containing one integer — the number of questions Chef's brother has to ask in order to know the second largest element. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 300,000$ - $0 \\le M \\le 300,000$ - $1 \\le A, B \\le N$ - $A \\neq B$ - there is at least one sequence satisfying all $M$ initial conditions - No two pieces of information will be about same pair of elements - the sum of $N$ for all test cases does not exceed $300,000$ - the sum of $M$ for all test cases does not exceed $300,000$ ### Example Input ``` 1 4 2 1 2 3 4 ``` ### Example Output ``` 2 ```
