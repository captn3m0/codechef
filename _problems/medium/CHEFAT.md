---
category_name: medium
problem_code: CHEFAT
problem_name: 'Chef at the Food Fair'
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
problem_author: bciobanu
problem_tester: null
date_added: 27-12-2017
tags:
    - april18
    - bciobanu
    - lazypropagation
    - medium
    - segtree
    - taylor
editorial_url: 'https://discuss.codechef.com/problems/CHEFAT'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFAT.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/CHEFAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFAT.pdf) as well.

A food fair is being organised in Chef's town. $N$ booths were set up in a straight line and numbered $1$ through $N$. For each $i$ ($1 \\le i \\le N$), the probability with which the food served at booth $i$ will cause food poisoning at the beginning of the day is $P\_i$. Over the course of the day, the Chef observes that certain booths might decide to offer less unhealthy food based on feedback from customers. You should process $Q$ queries of the following two types: - $0\\;L\\;R$ — Compute the probability that eating at each booth between booths $L$ and $R$ (inclusive) does not cause food poisoning. - $1\\;L\\;R\\;T$ — Each booth between booths $L$ and $R$ (inclusive) starts offering food that is $T$ times more likely to cause food poisoning. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N$ space-separated decimal numbers $P\_1, P\_2, P\_3, \\dots, P\_N$. - Each of the following $Q$ lines describes one query in the format $0\\;L\\;R$ or $1\\;L\\;R\\;T$. Here, $L$ and $R$ are integers and $T$ is a decimal number. ### Output For each query of type $0$, print a single line containing one real number — the probability of not getting food poisoning. Your answer will be considered correct if its absolute error doesn't exceed $10^{-6}$. ### Constraints - $1 \\le N, Q \\le 10^5$ - $0 \\le P\_i \\le 0.9$ for each valid $i$ - $1 \\le L \\le R \\le N$ - $0 \\le T 4 7 0.1 0.25 0.85 0.43 0 1 3 1 2 4 0.73 1 1 3 0.00255 1 3 4 0.01258 0 1 4 0 2 3 0 3 3 \### Example Output ```
<tt>
0.10125000
0.99531391
0.99951473
0.99998009
</tt>
<pre>
\### Explanation The answer to the first query is $(1 - 0.1) \\cdot (1 - 0.25) \\cdot (1 - 0.85) = 0.10125$. After the second query, the probabilities of getting food poisoning at each booth become $\[0.1, 0.1825, 0.6205, 0.3139\]$.
