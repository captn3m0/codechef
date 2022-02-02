---
category_name: easy
problem_code: SUMPOWER
problem_name: 'Summary Power'
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
problem_author: isaf27
problem_tester: null
date_added: 24-06-2018
tags:
    - easy
    - isaf27
    - isaf27
    - likecs
    - ltime61
    - prefix
    - sliding
editorial_url: 'https://discuss.codechef.com/problems/SUMPOWER'
time:
    view_start_date: 1530378000
    submit_start_date: 1530378000
    visible_start_date: 1530378000
    end_date: 1735669800
    current: 1559472961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME61/mandarin/SUMPOWER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME61/russian/SUMPOWER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME61/vietnamese/SUMPOWER.pdf) as well.

You work as an engineer. You were given an empty board with $K$ consecutive cells; at any moment, each cell can display one character. You want the board to display a string $S$ with length $N &gt; K$. Since the board isn't large enough, you want to display the string in $N-K+1$ steps. In the $i$-th step ($1 \\le i \\le N-K+1$), you'll make the board display the characters $S\_i, S\_{i+1}, \\dots, S\_{i+K-1}$. The power required to switch the board from step $i$ to step $i+1$ (for $1 \\le i \\le N-K$) is equal to the number of characters displayed on the board that have to change between these steps. You should find the total power required for the whole process of displaying a string, i.e. the sum of powers required for switching between all consecutive pairs of steps. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains a single string $S$ with length $N$. ### Output For each test case, print a single line containing one integer — the total power required for text switching. ### Constraints - $1 \\le T \\le 1,000$ - $2 \\le N \\le 10^5$ - $1 \\le K \\lt N$ - each character of $S$ is a lowercase English letter - the sum of $N$ for all test cases does not exceed $10^6$ ### Subtasks \*\*Subtask #1 (20 points):\*\* - $1 \\le T \\le 100$ - $2 \\le N \\le 50$ \*\*Subtask #2 (80 points):\*\* original constraints ### Example Input ``` 3 6 3 aabbcc 5 2 abccc 4 3 aabb ``` ### Example Output ``` 4 3 1 ``` ### Explanation \*\*Example case 1:\*\* - In step $1$, the board is displaying "aab". - In step $2$, the board is displaying "abb". - In step $3$, the board is displaying "bbc". - In step $4$, the board is displaying "bcc". The power required for switching from the $1$-st to the $2$-nd step is $1$, because cell $1$ changes from 'a' to 'a' (requiring power $0$), cell $2$ changes from 'a' to 'b' (requiring power $1$) and cell $3$ changes from 'b' to 'b' (requiring power $0$); $0 + 1 + 0 = 1$. The power required for switching between the $2$-nd and $3$-rd step is $2$ and the power required for switching between the $3$-rd and $4$-th step is $1$. Therefore, the answer is $1 + 2 + 1 = 4$.
