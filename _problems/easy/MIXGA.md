---
category_name: easy
problem_code: MIXGA
problem_name: 'Mixi Game'
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
problem_author: allllekssssa
problem_tester: null
date_added: 12-08-2018
tags:
    - allllekssssa
    - cook
    - cook97
    - game
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/MIXGA'
time:
    view_start_date: 1534703400
    submit_start_date: 1534703400
    visible_start_date: 1534703400
    end_date: 1735669800
    current: 1559472952
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK97/mandarin/MIXGA.pdf), [Russian](http://www.codechef.com/download/translated/COOK97/russian/MIXGA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK97/vietnamese/MIXGA.pdf) as well.

Vanja and Miksi have already finished everything for this year at their university, so they decided to spend their free time playing a game with a \*binary\* sequence $A\_1, A\_2, \\dots, A\_N$ (i.e. a sequence containing only integers $0$ and $1$). At the beginning of the game, Vanja and Miksi write down the expression $\* A\_1 \* A\_2 \* A\_3 \* \\ldots \* A\_N$ (note below that each $\*$ is a placeholder and does not denote multiplication). The players take turns alternately, starting with Vanja. The game lasts $N$ turns. In each turn, the current player must replace the first (leftmost) remaining $\*$ by the sign $+$ or $-$ (or, equivalently, by the operation of addition or subtraction). After the last turn, the boys calculate the resulting value $V$ of the expression. If $|V| \\ge K$, the winner is Vanja; otherwise, the winner is Miksi. Please predict the winner of the game if both players play optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. ### Output For each test case, print a single line containing one integer — $1$ if Vanja (the first player) is the winner or $2$ if Miksi (the second player) is the winner. ### Constraints - $1 \\le T \\le 50$ - $1 \\le N \\le 3 \\cdot 10^4$ - $0 \\le K \\le 3 \\cdot 10^4$ - $0 \\le A\_i \\le 1$ for each valid $i$ ### Example Input ``` 2 2 1 1 0 3 5 0 1 0 ``` ### Example Output ``` 1 2 ``` ### Explanation \*\*Example case 1:\*\* $K = 1$, so if Vanja replaces the first $\*$ by $+$, the value of the final expression will be $V = 1$; then, $K \\le |V|$, so the winner is Vanja. \*\*Example case 2:\*\* $K = 5$, but the absolute value of the final expression cannot be greater than $1$. The winner is Miksi.
