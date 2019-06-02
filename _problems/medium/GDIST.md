---
category_name: medium
problem_code: GDIST
problem_name: 'Grammar Distance'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 16-09-2018
tags:
    - bciobanu
    - context
    - cyk
    - dynamic
    - medium
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/GDIST'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472974
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/GDIST.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/GDIST.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/GDIST.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/GDIST.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/GDIST.pdf) as well. You are given a [context free grammar](https://en.wikipedia.org/wiki/Context-free_grammar#Formal_definitions) $G$ and a string $S$. Find the minimum Levenshtein distance between $S$ and any string $W$ accepted by $G$. ### Input - The first line of the input contains two space-separated integers $V$ and $R$ denoting the number of \*non-terminals\* and the number of \*productions\* of $G$ respectively. - The following $R$ lines describe productions. - Each line starts with an integer $T$ denoting the production type. - If $T = 0$, a space and three space-separated integers $X$, $Y$ and $Z$ denoting a production $X \\rightarrow YZ$ follow. - If $T = 1$, a space, an integer $X$, another space and a character $c$ denoting a production $X \\rightarrow c$ follow. - If $T = 2$, a space and a single integer $X$ denoting a production $X \\rightarrow \\varepsilon$ follows. - The next line contains a single integer $ST$ denoting the starting symbol of $G$. - Last line contains the string $S$ as explained in statement. ### Output Print a single line containing one integer — the minimum distance. It is guaranteed that the minimum distance fits in a 64-bit signed integer. ### Constraints - $1 \\le V \\le 60$ - $1 \\le |S| \\le 60$ - $1 \\le R \\le 256$ - $0 \\le X, Y, Z \\le V - 1$ - $c$ is an English letter or a decimal digit - $S$ consist of english letters or decimal digit or both. ### Example Input ``` 5 7 0 0 1 2 0 0 3 4 2 0 1 1 a 1 3 b 0 4 0 3 0 2 0 1 0 ababb ``` ### Example Output ``` 2 ``` ### Explanation The grammar recognizes all even-length palindromes over the alphabet $\\{a, b\\}$. We can transform the given string into "abaaba" with one insertion and one substitution.
