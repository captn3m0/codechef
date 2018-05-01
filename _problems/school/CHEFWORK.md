---
category_name: school
problem_code: CHEFWORK
problem_name: Workers
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: adlet_zeineken
problem_tester: null
date_added: 3-04-2018
tags:
    - adlet_zeineken
    - april18
    - array
    - cakewalk
    - looping
    - minimum_element
editorial_url: 'https://discuss.codechef.com/problems/CHEFWORK'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525198928
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFWORK.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/CHEFWORK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFWORK.pdf) as well.

There are $N$ workers; each worker is of one of the following three types: - A \*translator\* translates some text from Chef's language to another langague. - An \*author\* writes some text in Chef's language. - An \*author-translator\* can both write a text in Chef's language and translate it to another language. Chef wants to have some text written and translated into some language (different from Chef's language). Chef can't do either of those tasks, but he can hire workers. For each $i$ ($1 \\le i \\le N$), if he hires the $i$-th worker, he must pay that worker $c\_i$ coins. Help Chef find the minimum total number of coins he needs to pay to have a text written and translated. It is guaranteed that it is possible to write and translate a text. ### Input - The first line of the input contains a single integer $N$ denoting the number of workers. - The second line contins $N$ space-separated integers $c\_1, c\_2, ..., c\_N$ denoting the numbers of coins Chef has to pay each hired worker. - The third line contains $N$ space-separated integers $t\_1, t\_2, ..., t\_N$ denoting the types of workers. For each valid $i$, the $i$-th worker is a translator if $t\_i = 1$, an author if $t\_i = 2$ or an author-translator if $t\_i = 3$. ### Output Print a single line containing one integer — the minimum number of coins Chef has to pay. ### Constraints - $1 \\le N \\le 1,000$ - $1 \\le c\_i \\le 100,000$ for each valid $i$ - $1 \\le t\_i \\le 3$ for each valid $i$ ### Subtasks \*\*Subtask #1 (15 points):\*\* all workers are author-translators \*\*Subtask #2 (85 points):\*\* original constraints ### Example Input ```
<tt>
5   
1 3 4 6 8   
1 2 1 2 3   
</tt>
<pre>\### Example Output ```
<tt>
4
</tt>
</pre>\### Explanation Chef can hire 2 workers: worker 1, who is a translator, and worker 2, who is an author. In total, he pays them $1 + 3 = 4$ coins.
