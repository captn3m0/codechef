---
category_name: easy
problem_code: SHKSTR
problem_name: 'Sheokand and String'
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
problem_author: jitendersheora
problem_tester: mgch
date_added: 19-05-2018
tags:
    - easy
    - jitendersheora
    - jitendersheora
    - june18
    - likecs
    - offline
    - tries
time:
    view_start_date: 1528709405
    submit_start_date: 1528709405
    visible_start_date: 1528709405
    end_date: 1735669800
    current: 1528985559
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JUNE18/mandarin/SHKSTR.pdf), [Russian](http://www.codechef.com/download/translated/JUNE18/russian/SHKSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE18/vietnamese/SHKSTR.pdf) as well.

Sheokand loves strings. Chef has $N$ strings $S\_1, S\_2, \\dots, S\_N$ which he wants to give to Sheokand; however, he doesn't want to give them away for free, so Sheokand must first correctly answer $Q$ queries Chef asks him. In each query, Chef tells Sheokand an integer $R$ and a string $P$. Consider Chef's strings $S\_1$ through $S\_R$. Out of these strings, consider all strings such that their longest common prefix with $P$ is maximum possible. Sheokand should find the lexicographically smallest of these strings. Sheokand is busy with his exams. Can you solve the queries for him? ### Input - The first line of the input contains a single integer $N$. - $N$ lines follow. For each valid $i$, the $i$-th of these lines contains Chef's string $S\_i$. - The next line contains a single integer $Q$. - The following $Q$ lines describe queries. Each of these lines contains an interger $R$, followed by a space and a string $P$. ### Output For each query, print a single line containing the string that satisfies the required conditions — the answer to that query. ### Constraints - $1 \\le N \\le 100,000$ - $1 \\le |S\_i| \\le 10$ for each valid $i$ - $1 \\le Q \\le 100,000$ - $1 \\le R \\le N$ - $1 \\le |P| \\le 10$ ### Subtasks \*\*Subtask #1 (30 points):\*\* $1 \\le N, R \\le 1,000$ \*\*Subtask #2 (70 points):\*\* original constraints ### Example Input ``` 4 abcd abce abcdex abcde 3 3 abcy 3 abcde 4 abcde ``` ### Example Output ``` abcd abcdex abcde ``` ### Explanation \*\*Query 1:\*\* For strings $S\_1$ through $S\_3$, the longest common prefix is always "abc", but "abcd" is the lexicographically smallest of these three strings. \*\*Query 2:\*\* For strings $S\_1$ through $S\_3$, the longest common prefix with maximum length is "abcde" and the only string for which it is the LCP is "abcdex", so this is the answer. \*\*Query 3:\*\* For strings $S\_1$ through $S\_4$, the longest common prefix with maximum length is "abcde"; it is the LCP for strings "abcdex" and "abcde", but "abcde" is the lexicographically smaller string, so it is the answer.
